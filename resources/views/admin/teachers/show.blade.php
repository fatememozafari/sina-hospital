@extends('layouts.adminMasterPage')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">

    <div class="theme-cyan">
        <section class="content profile-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>پروفایل مدرس
                            <small class="text-muted"> خوش آمدید</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>خانه</a></li>
                            <li class="breadcrumb-item float-right"><a href="javascript:void(0);">مدرسان</a></li>
                            <li class="breadcrumb-item active float-right">پروفایل مدرس</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card member-card">
                            <div class="header l-cyan">
                                <h4 class="m-t-10">{{$teacher->name}} {{$teacher->family}}</h4>
                            </div>
                            <div class="member-img">
                                <a href="profile.html" class="">
                                    <img src="{{$teacher->avatar_path ?? asset('assets/images/profile_av.jpg')}}" class="rounded-circle" alt="عکس پروفایل">
                                </a>
                            </div>
                            <div class="body">
                                <div class="col-12">
                                    <ul class="social-links list-unstyled">
                                        <li><a title="فیس بوک" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a title="توییتر" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a title="اینستاگرام" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    <p class="text-muted">{{$teacher->address}}</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>852</h5>
                                        <small>دنبال میکند</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>13k</h5>
                                        <small>دنبال کنندگان</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>234</h5>
                                        <small>پست</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">درباره</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">دوستان</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane body active" id="about">
                                    <small class="text-muted">شغل :</small>
                                    <p>{{$teacher->job}}</p>
                                    <hr>
                                    <small class="text-muted">آدرس :</small>
                                    <p>{{$teacher->address}} </p>
                                    <hr>
                                    <small class="text-muted">آدرس ایمیل</small>
                                    <p>{{$teacher->email}}</p>
                                    <hr>
                                    <small class="text-muted">تلفن :</small>
                                    <p>{{$teacher->mobile}}</p>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div></div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% کامل است</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div></div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% کامل است</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div> </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% کامل است</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div></div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% کامل است</span> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane body" id="friends">
                                    <ul class="new_friend_list list-unstyled row">
                                        <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                            <a href="#">
                                                <img src="{{asset('assets/images/sm/avatar1.jpg')}}" class="img-thumbnail" alt="تصویر کاربر">
                                                <h6 class="users_name">ع امیری</h6>
                                                <small class="join_date">امروز</small>
                                            </a>
                                        </li>
                                        <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                            <a href="#">
                                                <img src="{{asset('assets/images/sm/avatar2.jpg')}}" class="img-thumbnail" alt="تصویر کاربر">
                                                <h6 class="users_name">م قاسمی</h6>
                                                <small class="join_date">دیروز</small>
                                            </a>
                                        </li>
                                        <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                            <a href="#">
                                                <img src="{{asset('assets/images/sm/avatar3.jpg')}}" class="img-thumbnail" alt="تصویر کاربر">
                                                <h6 class="users_name">س رحیمی</h6>
                                                <small class="join_date">8 مهر</small>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline">جدول زمانی</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mypost">بیوگرافی</a></li>
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">تنظیمات</a></li>--}}
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane blog-page " id="mypost">
                                <div class="card single_post">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong> بیوگرافی </strong></h2>
                                        </div>
                                        <div class="body">
                                            <p class="text-justify">{{$teacher->description}}</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div role="tabpanel" class="tab-pane active" id="timeline">
                                <ul class="cbp_tmtimeline">
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-05T18:30"><span class="hidden">{{ date("Y/m/d")}}</span> <span class="large">اکنون</span></time>
                                        <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                                        <div class="cbp_tmlabel empty"> <span> تاریخ امروز </span> </div>
                                    </li>
                                    @foreach($course as $item)
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-05T03:45"><span>{{$item->start_at}} </span> <span></span></time>
                                        <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);">جسله کاری </a> <span>{{$item->title}}</span></h2>
                                            <p>{{$item->description}}</p>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <hr>
                            <div class="hidden-print col-md-12 text-left">
                                <a href="javascript:void(0);" class="btn btn-info btn-round"><i
                                        class="zmdi zmdi-print"></i></a>
                                <a href="/admin/teachers/{{$teacher->id}}/edit" class="btn btn-primary btn-round">ویرایش</a>
                            </div>
{{--                            <div role="tabpanel" class="tab-pane" id="usersettings">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="header">--}}
{{--                                        <h2>تنظیمات<strong> امنیتی </strong></h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="body">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control" placeholder="نام کاربری">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="password" class="form-control" placeholder="رمز عبور فعلی">--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="password" class="form-control"placeholder="رمز عبور جدید">--}}
{{--                                        </div>--}}
{{--                                        <button class="btn btn-info btn-round">ذخیره تغییرات</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="header">--}}
{{--                                        <h2>تنظیمات <strong> حساب کاربری </strong> </h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="body">--}}
{{--                                        <div class="row clearfix">--}}
{{--                                            <div class="col-lg-6 col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control" placeholder="نام">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-6 col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control" placeholder="نام خانوادگی">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4 col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control" placeholder="شهر">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4 col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control" placeholder="ایمیل">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-4 col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control" placeholder="کشور">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <textarea rows="4" class="form-control no-resize" placeholder="آدرس"></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="checkbox">--}}
{{--                                                    <input id="procheck1" type="checkbox">--}}
{{--                                                    <label for="procheck1"> قابلیت مشاهده پروفایل برای همه </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="checkbox">--}}
{{--                                                    <input id="procheck2" type="checkbox">--}}
{{--                                                    <label for="procheck2"> اعلان های کار جدید </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="checkbox">--}}
{{--                                                    <input id="procheck3" type="checkbox">--}}
{{--                                                    <label for="procheck3">اعلان های درخواست دوست جدید</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <button class="btn btn-primary btn-round">ذخیره تغییرات</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
{{--    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->--}}
{{--    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->--}}
{{--    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->--}}

{{--    <script src="{{asset('assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->--}}
{{--    <script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>--}}
@endsection
