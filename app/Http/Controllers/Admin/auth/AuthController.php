<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login.index');
    }

    public function create(){
        return view('admin.auth.create.index');
    }

    public function reset(){
        
        return view('admin.auth.reset.index');
    }

    public function resetpassword(){

        return view('admin.auth.resetpassword.index');
    }
}