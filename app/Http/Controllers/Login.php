<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Category;
use App\Product;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class Login extends Controller
{
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'pass' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            dd('successfully Login');
            
        }else{
            dd('your username and password are wrong.');
        }
    }
}
