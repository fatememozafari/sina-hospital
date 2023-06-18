@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ویرایش دوره
{{--                        <small class="text-muted">خوش امدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ویرایش دوره </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>  <strong></strong> <small></small> </h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.courses.update',$inputs->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                            <div class="row clearfix">
                                <div class="col-sm-6"><b>شناسه دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="id_code" value="{{$inputs->id_code}}" class="form-control" placeholder="شناسه دوره">
                                    </div>
                                </div>
                                <div class="col-sm-6"><b>عنوان دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{$inputs->title}}" class="form-control" placeholder="عنوان دوره">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6"><b>عنوان تخصصی دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="slug" value="{{$inputs->slug}}" class="form-control" placeholder="عنوان تخصصی دوره">
                                    </div>
                                </div>
                                <div class="col-sm-6"><b>تاریخ برگزاری</b>
                                    <div class="form-group">
                                        <input type="date" name="start_at" value="{{$inputs->start_at}}" class="form-control" placeholder="تاریخ شروع ">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6"><b>نام مدرس</b>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="teacher_id"
                                                @error('teacher_id')
                                                style="border: 1px solid red"
                                            @enderror>
                                            <option> یک مورد را انتخاب کنید</option>
                                            @foreach(\App\Models\Teacher::all() as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->id}}
                                                    -{{$teacher->name}} {{$teacher->family}}</option>
                                            @endforeach
                                        </select>
                                        @error('teacher_id')
                                        <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                        @enderror                                    </div>
                                </div>
                                <div class="col-sm-6"><b>نوع دوره</b>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="type">
                                            <option value="SPECIALISED">تخصصی</option>
                                            <option value="SEMI_SPECIALISED">نیمه تخصصی</option>
                                            <option value="GENERAL">عمومی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                                <form action="http://www.wrraptheme.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">--}}
{{--                                    <div class="dz-message">--}}
{{--                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>--}}
{{--                                        <h3> پرونده ها را در اینجا رها کنید یا برای بارگذاری کلیک کنید. </h3>--}}
{{--                                        <em> <strong></strong></em> </div>--}}
{{--                                    <div class="fallback">--}}
{{--                                        <input name="file" type="file" multiple />--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
                            <div class="col-sm-12"><b>توضیحات</b>
                                <div class="form-group">
                                    <textarea rows="4" name="description" value="{{$inputs->description}}" class="form-control no-resize" placeholder="لطفاً آنچه را می خواهید تایپ کنید ...">{{$inputs->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
