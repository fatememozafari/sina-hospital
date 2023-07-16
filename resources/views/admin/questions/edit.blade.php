@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>  ویرایش سوال{{$inputs->id}}
{{--                        <small class="text-muted">خوش امدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ویرایش سوال {{$inputs->id}} </li>
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
                            <form action="{{route('admin.questions.update',$inputs->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>سوال*</b>
                                        <div class="form-group">
                                            <input type="text" name="question" value="{{$inputs->question}}" class="form-control" placeholder="سوال"
                                                   @error('question')
                                                   style="border: 1px solid red"
                                                @enderror>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><b>آپلود تصویر</b>
                                        <div class="form-group">
                                            <input type="file" name="file" value="{{$inputs->avatar_path}}" class="form-control" placeholder="پاسخ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-6"><b>پاسخ*</b>
                                        <div class="form-group">
                                            <textarea type="text" rows="5" name="answer" value="" class="form-control" placeholder="پاسخ"
                                                      @error('answer')
                                                      style="border: 1px solid red"
                                                @enderror>{{$inputs->answer}}</textarea>
                                        </div>
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
