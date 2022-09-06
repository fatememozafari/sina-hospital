@extends('auth.layout.masterPage')
@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">
                        </div>
                        <h5>ورود</h5>
                    </div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                    <div class="content">
                        <div class="input-group input-lg">
                            <input type="text" name="username" class="form-control" placeholder="ایمیل ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        @error('username')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group input-lg">
                            <input type="password" name="password" placeholder="رمز عبور" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        @error('password')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ورود</button>
                    </div>
                </form>
                <div class="footer text-center">
                <h6 class="m-t-20"><a href="/forgot-password" class="link">رمز عبورتان را فراموش کرده اید ؟</a></h6>
                    </div>

            </div>
        </div>
    </div>
@endsection
