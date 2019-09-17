<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\State;
use App\Student;
use App\Bill;
use App\Transaction;
use App\BillDetail;
use App\SchoolSession;
use App\Term;
use App\StudentWard;
use App\Ward;
use App\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;
use Cart;

class CustomersController extends Controller{

    public function getStudents($ward_id){
        $student_wards = StudentWard::where("ward_id", $ward_id)->get();
        foreach($student_wards as $key=>$student_ward){
            $students[$key] = Student::join("class_rooms", "class_rooms.id", "=", "students.class_id")
                                ->select("students.*", "class_rooms.name as class_name")
                                ->where("students.id", $student_ward->student_id)->first();
            $student_bill = Bill::where(["type"=>2, "type_id"=> $student_ward->student_id])->sum("amount");
            $students_class_bill = Bill::join("bill_details", "bills.id", "=", "bill_details.bill_id")
                                    ->selectRaw("sum(bills.amount) as total")
                                    ->where(["bill_details.student_id"=> $student_ward->student_id])->first();
            //Bill::where(["type"=>1, "type_id"=> $students[$key]->class_id])->sum("amount");

            $paid = Transaction::where(["student_id"=> $students[$key]->id])
                            ->orWhere(function ($q) use ($students, $key) {
                                $q->where('student_id', $students[$key]->id);
                            })->sum('amount_paid');
            $students[$key]['bills_total'] = $student_bill + $students_class_bill->total;
            $students[$key]['paid'] = $paid;
        }
        return response()->json(['success' => $students]);
        
    }

    public function getBillsTotal($ward_id){
        $student_wards = StudentWard::where("ward_id", $ward_id)->get();
        $bills = 0;
        foreach($student_wards as $key=>$student_ward){
            $student_id = $student_ward->student_id;
            $student = Student::where("id", $student_id)->first();
            $student_bill = Bill::where(["type"=>2, "type_id"=> $student_ward->student_id])->sum("amount");
            $students_class_bill = Bill::join("bill_details", "bills.id", "=", "bill_details.bill_id")
                                    ->selectRaw("sum(bills.amount) as total")
                                    ->where(["bill_details.student_id"=> $student->id])->first();
            $transactions = Transaction::where("student_id", $student->id)->sum("amount_paid");
            $bills += $student_bill + $students_class_bill->total - $transactions;
        }
        return response()->json(['success' => $bills]);
        
    }

    public function getStudentBills($student_id){
        $student = Student::where("id", $student_id)->first();
        $transactions = Transaction::where("student_id", $student->id)->sum("amount_paid");
        $student_bill = Bill::where(["type"=>2, "type_id"=> $student_id])->sum("amount");
        //$students_class_bill = Bill::where(["type"=>1, "type_id"=> $student->class_id])->sum("amount");
        $students_class_bill = Bill::join("bill_details", "bills.id", "=", "bill_details.bill_id")
        ->selectRaw("sum(bills.amount) as total")
        ->where(["bill_details.student_id"=> $student->id])->first();

        $bills = $student_bill + $students_class_bill->total - $transactions;

        $student_bills =  Bill::join("school_sessions", "bills.session_id", "=", "school_sessions.id")
        ->select("bills.*", "school_sessions.name as session_name")
        ->where(["type"=>2, "type_id"=> $student_id])->get();
        $student_class_bills = Bill::join("bill_details", "bills.id", "=", "bill_details.bill_id")
        ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
        ->selectRaw("bills.*, bill_details.id as bill_details_id, school_sessions.name as session_name")
        ->where(["bill_details.student_id"=> $student->id])->get();
        
        if(count($student_bills) <1  && count($student_class_bills) >0){
            $all_student_bills = $student_class_bills;
        }elseif(count($student_bills) >0  && count($student_class_bills) <1){
            $all_student_bills = $student_bills;
        }elseif(count($student_bills) <1  && count($student_class_bills) <1){
            $all_student_bills = [];
        }elseif(count($student_bills) >0  && count($student_class_bills) >0){
            $all_student_bills = array_merge($student_bills, $student_class_bills);
        }
        return response()->json(["all_student_bills"=>$all_student_bills,  'bills_total' => $bills]);
    }

    public function getAllStudentsBills($guardian_id){
        $all_students_bills = [];
        $bills = $this->getBillsTotal($guardian_id);

            $transactions = Transaction::join("bills", "bills.id", "=", "transactions.bill_id")
            ->join("school_sessions", "school_sessions.id", "=", "bills.session_id")
            ->join("students", "students.id", "=", "transactions.student_id")
            ->select("transactions.*", "bills.title", "bills.amount", "bills.term", "bills.type", "bills.type_id", "school_sessions.name as session_name", "students.name as student_name","students.id as student_id") 
            ->where("transactions.ward_id1", $guardian_id)->get();
        return response()->json(["transactions"=>$transactions,  'bills_total' => $bills]);
    }

    public function getBillDetails($type, $type_id, $student_id){
        if($type == 1){
            $bill_details = Bill::join("school_sessions", "bills.session_id", "=", "school_sessions.id")
            ->select("bills.*", "school_sessions.name as session_name")
            ->where("type_id", $type_id)->first();
        }elseif($type == 2){
            $bill_details = BillDetails::join("bills", "bills.id", "=", "bill_details.bill_id")
            ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
            ->select("bills.*", "school_sessions.name as session_name")
            ->select("bills.*", "bill_details.id as bill_details_id")
            ->where("id", $type_id)->first();
        }
        $transactions = Transaction::where(["bill_id"=>$type_id, "student_id"=>$student_id])->get();
        return response()->json(["success"=>$bill_details, "transactions"=>$transactions]);
    }

    public function getStudent($student_id){
        $student = Student::where("id", $student_id)->first();
        
        return response()->json(['success' => $student]);
        
    }

   
}
