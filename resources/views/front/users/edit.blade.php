@extends('layouts.frontMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ویرایش کاربر{{$inputs->name}} {{$inputs->family}}
                        <small class="text-muted"></small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ویرایش کاربر </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>  <strong></strong> <small></small> </h2>
                            <ul class="header-dropdown">

                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/users/{{$inputs->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>نام</b>
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{$inputs->name}}" class="form-control" placeholder="نام"
                                                   @error('name')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-12"><b>نام خانوادگی</b>
                                        <div class="form-group">
                                            <input type="text" name="family" value="{{$inputs->family}}" class="form-control" placeholder="نام خانوادگی"
                                             @error('family')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>کدملی</b>
                                        <div class="form-group">
                                            <input type="text" name="melli_code" value="{{$inputs->melli_code}}" class="form-control" placeholder="کد ملی"
                                             @error('melli_code')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="gender"
                                             @error('gender')
                                                   style="border: 1px solid red"
                                                @enderror>
                                                <option value="">- جنسیت -</option>
                                                <option value="FEMALE">خانم</option>
                                                <option value="MALE">آقا</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>شماره موبایل</b>
                                        <div class="form-group">
                                            <input type="text" name="mobile"  value="{{$inputs->mobile}}" class="form-control" placeholder="موبایل"
                                             @error('mobile')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>ایمیل</b>
                                        <div class="form-group">
                                            <input type="text" name="email" value="{{$inputs->email}}" class="form-control" placeholder="ایمیل"
                                             @error('email')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b> رمز ورود</b>
                                        <div class="form-group">
                                            <input type="text" name="password" class="form-control" placeholder="رمز ورود"
                                             @error('password')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>تایید رمز ورود</b>
                                        <div class="form-group">
                                            <input type="text" name="password_confirmation" class="form-control" placeholder="تایید رمز ورود"
                                             @error('password_confirmation')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>شغل</b>
                                        <div class="form-group">
                                            <input type="text" name="job" value="{{$inputs->job}}" class="form-control" placeholder="شغل"
                                             @error('job')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>تاریخ تولد</b>
                                        <div class="form-group">
                                            <input type="date" name="birthday" value="{{$inputs->birthday}}" class="form-control" placeholder="تاریخ تولد"
                                             @error('birthday')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12"><b>آپلود تصویر</b>
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3> تصویر را در اینجا رها کنید یا برای بارگذاری کلیک کنید. </h3>
                                        <em> <strong></strong></em> </div>
                                    <div class="fallback">
                                        <input name="avatar_path" type="file" value="{{$inputs->avatar_path}}" multiple
                                         @error('avatar_path')
                                                   style="border: 1px solid red"
                                                @enderror>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>آدرس</b>
                                        <div class="form-group">
                                            <textarea class="form-control" name="address" value="" placeholder="آدرس"
                                             @error('address')
                                                   style="border: 1px solid red"
                                                @enderror>{{$inputs->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p>images:</p>
                    <form action="/deletephoto/{{$inputs->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn text-danger text-center" type="submit">X</button>
                    </form>
                    <img src="{{$inputs->avatar_path}}" class="img-responsive"
                         style="max-width: 200px; max-height: 200px" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
