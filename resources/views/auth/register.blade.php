@extends('auth.layout.masterPage')
@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <div class="header">
                    <div class="logo-container">
                        <img src="assets/images/logo.svg" alt="">
                    </div>
                    <h5>ثبت نام</h5>
                    <span>ثبت نام عضو جدید </span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="content">
                        <div class="input-group">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                   placeholder="نام ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        @error('name')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group">
                            <input type="text" name="family" value="{{old('family')}}" class="form-control"
                                   placeholder="نام خانوادگی ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>

                        </div>
                        @error('family')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group">
                            <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control"
                                   placeholder="شماره موبایل ">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>

                        </div>
                        @error('mobile')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group">
                            <input type="text" name="email" value="{{old('email')}}" class="form-control"
                                   placeholder="ایمیل را وارد کنید">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>

                        </div>
                        @error('email')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group">
                            <input type="password" name="password" value="{{old('password')}}" placeholder="رمز عبور"
                                   class="form-control"/>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>

                        </div>
                        @error('password')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                   placeholder="تکرار رمز عبور" class="form-control"/>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>

                        </div>
                        @error('password_confirmation')
                        <span class=" alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror

                    </div>
                    {{--                        <div class="checkbox">--}}
                    {{--                            <input id="terms" type="checkbox">--}}
                    {{--                            <label for="terms">--}}
                    {{--                                من <a href="javascript:void(0);">شرایط استفاده</a> را خوانده ام و موافقم .--}}
                    {{--                            </label>--}}
                    {{--                        </div>--}}
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ثبت
                            نام
                        </button>
                    </div>
                </form>
                <div class="footer text-center">
                    <h6 class="m-t-20"><a class="link" href="{{route('login')}}">قبلا عضو سایت شده اید ؟</a></h6>
                </div>

            </div>
        </div>
    </div>
@endsection
