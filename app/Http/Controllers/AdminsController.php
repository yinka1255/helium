<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Permission;
use App\Admin;
use App\Student;
use App\Bill;
use App\Transaction;
use App\BillDetail;
use App\SchoolSession;
use App\Term;
use App\StudentWard;
use App\Ward;
use App\ClassRoom;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class AdminsController extends Controller{

    public function index(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        
        return view('admin/index')->with(["loggedInUser"=>$loggedInUser]);
    }

    public function classes(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $classes = ClassRoom::where("status", 1)->get();
        return view('admin/classes')->with(["loggedInUser"=>$loggedInUser, "classes"=>$classes]);
    }

    public function newClass(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        return view('admin/new_class')->with(["loggedInUser"=>$loggedInUser]);
    }
    public function editClass($class_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $class = ClassRoom::where("id", $class_id)->first();
        return view('admin/edit_class')->with(["loggedInUser"=>$loggedInUser, "class"=>$class]);
    }

    public function saveClass(Request $request){
        $check_class = ClassRoom::where("name", $request->input("name"))->first();
        if($check_class != null){
            Session::flash('error', 'Sorry! A class with the provided name ('.$check_class->name.') already exist on this platform');
            return back();
        }
        $class = new ClassRoom;
        $class->name = $request->input("name");
        $class->status = 1;
        if($class->save()){
            Session::flash('success', 'New class has been created successfully');
            return redirect('/admin/classes');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

   
    public function updateClass(Request $request){

        $class = ClassRoom::where("id", $request->input("id"))->first();
        $class->name = $request->input("name");
        if($class->save()){
            Session::flash('success', 'New class has been updated successfully');
            return redirect('/admin/classes');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function deleteClass($id){

        $class = ClassRoom::where("id", $id)->first();
        $class->status = 2;
        if($class->save()){
            Session::flash('success', $class->name.' has been deleted successfully');
            return redirect('/admin/classes');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function students(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "student_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $students = Student::join("class_rooms", "students.class_id", "class_rooms.id")
                    ->select("students.*", "class_rooms.name as class_name")
                    ->where("students.status", 1)->get();
        
        return view('admin/students')->with(["loggedInUser"=>$loggedInUser, "responses"=>$students]);
    }

    public function manageWardsStudents($ward_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "student_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $ward = Ward::where("id", $ward_id)->first();
        $students = Student::join("class_rooms", "students.class_id", "class_rooms.id")
                    ->join("student_wards", "students.id", "student_wards.student_id")
                    ->select("students.*", "class_rooms.name as class_name")
                    ->where(["students.status"=> 1, "student_wards.ward_id"=>$ward_id])->get();
        
        return view('admin/wards_students')->with(["loggedInUser"=>$loggedInUser, "ward"=>$ward, "responses"=>$students]);
    }

    public function wards(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "student_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $wards = Ward::where("status", 1)->get();
        
        return view('admin/wards')->with(["loggedInUser"=>$loggedInUser, "responses"=>$wards]);
    }

    public function newWard(Request $request){

        $check_ward = Ward::where("name", $request->input("name"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided name ('.$check_ward->name.') already exist on this platform');
            return back();
        }
        $check_ward = Ward::where("email", $request->input("email"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided email ('.$check_ward->email.') already exist on this platform');
            return back();
        }
        $check_ward = Ward::where("phone", $request->input("phone"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided phone ('.$check_ward->phone.') already exist on this platform');
            return back();
        }
        
       
        $ward = new Ward;
        $ward->name = $request->input("name");
        $ward->phone = $request->input("phone");
        $ward->email = $request->input("email");
        $ward->status = 1;
        if($ward->save()){
            Session::flash('success', $request->input("name").' has been created successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function editWard(Request $request){

        $check_ward = Ward::where(["name"=> $request->input("name")])->where('id', '<>', $request->input("id"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided name ('.$check_ward->name.') already exist on this platform');
            return back();
        }
        $check_ward = Ward::where(["email"=> $request->input("email")])->where('id', '<>', $request->input("id"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided email ('.$check_ward->email.') already exist on this platform');
            return back();
        }
        $check_ward = Ward::where(["phone"=> $request->input("phone")])->where('id', '<>', $request->input("id"))->first();
        if($check_ward != null){
            Session::flash('error', 'Sorry! A guardian with the provided phone ('.$check_ward->phone.') already exist on this platform');
            return back();
        }
       
        $ward = Ward::where("id", $request->input("id"))->first();
        $ward->name = $request->input("name");
        $ward->phone = $request->input("phone");
        $ward->email = $request->input("email");
        $ward->status = 1;
        if($ward->save()){
            Session::flash('success', $request->input("name").' has been updated successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function newStudent(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "student_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $class_rooms = ClassRoom::where("status", 1)->get();
        $wards = Ward::where("status", 1)->get();
        return view('admin/new_student')->with(["loggedInUser"=>$loggedInUser, "class_rooms"=>$class_rooms, "wards"=>$wards]);
    }

    public function editStudent($student_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "student_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $student = Student::join("class_rooms", "class_rooms.id", "=", "students.class_id")
                            ->select("students.*", "class_rooms.id as class_id", "class_rooms.name as class_name")
                    ->where("students.id", $student_id)->first();
        $student_wards = StudentWard::where("student_id", $student->id)->get();
        $class_rooms = ClassRoom::where("id", $student->class_id)->get();
        $wards_data = Ward::where("status", 1)->get();
        foreach($student_wards as $key=>$student_ward){
            $wards[$key] = Ward::where("id", $student_ward->ward_id)->first();
        }

        
        return view('admin/edit_student')->with(["loggedInUser"=>$loggedInUser, "wards_data"=>$wards_data, "class_rooms"=>$class_rooms, "wards"=>$wards, "student"=>$student]);
    }
    public function manageStudentBills($student_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "bill_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $student = Student::join("class_rooms", "class_rooms.id", "=", "students.class_id")
                            ->select("students.*", "class_rooms.id as class_id", "class_rooms.name as class_name")
                    ->where("students.id", $student_id)->first();
        $student_wards = StudentWard::where("student_id", $student->id)->get();
        $class_rooms = ClassRoom::where("id", $student->class_id)->get();
        foreach($student_wards as $key=>$student_ward){
            $wards[$key] = Ward::where("id", $student_ward->ward_id)->first();
        }

        
        $sessions = SchoolSession::where("status", 1)->get();
        $bill_details = BillDetail::join("students", "students.id", "=", "bill_details.student_id")
                        ->join("bills", "bills.id", "=", "bill_details.bill_id")
                        ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                        ->select("bill_details.*", "bills.title", "bills.due_date", "bills.term", "school_sessions.name as session_name", "bills.amount","students.name as student_name")
                        ->where("bill_details.student_id", $student->id)->get();
        foreach($bill_details as $key=>$bill_detail){
            $bill_details[$key]['total'] = Transaction::where(["student_id"=>$bill_detail->student_id, "bill_details_id"=>$bill_detail->id])->sum("amount_paid");
        }
        //var_dump($wards[0]);
        $transactions = Transaction::join("bills", "bills.id", "=", "transactions.bill_id")
                    ->join("students", "students.id", "=", "transactions.student_id")
                    ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                    ->select("transactions.*", "school_sessions.name as session_name", "bills.title as bill_title", "bills.amount", "bills.term", "bills.description as bills_description", "students.name as student_name")
                    ->where(["transactions.student_id"=> $student->id])->get();

        return view('admin/manage_student_bills')->with(["loggedInUser"=>$loggedInUser, "sessions"=>$sessions, "bill_details"=>$bill_details, "class_rooms"=>$class_rooms, "wards"=>$wards, "student"=>$student, "transactions"=>$transactions]);
    }

    public function studentBillsManage($student_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $student = Student::join("class_rooms", "class_rooms.id", "=", "students.class_id")
                            ->select("students.*", "class_rooms.id as class_id", "class_rooms.name as class_name")
                    ->where("students.id", $student_id)->first();
        $student_wards = StudentWard::where("student_id", $student->id)->get();
        $class_rooms = ClassRoom::where("id", $student->class_id)->get();
        foreach($student_wards as $key=>$student_ward){
            $wards[$key] = Ward::where("id", $student_ward->ward_id)->first();
        }

        
        $sessions = SchoolSession::where("status", 1)->get();
        $bill_details = BillDetail::join("students", "students.id", "=", "bill_details.student_id")
                        ->join("bills", "bills.id", "=", "bill_details.bill_id")
                        ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                        ->select("bill_details.*", "bills.title", "bills.due_date", "bills.term", "school_sessions.name as session_name", "bills.amount","students.name as student_name")
                        ->where("bill_details.student_id", $student->id)->get();
        foreach($bill_details as $key=>$bill_detail){
            $bill_details[$key]['total'] = Transaction::where(["student_id"=>$bill_detail->student_id, "bill_details_id"=>$bill_detail->id])->sum("amount_paid");
        }
        //var_dump($wards[0]);
        return view('admin/student_bills_manage')->with(["loggedInUser"=>$loggedInUser, "bill_details"=>$bill_details, "class_rooms"=>$class_rooms, "wards"=>$wards, "student"=>$student]);
    }

    public function saveStudent(Request $request){

        $check_student = Student::where("name", $request->input("name"))->first();
        if($check_student != null){
            Session::flash('error', 'Sorry! A student with the provided name ('.$check_student->name.') already exist on this platform');
            return back();
        }
        
        $student = new Student;
        $student->name = $request->input("name");
        $student->student_id = $request->input("student_id");
        $student->class_id = $request->input("class_id");
        $student->status = 1;

        if($student->save()){
            
            $studentWard = new StudentWard;
            $studentWard->student_id = $student->id;
            $studentWard->ward_id = $request->input("ward_id");
            $studentWard->status = 1;
            $studentWard->save();
            
            Session::flash('success', 'New student has been created successfully');
            return redirect('/admin/students');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function promoteClass(Request $request){

        $class_student = Student::where(["class_id"=> $request->input("class_id")])->get();
        foreach($class_students as $class_student){
            $class_student->$request->input("new_class_id");
            if($class_student->save()){
                Session::flash('success', 'All students have been promoted');
                return back();
            }else{
                Session::flash('error', 'Sorry! A server error occured');
                return back();
            }
        }
    }

    public function promote(Request $request){
        $class_id = $request->input("class_id");
        $students_in_class = Student::where("class_id", $request->input("id"))->get();
        foreach($students_in_class as $key=>$student_in_class){
            $student_in_class->class_id = $request->input("class_id");
            $student_in_class->save();
        }
        Session::flash('success', 'All students promoted successfully');
        return back();
    }


    public function updateStudent(Request $request){

        $student = Student::where("id", $request->input("id"))->first();
        $student->name = $request->input("name");
        $student->student_id = $request->input("student_id");
        $student->class_id = $request->input("class_id");
        $student->status = 1;
        if($student->save()){
            $student_ward = StudentWard::where("student_id", $student->id)->first();
            $student_ward->ward_id = $request->input("ward_id");
            
            $student_ward->status = 1;
            $student_ward->save();
            /*
            $ward = Ward::where("id", $request->input("ward2_id"))->first();
            $ward->name = $request->input("ward2_name");
            $ward->phone = $request->input("ward2_phone");
            $ward->email = $request->input("ward2_email");
            $ward->password = bcrypt($student->student_id);
            $ward->status = 1;
            $ward->save();
            */
            Session::flash('success', 'Student data has been updated successfully');
            return redirect('/admin/students');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function deleteStudent($id){

        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $student = Student::where("id", $id)->first();
        $student->status = 2;
        if($student->save()){
            Session::flash('success', $student->name.' has been deleted successfully');
            return redirect('/admin/students');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function classStudent($id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $students = Student::where("class_id", $id)->get();
        $class = ClassRoom::where("id", $id)->first();
        $class_rooms = ClassRoom::where("status", 1)->get();
        return view('/admin/class_students')->with(["loggedInUser"=>$loggedInUser, "class_rooms"=>$class_rooms, "students"=>$students,"class"=>$class]);
    }

    public function billClassStudent($id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $students = Student::where("class_id", $id)->get();
        $class = ClassRoom::where("id", $id)->first();
        return view('/admin/bill_class_students')->with(["loggedInUser"=>$loggedInUser, "students"=>$students,"class"=>$class]);
    }

    public function newClassBill($class_id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "bill_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $bills = Bill::join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                    ->select("bills.*", "school_sessions.id as session_id", "school_sessions.name as session_name")
                    ->where(["bills.type"=> 1, "bills.type_id"=>$class_id])->get();
        $class = ClassRoom::where("id", $class_id)->first();
        $sessions = SchoolSession::where("status", 1)->get();
        return view('/admin/new_class_bill')->with(["loggedInUser"=>$loggedInUser,"class"=>$class, "bills"=>$bills, "sessions"=>$sessions]);
    }

    public function saveClassBill(Request $request){
        //$check_session = SchoolSession::where("name", $request->input("name"))->first();
        // if($check_session != null){
        //     Session::flash('error', 'Sorry! A class with the provided name ('.$check_session->name.') already exist on this platform');
        //     return back();
        // }
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "bill_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $check = Bill::where(["session_id"=>$request->input("session_id"), "term"=>$request->input("term"), "title"=>$request->input("title"), "type"=>1, "type_id"=>$request->input("class_id"), "status"=>1])->count();
        if($check > 0){
            Session::flash('error', 'Sorry! this bill with the same session, term, class and title has already been created...');
            return back();
        }
        $bill = new Bill;
        $bill->type = 1;
        $bill->type_id = $request->input("class_id");
        $bill->title = $request->input("title");
        $bill->description = $request->input("description");
        $bill->amount = $request->input("amount");
        $bill->due_date = $request->input("due_date");
        $bill->session_id = $request->input("session_id");
        $bill->term = $request->input("term");
        $bill->status = 1;
        if($bill->save()){
            $students = Student::where("class_id", $request->input("class_id"))->get();
            foreach($students as $student){
                $bill_details = new BillDetail;
                $bill_details->student_id = $student->id;
                $bill_details->bill_id = $bill->id;
                $bill_details->status = 1;
                $bill_details->save();
            }
            Session::flash('success', 'New bill has been created successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function saveStudentBill(Request $request){
        //$check_session = SchoolSession::where("name", $request->input("name"))->first();
        // if($check_session != null){
        //     Session::flash('error', 'Sorry! A class with the provided name ('.$check_session->name.') already exist on this platform');
        //     return back();
        // }
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "bill_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $check = Bill::where(["session_id"=>$request->input("session_id"), "term"=>$request->input("term"), "title"=>$request->input("title"), "type"=>2, "type_id"=>$request->input("student_id"), "status"=>1])->count();
        if($check > 0){
            Session::flash('error', 'Sorry! this bill with the same session, term, student and title has already been created...');
            return back();
        }
        $bill = new Bill;
        $bill->type = 2;
        $bill->type_id = $request->input("student_id");
        $bill->title = $request->input("title");
        $bill->description = $request->input("description");
        $bill->amount = $request->input("amount");
        $bill->due_date = $request->input("due_date");
        $bill->session_id = $request->input("session_id");
        $bill->term = $request->input("term");
        $bill->status = 1;
        if($bill->save()){
            $students = Student::where("class_id", $request->input("class_id"))->get();
            foreach($students as $student){
                $bill_details = new BillDetail;
                $bill_details->student_id = $student->id;
                $bill_details->bill_id = $bill->id;
                $bill_details->status = 1;
                $bill_details->save();
            }
            Session::flash('success', 'New bill has been created successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function classBillDetails($class_id, $bill_id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $bill = Bill::join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                    ->select("bills.*", "school_sessions.id as session_id", "school_sessions.name as session_name")
                    ->where(["bills.id"=> $bill_id])->first();
        $class = ClassRoom::where("id", $class_id)->first();
        $sessions = SchoolSession::where("status", 1)->get();
        $bill_details = BillDetail::join("students", "students.id", "=", "bill_details.student_id")
                        ->select("bill_details.*", "students.name as student_name")
                        ->where("bill_details.bill_id", $bill_id)->get();
        foreach($bill_details as $key=>$bill_detail){
            $bill_details[$key]['total'] = Transaction::where(["student_id"=>$bill_detail->student_id, "bill_details_id"=>$bill_detail->id])->sum("amount_paid");
        }
        //var_dump($bill_details[0]);
        return view('/admin/class_bill_details')->with(["loggedInUser"=>$loggedInUser,"class"=>$class, "bill_details"=>$bill_details, "bill"=>$bill, "sessions"=>$sessions]);
    }

    public function billClassDetails($class_id, $bill_id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $bill = Bill::join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                    ->select("bills.*", "school_sessions.id as session_id", "school_sessions.name as session_name")
                    ->where(["bills.id"=> $bill_id])->first();
        $class = ClassRoom::where("id", $class_id)->first();
        $sessions = SchoolSession::where("status", 1)->get();
        $bill_details = BillDetail::join("students", "students.id", "=", "bill_details.student_id")
                        ->select("bill_details.*", "students.name as student_name")
                        ->where("bill_details.bill_id", $bill_id)->get();
        foreach($bill_details as $key=>$bill_detail){
            $bill_details[$key]['total'] = Transaction::where(["student_id"=>$bill_detail->student_id, "bill_details_id"=>$bill_detail->id])->sum("amount_paid");
        }
        //var_dump($bill_details[0]);
        return view('/admin/bill_class_details')->with(["loggedInUser"=>$loggedInUser,"class"=>$class, "bill_details"=>$bill_details, "bill"=>$bill, "sessions"=>$sessions]);
    }

    public function sessions(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "session_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $sessions = SchoolSession::where("status", 1)->get();
        
        return view('admin/sessions')->with(["loggedInUser"=>$loggedInUser, "sessions"=>$sessions]);
    }

    public function newSession(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "session_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        return view('admin/new_session')->with(["loggedInUser"=>$loggedInUser]);
    }
    public function editSession($session_id){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "session_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $session = SchoolSession::where("id", $session_id)->first();
        return view('admin/edit_session')->with(["loggedInUser"=>$loggedInUser, "session"=>$session]);
    }

    public function bills(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "bill_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $bills = Bill::join("school_sessions", "school_sessions.id", "=", "bills.session_id")
                        ->select("bills.*", "school_sessions.name as session_name")->get();
        foreach($bills as $key=>$bill){
            $class = ClassRoom::where("id", $bill->type_id)->first();
            $bills[$key]['class_name'] = $class->name;
            $bills[$key]['class_id'] = $class->id;
        }
        return view('admin/bills')->with(["loggedInUser"=>$loggedInUser, "bills"=>$bills]);
    }

    public function saveSession(Request $request){
        $check_session = SchoolSession::where("name", $request->input("name"))->first();
        if($check_session != null){
            Session::flash('error', 'Sorry! A class with the provided name ('.$check_session->name.') already exist on this platform');
            return back();
        }
        $session = new SchoolSession;
        $session->name = $request->input("name");
        $session->status = 1;
        if($session->save()){
            Session::flash('success', 'New session has been created successfully');
            return redirect('/admin/sessions');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function manualPayment(Request $request){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "transaction_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        
        $transaction = new Transaction;
        $student_wards = StudentWard::where("student_id", $request->input("student_id"))->get();
        foreach($student_wards as $key=>$student_ward){
            $k = $key+1;
            $col = "ward_id".$k;
            $transaction->$col = $student_ward->ward_id;
        }
        $transaction->student_id = $request->input("student_id");
        $transaction->bill_id = $request->input("bill_id");
        $transaction->bill_details_id = $request->input("bill_details_id");
        $transaction->amount_paid = $request->input("amount");
        $transaction->transaction_reference = time();
        $transaction->status = 1;
        if($transaction->save()){
            Session::flash('success', 'Congrats! Manual payment has been made successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

   
    public function updateSession(Request $request){

        $session = SchoolSession::where("id", $request->input("id"))->first();
        $session->name = $request->input("name");
        if($session->save()){
            Session::flash('success', 'Session has been updated successfully');
            return redirect('/admin/sessions');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function deleteSession($id){

        $session = SchoolSession::where("id", $id)->first();
        $session->status = 2;
        if($session->save()){
            Session::flash('success', $session->name.' has been deleted successfully');
            return redirect('/admin/sessions');
        }else{
            Session::flash('error', 'Sorry! An error occured');
            return back();
        }
    }

    public function transactions(){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "transaction_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        $transactions = Transaction::join("bills", "bills.id", "=", "transactions.bill_id")
                    ->join("students", "students.id", "=", "transactions.student_id")
                    ->join("school_sessions", "bills.session_id", "=", "school_sessions.id")
                    ->join("wards", "wards.id", "=", "transactions.ward_id1")
                    ->select("transactions.*", "school_sessions.name as session_name", "bills.title as bill_title", "bills.description as bills_description", "students.name as student_name", "wards.name as ward_name")
                    ->where(["transactions.status"=> 1])->get();
        
        return view('/admin/transactions')->with(["loggedInUser"=>$loggedInUser,"transactions"=>$transactions]);
    }



    public function admins(){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "admin_1") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        
        // $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
        //                 ->where("admins.user_id", $user->id)
        //                 ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        // if($this->checkPermission($loggedInUser, "admin_1") == false){
        //     Session::flash('error', 'Sorry! you do not have permission to access this feature');
        //     return back();
        // }
        $admins = Admin::all();

        return view('admin/admins')->with(["admins"=>$admins, "loggedInUser"=>$loggedInUser]);
    }  

    public function checkPermission($loggedInUser, $module){
        if(Permission::where("admin_id", $loggedInUser->id)->count() < 1)
        {
            return false;
        }else{
            $checkPermission = Permission::where("admin_id", $loggedInUser->id)->first();
            if($checkPermission->$module != "on"){
                return false;
            }else{
                return true;
            }
        }
    }

    public function savePermissions(Request $request){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        //$this->checkPermission($loggedInUser, "admin3");
        $permission = Permission::where("admin_id", $request->input("id"))->first();
        if($permission == null){
            $permission = new Permission;
            $permission->admin_id = $request->input("id");
        }
        $permission->session_1 = $request->input("session_1");
        $permission->session_2 = $request->input("session_2");
        $permission->session_3 = $request->input("session_3");
        $permission->student_1 = $request->input("student_1");
        $permission->student_2 = $request->input("student_2");
        $permission->student_3 = $request->input("student_3");
        $permission->bill_1 = $request->input("bill_1");
        $permission->bill_2 = $request->input("bill_2");
        $permission->bill_3 = $request->input("bill_3");
        $permission->transaction_1 = $request->input("transaction_1");
        $permission->transaction_2 = $request->input("transaction_2");

        $permission->admin_1 = $request->input("admin_1");
        $permission->admin_2 = $request->input("admin_2");
        $permission->admin_3 = $request->input("admin_3");
        $permission->updated_by = $loggedInUser->id;

        if($permission->save()){
            Session::flash('success', 'Congrats! Permissions has been set successfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create account');
            return back();
        }    
    }

    public function newAdmin(){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "admin_2") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        // if($this->checkPermission($loggedInUser, "admin_2") == false){
        //     Session::flash('error', 'Sorry! you do not have permission to access this feature');
        //     return back();
        // }
        return view('admin/new_admin')->with(["loggedInUser"=>$loggedInUser]);
    }
    public function editAdmin($id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        if($this->checkPermission($loggedInUser, "admin_3") == false){
            Session::flash('error', 'Sorry! you do not have permission to access this feature');
            return back();
        }
        // if($this->checkPermission($loggedInUser, "admin_3") == false){
        //                     Session::flash('error', 'Sorry! you do not have permission to access this feature');
        //                     return back();
        //                 }
        $permissions = Permission::where("admin_id", $id)->first();
        $admin = Admin::where("id", $id)->first();
        return view('admin/edit_admin')->with(["admin"=>$admin, "loggedInUser"=>$loggedInUser, "permissions"=>$permissions]);
    }

    public function deactivateAdmin($id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        // if($this->checkPermission($loggedInUser, "admin_3") == false){
        //     Session::flash('error', 'Sorry! you do not have permission to access this feature');
        //     return back();
        // }

        $user = Admin::where("id", $id)->first();

        $user->status = 2;

        $user->save();

        Session::flash('success', 'Congrats, User has been deactivated successfully');
        return back();
    }  
    public function activateAdmin($id){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        // if($this->checkPermission($loggedInUser, "admin_3") == false){
        //         Session::flash('error', 'Sorry! you do not have permission to access this feature');
        //         return back();
        //     }
        $user = Admin::where("id", $id)->first();

        $user->status = 1;

        $user->save();

        Session::flash('success', 'Congrats, User has been activated successfully');
        return back();
    }  
    
    public function saveAdmin(Request $request){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $admin = new Admin;
        $admin->name = $request->input("name");
        $admin->phone = $request->input("phone");
        $admin->email = $request->input("email");
        $password = time();
        $admin->password = bcrypt($password);
        $admin->status = 1;
        if($admin->save()){            
            if($admin->save()){
                //$this->adminMail($request->input("email"), $request->input("name"), $password);
                Session::flash('success', 'Congrats, admin account has been created successfully');
                return redirect('/admin/admins');
            }else{
                Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
            }    
        }else{
            Session::flash('error', 'Sorry! An error occured while trying to create account');
                return back();
        }    
    }  

    public function updateAdmin(Request $request){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $admin = Admin::where("id", $request->input("id"))->first();
        $admin->name = $request->input("name");
        $admin->phone = $request->input("phone");
        $admin->email = $request->input("email");
        if($admin->save()){
            return response()->json(['success' => true, 'message' => "Profile updated succeessfully"], 200);
        }else{
            return response()->json(['error' => true, 'message' => "An error occured while trying to update profile."], 200);
        }    
    }  


    public function updateAdminPassword(Request $request){

        if($request->input("password") != $request->input("cpassword")){
            Session::flash('error', 'Sorry!, The two passwords provided must matchy');
            return back();
        }
        $user = Auth::user();
        
        $user = User::where("username", $user->username)->first();

        $user->password = bcrypt($request->input("password"));

        $user->save();

        Session::flash('success', 'Congrats, your password has been updated successfully');
        return back();
    }
    
    public function updateProfile(Request $request){
    
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        $admin = Admin::where("id", $loggedInUser->id)->first();
        $admin->name = $request->input("name");
        $admin->phone = $request->input("phone");
        $admin->email = $request->input("email");
        if($admin->save()){
            Session::flash('success', "Profile updated succeessfully");
            return back();
        }else{
            Session::flash('error', 'An error occured while trying to update profile.');
            return back();
        }    
    }  

    public function adminMail($email, $name, $password){
        $sender = 'info@cashluck.com.ng';
        $data = [
            'email'=> $email,
            'name'=> $name,
            'token'=> $password,
            'date'=>date('Y-m-d')
        ];
        Mail::send('admin-mail', $data, function($message) use($data){
            $message->from($sender, 'Neon');
            $message->SMTPDebug = 4; 
            $message->to($data['email']);
            $message->subject('Account Creation');
        });
    }
    
    public function profile(){
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        return view('admin/profile')->with(["loggedInUser"=>$loggedInUser]);
    } 
    public function updatePassword(Request $request){

        if($request->input("password") != $request->input("password1")){
            Session::flash('error', 'Sorry!, The two passwords provided must match');
            return back();
        }
        $loggedInUser = Auth::guard('admin')->user();
        if($loggedInUser == null){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return redirect('/login');
        }
        
        $admin = Admin::where("id", $loggedInUser->id)->first();

        $admin->password = bcrypt($request->input("password"));

        $admin->save();

        Session::flash('success', 'Thank you, your password has been updated successfully');
        return back();
    }

    public function resetMail(Request $request){

        
        $email = $request->input('email');

        $user = User::where('email', $email)->first();
        
        $user_id = $user->id;

        $token = time();

        $user = User::where('id', $user_id)->first();

        $user->token = $token;

        $user->save();
        
        $sender = 'yinka@theaffinityclub.com';
        
        
 
        $data = [
        'email'=> $email,
        'token'=> $token,
        'date'=>date('Y-m-d')
        
        
        ];
 
        Mail::send('reset-password', $data, function($message) use($data){
            
            $message->from('yinka@theaffinityclub.com', 'Labisys');
            $message->SMTPDebug = 4; 
            $message->to($data['email']);
            $message->subject('Password Recovery');
 
            Session::flash('success', 'An Email has been sent to your account. Pls check to proceed');
        
            return view('/');
        });
    }        
}
