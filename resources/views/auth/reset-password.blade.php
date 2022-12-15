@extends('layouts.authMasterPage')
@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>تغییر رمز ورود</h5>
                        <span> </span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="password" placeholder="رمز عبور" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="تکرار رمز عبور" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="index.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ثبت رمز جدید</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
