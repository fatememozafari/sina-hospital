@extends('layouts.adminMasterPage')
@section('content')
    <section class="content container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لیست سوالات
{{--                        <small class="text-muted"> خوش آمدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">صفحات</a></li>
                        <li class="breadcrumb-item active float-right">لیست سوالات</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('alert')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="input-group">
                                <form method="get" action="" class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="جستجو...">
                                <button class="input-group-addon" type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </div>
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
                <div class="col-12" style="text-align: left">
                    <a class="btn btn-info" href="{{route('admin.questions.create')}}">
                        <i class="fa fa-plus mx-2"></i>
                        ایجاد سوال جدید

                    </a>
                </div>
            </div>
                <br>
{{--                <div class="col-md-12">--}}
                    @foreach($question as $item)
                        <div class="card px-5">
                            <div class="body">
                                <div class="row">
                                <div class="col-6 mt-5">
                                <h6 class="m-t-0"><a href="javascript:void(0);"> {{$item->question}} </a></h6>
                                <p class="text-justify">{{$item->answer}}</p>
                                </div>
                                <br>
                                <div class="col-6">
                                @if(isset($item->file))
                                <a href="{{$item->file }}"> <img class="img-fluid" src="{{asset('uploads/question/'.$item->file) }}" alt="{{$item->title}}" ></a>
                                @endif
                                </div>
                                </div>
                            </div>
                            <div style="display: flex" class="mb-5 float-left">
                                <div>
                                    <a href="{{route('admin.questions.edit',$item->id)}}" title="ویرایش مطلب" class="btn btn-round btn-info"> ویرایش مطلب </a>
                                </div>
                                <div>
                                    <form action="{{route('admin.questions.delete',$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-default btn-round btn-simple">
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
{{--                </div>--}}
                </div>
{{--                <span class="clearfix" style="padding: 0 20%;">--}}
{{--								 {{$question->links()}}--}}
{{--								</span>--}}
            </div>

    </section>

@endsection
