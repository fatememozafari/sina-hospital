@extends('layouts.adminMasterPage')
@section('content')
    <div class="theme-blush">
        <section class="content blog-page">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>لیست اخبار
{{--                            <small> خوش آمدید</small>--}}
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i> داشبورد</a></li>
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.news.index')}}">اخبار</a>
                            </li>
                            <li class="breadcrumb-item active float-right">لیست اخبار</li>
                        </ul>
                    </div>
                    <div class="col-12" style="text-align: left">
                        <a class="btn btn-info" href="{{route('admin.news.create')}}">
                            <i class="fa fa-plus mx-2"></i>
                            ایجاد خبر جدید

                        </a>
                    </div>
                </div>
            </div>

            <br>
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
                                        <div id="carouselExampleControls{{$item->id}}" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($item->images as $img)
                                                    @if($loop->first)
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid" src="/uploads/news/{{$img->image}}"
                                                                 width="800px" height="700px" alt="slide">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item ">
                                                            <img class="d-block img-fluid" src="/uploads/news/{{$img->image}}"
                                                                 width="800px" height="700px" alt="slide">
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
                                    <div class="" style="overflow:visible; max-width: 100%; min-height: 50px">{{$item->body}}</div>
                                    <a href="{{route('admin.news.edit',$item->id)}}"
                                       class="btn btn-round btn-info"> ویرایش مطلب </a>
                                    <form action="{{route('admin.news.delete',$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-default btn-round btn-simple">
                                            حذف
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
{{--                        <ul class="pagination pagination-primary">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>--}}
{{--                        </ul>--}}
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
