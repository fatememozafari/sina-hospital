@extends('layouts.adminMasterPage')
@section('content')
    <section class="content inbox">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> مشاهده پیام
                        <small class="text-muted"> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);"> صندوق ورودی </a></li>
                        <li class="breadcrumb-item active float-right">مشاهده پیام</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card action_bar">
                        <div class="body">
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="input-group search">
                                        <input type="text" class="form-control" placeholder="جستجو...">
                                        <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <div class="media">
                                        <div class="float-left">
                                        </div>
                                        <div class="media-body">
                                            <p class="m-b-0">
                                                <strong class="text-muted m-l-5"> فرستنده پیام: </strong>
                                                <a href="javascript:void(0);" class="text-default">{{$contact->name}}</a>
                                                <span class="text-muted text-sm float-left">
{{--                                                    {{$contact->created_at}}--}}
                                                    {{ Morilog\Jalali\Jalalian::forge($contact->created_at)->format('%d %B ، %Y -  H:i:s') }}

                                                </span>
                                            </p>

                                            <p class="m-b-0">
                                                <strong class="text-muted m-l-10">موضوع پیام:</strong><a href="javascript:void(0);"></a> <a href="javascript:void(0);">{{$contact->title}}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-12"> <strong>متن پیام:</strong>
                                    <p class="text-justify">{{$contact->message}}</p>
                                </div>

                            </div>

                            <hr>
                            <br>
                            <div class="col-md-12">
                                <a href="{{$contact->present()->file }}">       {!! $contact->present()->file !!}</a>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <strong> برای </strong> <a href="mail-compose.html">پاسخ</a> <strong> یا </strong> <a href="mail-compose.html">ارسال برای دیگران</a> <strong> اینجا را کلیک کنید . </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
