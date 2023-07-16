@extends('layouts.adminMasterPage')
<link rel="stylesheet" href="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">

@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>  ایجاد email
{{--                        <small class="text-muted">خوش امدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right">  email  </li>
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

                            <form action="{{route('admin.email.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>عنوان*</b>
                                        <div class="form-group">
                                            <input type="text" name="subject" value="{{old('subject')}}" class="form-control" placeholder="عنوان"
                                            @error('subject')
                                            style="border: 1px solid red"
                                            @enderror>
                                            @error('subject')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3"><b>تاریخ ارسال</b>
                                        <div class="form-group">
                                            <input type="datetime-local"  name="published_at" value="{{old('published_at')}}" id="published_at" class="form-control ">
{{--                                            <input type="text" id="published_at_view"  class="form-control" placeholder="تاریخ ارسال"--}}
{{--                                                   @error('published_at')--}}
{{--                                                   style="border: 1px solid red"--}}
{{--                                                @enderror>--}}
                                            @error('published_at')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-9"><b>متن پیام*</b>
                                        <div class="form-group">
                                            <textarea type="text" rows="5" name="body" value="{{old('body')}}" class="form-control" placeholder="متن پیام"
                                                      @error('body')
                                                      style="border: 1px solid red"
                                            @enderror>{{old('body')}}</textarea>
                                            @error('body')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">

                                    <div class="col-sm-9"><b>انتخاب فایل</b>
                                        <div class="form-group">
                                            <input type="file"  name="files[]" value="{{old('file')}}" class="form-control" multiple
                                                      @error('file')
                                                      style="border: 1px solid red"
                                            @enderror>{{old('file')}}
                                            @error('file')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
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
@section('script')

    <script src="{{ asset('admin-assets/jalalidatepicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#published_at_view').persianDatepicker({
                format: 'YYYY-MM-DD',
                altField: '#published_at',
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            })
        });
    </script>



@endsection
