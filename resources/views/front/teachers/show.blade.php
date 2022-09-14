@extends('front.layout.masterPage')
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
                            <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i>خانه</a></li>
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
                                <a href="#" class="">
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
                                    <small class="text-muted">آدرس:</small>
                                    <p>{{$teacher->address}} </p>
                                    <hr>
                                    <small class="text-muted">آدرس ایمیل:</small>
                                    <p>{{$teacher->email}}</p>
                                    <hr>
                                    <small class="text-muted">تلفن :</small>
{{--                                    <p>{{$teacher->mobile}}</p>--}}
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
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">پست های من</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">جدول زمانی</a></li>
{{--                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">تنظیمات</a></li>--}}
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane blog-page active" id="mypost">
                                <div class="card single_post">
                                    <div class="body">
                                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">لورم ایپسوم متن ساختگی</a></h3>
                                        <ul class="meta">
                                            <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط : رضا قنبری</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-label col-red"></i>عکاسی</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <div class="img-post m-b-15">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="{{asset('assets/images/blog/blog-page-1.jpg')}}" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="{{asset('assets/images/blog/blog-page-2.jpg')}}" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="{{asset('assets/images/blog/blog-page-3.jpg')}}" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">قبلی</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">بعدی</span>
                                                </a>
                                            </div>
                                            <div class="social_share">
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                            </div>
                                        </div>
                                        <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                        <a href="blog-details.html" title="ادامه مطلب" class="btn btn-round btn-info"> ادامه مطلب </a>
                                    </div>
                                </div>

                                <ul class="pagination pagination-primary">
                                    <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <ul class="cbp_tmtimeline">
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-05T18:30"><span class="hidden">5/8/1398</span> <span class="large">اکنون</span></time>
                                        <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                                        <div class="cbp_tmlabel empty"> <span> فعالیتی وجود ندارد </span> </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-05T03:45"><span>{{$course->start_at}} </span> <span></span></time>
                                        <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);">{{$course->title}} </a> <span>یک استوس جدید ارسال کرد .</span></h2>
                                            <p>{{$course->description}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-04T13:22"><span>1:02  ب.ظ </span> <span>دیروز</span></time>
                                        <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);"> جلسه کاری </a></h2>
                                            <p>امروز در <strong> دفتر آزمایشگاه </strong> جلسه ای دارید .</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-07-20T12:13"><span>12:13  ب.ظ </span> <span>2 هفته قبل</span></time>
                                        <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);"> سیما مطهری </a> <span>در جلسه </span> <a href="javascript:void(0);">نیویورک</a> <span>حضور داشت . </span></h2>
                                            <blockquote>
                                                <p class="blockquote blockquote-primary text-justify">
                                                    "این یک واقعیت طولانی است که یک خواننده هنگام مشاهده طرح آن ، از مطالب خواندن یک صفحه پریشان می شود."
                                                    <br>
                                                    <small>
                                                        - سارا صفرزاده
                                                    </small>
                                                </p>
                                            </blockquote>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div class="map m-t-10">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477011208!2d-74.11976308802028!3d40.69740344230033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1508039335245" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-07-20T12:13"><span>12:13  ب.ظ </span> <span>2 هفته قبل</span></time>
                                        <div class="cbp_tmicon bg-orange"><i class="zmdi zmdi-camera"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);">بهزاد احمدی </a> 4 <span>عکس جدید را در آلبوم</span> <a href="javascript:void(0);">سفرهای تابستانی </a><span>بارگذاری کرد </span></h2>
                                            <blockquote class="text-justify">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</blockquote>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"><img src="{{asset('assets/images/image1.jpg')}}" alt="" class="img-fluid img-thumbnail m-t-30"></a> </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{asset('assets/images/image2.jpg')}}" alt="" class="img-fluid img-thumbnail m-t-30"></a> </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{asset('assets/images/image3.jpg')}}" alt="" class="img-fluid img-thumbnail m-t-30"> </a> </div>
                                                <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="{{asset('assets/images/image4.jpg')}}" alt="" class="img-fluid img-thumbnail m-t-30"> </a> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-08-04T13:22"><span>1:02  ب.ظ </span> <span>2 هفته قبل</span></time>
                                        <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);"> جلسه کاری </a></h2>
                                            <p>امروز در <strong> دفتر آزمایشگاه </strong> جلسه ای دارید .</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="1398-07-20T12:13"><span>12:13  ب.ظ </span> <span>ماه قبل</span></time>
                                        <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);"> سیما مطهری </a> <span>در جلسه </span> <a href="javascript:void(0);"> آزمایشگاه </a><span>حضور داشت . </span></h2>
                                            <blockquote>مکان عالی ، احساس خانه بودن.</blockquote>
                                        </div>
                                    </li>
                                </ul>
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
