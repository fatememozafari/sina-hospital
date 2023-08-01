@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبت دسته بندی جدید
{{--                        <small class="text-muted">خوش امدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                    class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ثبت دسته بندی جدید</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong></strong> <small></small></h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.tickets.categories.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>عنوان دسته بندی*</b>
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{old('name') ?? ''}}"
                                                   class="form-control" placeholder="عنوان دسته بندی"
                                                   @error('name')
                                                   style="border: 1px solid red"
                                                @enderror>
                                            @error('name')
                                            <span
                                                style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right" style="margin-right: 10px;"><b>وضعیت: </b>
                                        <div class="flex-row" style="margin-bottom:20px;margin-right:20px">
                                            <span class="">
                                                <label class="cont1" style="display: inline-block">
                                                    <input type="radio" checked="checked" value="1" name="status">
                                                </label>
                                                <span><b style="" class="whitebold">فعال</b></span>
                                            </span>
                                                                    <span class=" distance" style="text-align: left;margin-right: 30px">
                                                <label class="cont1" style="display: inline-block">
                                                    <input type="radio" value="0" name="status">
                                                </label>
                                                <span><b style="" class="whitebold">غیرفعال</b></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-default btn-round btn-simple float-left">لغو</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
