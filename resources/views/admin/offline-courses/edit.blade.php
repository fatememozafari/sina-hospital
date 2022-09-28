@extends('admin.layout.masterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ویرایش دوره غیرحضوری
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ویرایش دوره غیرحضوری</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> اطلاعات <strong>پایه</strong> <small>متن توضیحات در اینجا ...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                        <li><a href="javascript:void(0);">ویرایش</a></li>
                                        <li><a href="javascript:void(0);">حذف</a></li>
                                        <li><a href="javascript:void(0);">گزارش</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/admin/offline-courses/{{$inputs->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>شناسه دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="id_code" value="{{$inputs->id_code}}" class="form-control" placeholder="شناسه دوره">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">

                                <div class="col-sm-12"><b>عنوان دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{$inputs->title}}" class="form-control" placeholder="عنوان دوره">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>عنوان تخصصی دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="slug" value="{{$inputs->slug}}" class="form-control" placeholder="عنوان تخصصی دوره">
                                    </div>
                                </div>
                            </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>نام مدرس</b>
                                        <select class="form-control show-tick" name="teacher_id" >
                                            @foreach($teacher as $inputs)
                                                <option value="{{$inputs->id}}">{{$inputs->id}} {{$inputs->name}} {{$inputs->family}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>تاریخ برگزاری</b>
                                        <div class="form-group">
                                            <input type="date" name="start_at" value="{{$inputs->start_at}}" class="form-control" placeholder="تاریخ برگزاری">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-12"><b>نوع فایل</b>
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="type">
                                                <option value="">- نوع فایل -</option>
                                                <option> یک مورد را انتخاب کنید </option>
                                                <option value="pdf">pdf</option>
                                                <option value="video">video</option>
                                                <option value="voice">voice</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>فایل دوره</b>
                                        <div class="form-group">
                                            <input type="file" name="file" class="form-control" placeholder="فایل دوره" value="{{$inputs->file}}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="type">
                                            <option value="">- نوع دوره -</option>
                                            <option value="SPECIALISED">تخصصی</option>
                                            <option value="SEMI_SPECIALISED">نیمه تخصصی</option>
                                            <option value="GENERAL">عمومی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
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
