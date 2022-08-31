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
                            <h5>ثبت نام</h5>
                            <span>ثبت نام عضو جدید </span>
                        </div>
                        <div class="content">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="نام کاربری ">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="شماره موبایل ">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                            </div>
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
                        <div class="checkbox">
                            <input id="terms" type="checkbox">
                            <label for="terms">
                                من <a href="javascript:void(0);">شرایط استفاده</a> را خوانده ام و موافقم .
                            </label>
                        </div>
                        <div class="footer text-center">
                            <a href="index.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ثبت نام</a>
                            <h6 class="m-t-20"><a class="link" href="{{route('login')}}">قبلا عضو سایت شده اید ؟</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
