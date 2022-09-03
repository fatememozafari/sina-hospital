@extends('admin.layout.masterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبت کاربر جدید
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ثبت کاربر جدید </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> اطلاعات <strong>پایه</strong> <small>متن توضیحات در اینجا ...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                        <li><a href="javascript:void(0);">ویرایش</a></li>
                                        <li><a href="javascript:void(0);">حذف</a></li>
                                        <li><a href="javascript:void(0);">گزارش</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/admin/users" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{old('name') ?? ''}}" class="form-control" placeholder="نام">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="family" value="{{old('family' ?? '')}}" class="form-control" placeholder="نام خانوادگی">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="melli_code" value="{{old('melli_code' ?? '')}}" class="form-control" placeholder="کد ملی">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="gender">
                                                <option value="">- جنسیت -</option>
                                                <option value="FEMALE">خانم</option>
                                                <option value="MALE">آقا</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="row clearfix">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="radio inlineblock m-l-20">--}}
{{--                                            <input type="radio" name="gender" id="male" class="with-gap" value="option1">--}}
{{--                                            <label for="MALE">آقا</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="radio inlineblock">--}}
{{--                                            <input type="radio" name="gender" id="Female" class="with-gap" value="option2" checked="">--}}
{{--                                            <label for="FEMAIL">خانم</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="mobile"  value="{{old('mobile' ?? '')}}" class="form-control" placeholder="موبایل">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="email" value="{{old('email' ?? '')}}" class="form-control" placeholder="ایمیل">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="password" name="password" value="{{old('password' ?? '')}}" class="form-control" placeholder="رمز ورود">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="password_verification" value="{{old('password_verification' ?? '')}}" class="form-control" placeholder="تایید رمز ورود">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="job" value="{{old('job' ?? '')}}" class="form-control" placeholder="شغل">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="date" name="birthday" value="{{old('birthday' ?? '')}}" class="form-control" placeholder="تاریخ تولد">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                            <h3> تصویر را در اینجا رها کنید یا برای بارگذاری کلیک کنید. </h3>
                                            <em> <strong></strong></em> </div>
                                        <div class="fallback">
                                            <input name="file" type="avatar_path" value="{{old('avatar_path' ?? '')}}" multiple />
                                        </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="address" value="" placeholder="آدرس">{{old('address' ?? '')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">لغو</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
