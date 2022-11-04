@extends('admin.layout.masterPage')
@section('content')
    <div class="theme-blush">
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>لیست اخبار
                            <small> خوش آمدید</small>
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i> داشبورد</a></li>
                            <li class="breadcrumb-item float-right"><a href="{{route('front.news.list')}}">اخبار</a>
                            </li>
                            <li class="breadcrumb-item active float-right">لیست اخبار</li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="">
                <li class="">
                    <a class="btn btn-info" href="/admin/news/create">ایجاد خبر جدید</a>
                </li>
            </ul>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 left-box">
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
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($item->images as $img)
                                                    @if($loop->first)
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid" src="/images/{{$img->image}}"
                                                                 alt="slide">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item ">
                                                            <img class="d-block img-fluid" src="/images/{{$img->image}}"
                                                                 alt="slide">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>

                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                               role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">قبلی</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
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
                                    <div class="" style="overflow:visible; max-width: 100%; min-height: 50px">{{$item->body}}</div>
                                    <a href="/admin/news/{{$item->id}}/edit" title="ادامه مطلب"
                                       class="btn btn-round btn-info"> ویرایش مطلب </a>
                                    <form action="/admin/news/{{$item->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-default btn-round btn-simple">
                                            حذف
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
                        <ul class="pagination pagination-primary">
                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">

@endsection
