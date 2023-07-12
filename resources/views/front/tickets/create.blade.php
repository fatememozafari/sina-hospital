@extends('layouts.frontMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبت تیکت جدید
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
                        <li class="breadcrumb-item active float-right"> ثبت تیکت  جدید</li>
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
                            <form action="{{route('front.tickets.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>عنوان تیکت *</b>
                                        <div class="form-group">
                                            <input type="text" name="subject" value="{{old('subject') ?? ''}}"
                                                   class="form-control" placeholder="عنوان تیکت "
                                                   @error('subject')
                                                   style="border: 1px solid red"
                                                @enderror>
                                            @error('subject')
                                            <span
                                                style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>دسته بندی تیکت *</b>
                                        <div class="form-group">
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">یک مورد را انتخاب کنید</option>
                                                @foreach($ticketCategories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                            </select>
                                            @error('category_id')
                                            <span
                                                style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-sm-6"><b>اولویت تیکت *</b>
                                        <div class="form-group">
                                            <select name="priority_id" id=""  class="form-control">
                                                <option value="">یک مورد را انتخاب کنید</option>
                                                @foreach($ticketPriorities as $priority)
                                                    <option value="{{$priority->id}}">{{$priority->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('priority_id')
                                            <span
                                                style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-12"><b>توضیحات تیکت *</b>
                                                <div class="form-group">
                                                    <textarea name="description" id="" class="form-control">{{old('description')}}</textarea>
                                                           @error('description')
                                                           style="border: 1px solid red"
                                                        @enderror
                                                    @error('description')
                                                    <span
                                                        style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-12"><b>عنوان تیکت *</b>
                                                <div class="form-group">
                                                    <input type="file" name="file" class="form-control">

                                                    @error('subject')
                                                    <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                <hr>
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
