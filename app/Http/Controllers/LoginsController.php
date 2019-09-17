<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Admin;
use App\Ward;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class LoginsController extends Controller
{

    /**
	 * Handles authentication attempt
	 *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function authenticate(Request $request){
    	$email = $request->input('email');
        $password = $request->input('password');
    	if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){
            $admin_id = Auth::guard('admin')->id();
            $admin = Admin::where("id", $admin_id)->first();
            if($admin->status == 2){
                Session::flash('error', 'Sorry! Your account has been deactivated');
                return back();
            }   
            return redirect('admin/index');
            
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }

    }

    public function mobileLogin(Request $request){
        $guardian = Ward::where("phone", $request->input("phone"))->first();
        if($guardian == null){
            return response()->json(['error' => "The provided phone number does not exist on this platform"]);
        }else{
            return response()->json(['success' => $guardian]);
        }
    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }
}
