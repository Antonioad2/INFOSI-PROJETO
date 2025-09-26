@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Criar Conta')
@section('content')

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <!-- Header -->
        <header class="log-header">
            <a href="index.html"><img class="img-fluid logo-dark" src="{{ url('assets/user/img/logo.svg')}}" alt="Logo"></a>
        </header>
        <!-- /Header -->

        <div class="login-wrapper">
            <div class="loginbox">                        
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <div class="sign-group">
                            <a href="{{route('home')}}" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Voltar para a Página Inicial</a>
                        </div>
                        <h1>Criar Conta</h1>
                        <!-- <p class="account-subtitle">Enviaremos um código de confirmação para o seu e-mail.</p>    -->                             
                        <form action="#">
                            <div class="input-block">
                                <label class="form-label">Nome de Usuário <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="input-block">
                                <label class="form-label">E-mail <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="input-block">
                                <label class="form-label">Senha <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="">
                                    <span class="fas fa-eye-slash toggle-password"></span>
                                </div>
                            </div>    
                            <a href="login.html" class="btn btn-outline-light w-100 btn-size mt-1">Criar Conta</a>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">Ou, crie uma conta com seu e-mail</span>
                            </div>
                            <!-- Social Login -->
                            <div class="social-login">
                                <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{ url('assets/user/img/icons/google.svg')}}" class="img-fluid" alt="Google"></span>Entrar com Google</a>
                            </div>
                            <div class="social-login">
                                <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="{{ url('assets/user/img/icons/facebook.svg')}}" class="img-fluid" alt="Facebook"></span>Entrar com Facebook</a>
                            </div>
                            <!-- /Social Login -->
                            <div class="text-center dont-have">Já possui uma conta? <a href="{{route('site.client-login')}}">Entrar</a></div>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection