@extends('layouts.frontMasterPage')
@section('content')
    <div class="theme-blush">
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>
                             اخبار سایت
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i> داشبورد</a></li>
                            <li class="breadcrumb-item float-right"><a href="{{route('front.news.index')}}">اخبار</a>
                            </li>
                            <li class="breadcrumb-item active float-right">لیست اخبار</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-box">
                        @foreach($news as $item)
                            <div class="card single_post">
                                <div class="body">
                                    <h3 class="m-t-0 m-b-5"><a href="#">{{$item->title}}</a></h3>
                                    <ul class="meta">
                                        <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط
                                                : {{$item->writer}}</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-label col-red"></i>{{$item->photographer}}
                                            </a></li>
                                        <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="img-post m-b-15">
                                        <div id="carouselExampleControls{{$item->id}}" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($item->images as $img)
                                                    @if($loop->first)
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid" src="/uploads/news/{{$img->image}}"
                                                                 alt="slide">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item ">
                                                            <img class="d-block img-fluid" src="/uploads/news/{{$img->image}}"
                                                                 alt="slide">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls{{$item->id}}"
                                               role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">قبلی</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls{{$item->id}}"
                                               role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">بعدی</span>
                                            </a>
                                        </div>
                                        <div class="social_share">
                                            <a href="{{$item->facebook}}">
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                                        class="zmdi zmdi-facebook"></i></button>
                                            </a>
                                            <a href="{{$item->twitter}}">
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                                        class="zmdi zmdi-twitter"></i></button>
                                            </a>
                                            <a href="{{$item->instagram}}">
                                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i
                                                        class="zmdi zmdi-instagram"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <br>
{{--                                    <div class="" style="overflow:visible; max-width: 100%; min-height: 50px">{{substr($item->body,0,30)}}</div>--}}
{{--                                    <a href="#" title="ادامه مطلب" class="btn btn-round btn-info"> ادامه مطلب </a>--}}
                                    <div class="" style="overflow:visible; max-width: 100%; min-height: 50px">{{$item->body}}</div>
                                </div>
                            </div>
                        @endforeach
{{--                        <ul class="pagination pagination-primary">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>--}}
{{--                        </ul>--}}
                    </div>
                    <div class="col-lg-4 col-md-12 right-box">
                        <div class="card">
                            <div class="body search">
                                <form class="input-group m-b-0" action="" method="get">
                                    <input type="text" class="form-control" name="search" placeholder="جستجو...">
                                    <button class="input-group-addon"><i class="zmdi zmdi-search"></i></button>
                                </form>

                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>محبوب ترین </strong> پست ها</h2>
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
                                <h2>خبرنامه <strong>ایمیل</strong> <small> محصولات / اخبار ما را زودتر از دیگران دریافت
                                        کنید ، بیایید در تماس باشیم. </small></h2>
                            </div>
                            <div class="body widget newsletter">
                                <form class="input-group" method="post" action="{{route('front.newsletters.store')}}">
                                    @csrf
                                    <input type="text" name="email" class="form-control" placeholder="ایمیل را وارد کنید">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <span class="input-group-addon" type="submit">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
