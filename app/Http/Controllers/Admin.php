<?php

namespace App\Http\Controllers;
use App\Admins;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class Admin extends Controller
{

    
    function login(){
        
        return view("admin/login");
    }
    
    function postLogin(Request $request){        
        $this->validate($request,[
            'email' => 'required|email',
            'pass'=>'required'
        ]);
        $get  = DB::table('admins')->where(['email'=>$request->email,'password'=>$request->pass]);
        if($get){
            return redirect('/admin/dashboard');
        }else{
            echo 'error';
        }
        

    }
    
     function dashboard(){
         $data = DB::table('admins')->get();
        //return view("admin/dashboard")->with('admins',$data);
        return view("admin/dashboard")->with('admin',$data);
    }
    
    
    
    
    
    function logOut(){
        Session::flush('email');
        return redirect('/admin');

    }
    

   
    
    
    
    
}
