@extends('authentication.verify_otp.creative.layout.main')

@section('content-auth-verify_otp-creative')

        <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-creative-wrapper">
        <div class="auth-creative-inner">
            <div class="creative-card-wrapper">
                <div class="card my-4 overflow-hidden" style="z-index: 1">
                    <div class="row flex-1 g-0">
                        <div class="col-lg-6 h-100 my-auto">
                            <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50">
                                <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                            </div>
                            <div class="creative-card-body card-body p-sm-5">
                                <h2 class="fs-20 fw-bolder mb-4">Verify <a href="javascript:void(0);" class="float-end fs-12 text-primary">Change Methord</a></h2>
                                <h4 class="fs-13 fw-bold mb-2">Please enter th e code generated one time password to verify your account.</h4>
                                <p class="fs-12 fw-medium text-muted"><span>A code has been sent to</span> <strong>*******9897</strong></p>
                                <form action="https://bestwpware.com/html/tf/duralux-demo/index.html" class="w-100 mt-4 pt-2">
                                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                        <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" required>
                                        <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" required>
                                        <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" required>
                                        <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" required>
                                        <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" required>
                                        <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" required>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-lg btn-primary w-100">Validate</button>
                                    </div>
                                    <div class="mt-5 text-muted">
                                        <span>Didn't get the code</span>
                                        <a href="javascript:void(0);">Resend(1/3)</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-primary">
                            <div class="h-100 d-flex align-items-center justify-content-center">
                                <img src="assets/images/auth/auth-user.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->

@endsection