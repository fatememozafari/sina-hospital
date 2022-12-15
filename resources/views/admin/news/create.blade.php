@extends('layouts.adminMasterPage')
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
                            <h2>  <strong></strong> <small></small> </h2>
                            <ul class="header-dropdown">
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
                                            <input type="text" name="title" value="{{old('title') ?? ''}}" class="form-control" placeholder="عنوان خبر"
                                                   @error('title')
                                                   style="border: 1px solid red"
                                                @enderror>
                                            @error('title')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
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
                                            <input type="file" name="images[]"  class="form-control" placeholder="آپلود تصویر" multiple>
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
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>محتوای خبر</b>
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" value="" placeholder="محتوای خبر"
                                                      @error('body')
                                                      style="border: 1px solid red"
                                                @enderror>{{old('body' ?? '')}}</textarea>
                                            @error('body')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
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
