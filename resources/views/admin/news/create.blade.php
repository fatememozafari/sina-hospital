@extends('admin.layout.masterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبت خبر جدید
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ثبت خبر جدید </li>
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
                            <form action="/admin/news" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>عنوان خبر</b>
                                        <div class="form-group">
                                            <input type="text" name="title" value="{{old('title') ?? ''}}" class="form-control" placeholder="عنوان خبر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-12"><b>نویسنده خبر</b>
                                        <div class="form-group">
                                            <input type="text" name="writer" value="{{old('writer' ?? '')}}" class="form-control" placeholder="نویسنده خبر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>عکاس</b>
                                        <div class="form-group">
                                            <input type="text" name="photographer" value="{{old('photographer' ?? '')}}" class="form-control" placeholder="عکاس">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>آپلود تصویر</b>
                                        <div class="form-group">
                                            <input type="file" name="avatar_path1" value="{{old('avatar_path1' ?? '')}}" class="form-control" placeholder="آپلود تصویر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>آپلود تصویر</b>
                                        <div class="form-group">
                                            <input type="file" name="avatar_path2" value="{{old('avatar_path2' ?? '')}}" class="form-control" placeholder="آپلود تصویر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>آپلود تصویر</b>
                                        <div class="form-group">
                                            <input type="file" name="avatar_path3" value="{{old('avatar_path3' ?? '')}}" class="form-control" placeholder="آپلود تصویر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>فیسبوک</b>
                                        <div class="form-group">
                                            <input type="text" name="facebook" value="{{old('facebook' ?? '')}}" class="form-control" placeholder="فیسبوک">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>توییتر</b>
                                        <div class="form-group">
                                            <input type="text" name="twitter" value="{{old('twitter' ?? '')}}" class="form-control" placeholder="توییتر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>اینستاگرام</b>
                                        <div class="form-group">
                                            <input type="text" name="instagram" value="{{old('instagram' ?? '')}}" class="form-control" placeholder="اینستاگرام">
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="col-lg-12 col-md-12 col-sm-12"><b>آپلود تصویر</b>--}}
{{--                                    <div class="dz-message">--}}
{{--                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>--}}
{{--                                        <h3> تصویر را در اینجا رها کنید یا برای بارگذاری کلیک کنید. </h3>--}}
{{--                                        <em> <strong></strong></em> </div>--}}
{{--                                    <div class="fallback">--}}
{{--                                        <input name="avatar_path" type="file" value="{{old('avatar_path' ?? '')}}" multiple />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>محتوای خبر</b>
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" value="" placeholder="آدرس">{{old('محتوای خبر' ?? '')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">لغو</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
