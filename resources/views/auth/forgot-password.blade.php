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
                            <h5>رمز عبور خود را فراموش کرده اید ؟</h5>
                            <span> آدرس ایمیل خود را در زیر وارد کنید تا گذرواژه خود را دوباره تنظیم کنید. </span>
                        </div>
                        <div class="content">
                            <div class="input-group input-lg">
                                <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="index.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ارسال</a>
                            <h6 class="m-t-20"><a href="#" class="link">آیا به کمک نیاز دارید ؟</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
