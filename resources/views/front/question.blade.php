@extends('layouts.frontMasterPage')
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
{{--                        <small class="text-muted"> خوش آمدید</small>--}}
                        سوالات متداول
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i>داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">صفحات</a></li>
                        <li class="breadcrumb-item active float-right">سوالات متداول</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>جستجو</strong></h2>
                        </div>
                        <div class="body">
                            <form method="get" action="" class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="جستجو...">
                                <button class="input-group-addon" type="submit"><i class="zmdi zmdi-search"></i></button>
                            </form>
                            <div class="">
                                <p>جستجو های محبوب :</p>
                                <span class="badge badge-default">جدیدترین سوالات</span>
                                <span class="badge badge-primary">جلسه</span>
                                <span class="badge badge-success">فعالیت های جدول زمانی</span>
                                <span class="badge badge-info">اطلاعات</span>
                                <span class="badge badge-warning">پروژه جدید</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @foreach($question as $item)
                    <div class="card">
                        <div class="body">
                            <h6 class="m-t-0"><a href="javascript:void(0);"> {{$item->question}} </a></h6>
                            <p class="text-justify">{{$item->answer}}</p>
                            <br>
                            @if(isset($item->file))
                                <a href="{{$item->file }}"> <img src="{{asset('uploads/question/'.$item->file) }}" alt="{{$item->title}}" class="img-fluid"></a>
                            @endif
                        </div>
                    </div>
                    @endforeach
{{--                    <ul class="pagination pagination-primary m-t-20">--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void(0);">قبلی</a></li>--}}
{{--                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="javascript:void(0);">بعدی</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
