<?php

namespace App\Http\Controllers\Admin\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 

class AuthController extends Controller
{
    public function login(){
        //tela de login (acesso ao sistema administrativo)
        return view('admin.auth.login.index');

    }

    public function create(){
        //tela de cadastro (criação de novo usuário(admin || user))
        return view('admin.auth.create.index');

    }

    public function reset(){
        //tela de reset de senha (esqueci minha senha) inserir email
        return view('admin.auth.reset.index');

    }

    public function resetpassword(){
        //tela de reset de senha (esqueci minha senha) inserir nova senha
        return view('admin.auth.resetpassword.index');
        
    }
}   
