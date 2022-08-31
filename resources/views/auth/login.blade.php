@extends('auth.layout.masterPage')
@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>ورود</h5>
                    </div>
                    <div class="content">
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="نام کاربری ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="رمز عبور" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="index.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ورود</a>
                        <h6 class="m-t-20"><a href="{{route('forgetpassword')}}" class="link">رمز عبورتان را فراموش کرده اید ؟</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
