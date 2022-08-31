@extends('front.layout.masterPage')
@section('content')
<div class="theme-blush">
    <section class="content blog-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لیست وبلاگ
                        <small>به قطب نما خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                        <li class="breadcrumb-item float-right"><a href="blog-dashboard.html">وبلاگ</a></li>
                        <li class="breadcrumb-item active float-right">لیست وبلاگ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 left-box">
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
                                            <img class="d-block img-fluid" src="assets/images/blog/blog-page-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="assets/images/blog/blog-page-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="assets/images/blog/blog-page-3.jpg" alt="Third slide">
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
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="blog-details.html">تبلیغات جدید شرکت اپل</a></h3>
                            <ul class="meta">
                                <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط : رضا قنبری</a></li>
                                <li><a href="#"><i class="zmdi zmdi-label col-amber"></i>تکنولوژی</a></li>
                                <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="img-post m-b-15">
                                <img src="assets/images/blog/blog-page-2.jpg" alt="تصویر">
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
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="blog-details.html">WTCR از سال 2018: قوانین جدید ، اتومبیل های بیشتر ، مسابقات بیشتر </a></h3>
                            <ul class="meta">
                                <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط : رضا قنبری</a></li>
                                <li><a href="#"><i class="zmdi zmdi-label col-lime"></i>ورزشی</a></li>
                                <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="img-post m-b-15">
                                <img src="assets/images/blog/blog-page-3.jpg" alt="تصویر">
                                <div class="social_share">
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div>
                            <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                            <a href="blog-details.html" title="ادامه مطلب" class="btn btn-round btn-info"> ادامه مطلب </a>
                        </div>
                    </div>
                    <div class="card single_post">
                        <div class="body">
                            <h3 class="m-t-0 m-b-5"><a href="blog-details.html">نمونه های گاه شمار CSS از CodePen</a></h3>
                            <ul class="meta">
                                <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط : رضا قنبری</a></li>
                                <li><a href="#"><i class="zmdi zmdi-label col-green"></i>طراحی سایت</a></li>
                                <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="img-post m-b-15">
                                <img src="assets/images/blog/blog-page-2.jpg" alt="تصویر">
                                <div class="social_share">
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                                </div>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
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
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <input type="text" class="form-control" placeholder="جستجو...">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>محبوب ترین </strong>  پست ها</h2>
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="border single_post">
                                        <div class="img-post m-b-5">
                                            <img src="assets/images/blog/blog-page-2.jpg" alt="تصویر">
                                        </div>
                                        <p class="m-b-0"> تبلیغات جدید شرکت اپل </p>
                                        <small>16 مرداد ، 1395 </small>
                                    </div>
                                    <div class="border single_post m-t-20">
                                        <div class="img-post m-b-5">
                                            <img src="assets/images/blog/blog-page-3.jpg" alt="تصویر">
                                        </div>
                                        <p class="m-b-0"> قوانین جدید ، اتومبیل های بیشتر ، مسابقات بیشتر </p>
                                        <small>16 مرداد ، 1395 </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2> کلمات <strong>کلیدی </strong></h2>
                        </div>
                        <div class="body widget tag-clouds">
                            <ul class="list-unstyled m-b-0">
                                <li><a href="#" class="tag badge badge-default">طراحی</a></li>
                                <li><a href="#" class="tag badge badge-success">پروژه</a></li>
                                <li><a href="#" class="tag badge badge-info">UX</a></li>
                                <li><a href="#" class="tag badge badge-success">وردپرس</a></li>
                                <li><a href="#" class="tag badge badge-warning">HTML5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>پست های <strong>اینستاگرام</strong> </h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0">
                                <li><a href="#"><img src="assets/images/blog/05-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/06-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/07-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/08-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/09-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/10-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/11-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/12-img.jpg" alt="توضیحات تصویر"></a></li>
                                <li><a href="#"><img src="assets/images/blog/13-img.jpg" alt="توضیحات تصویر"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>خبرنامه <strong>ایمیل</strong> <small> محصولات / اخبار ما را زودتر از دیگران دریافت کنید ، بیایید در تماس باشیم. </small></h2>
                        </div>
                        <div class="body widget newsletter">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
