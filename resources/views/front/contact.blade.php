@extends('layouts.frontMasterPage')
@section('content')
    <section class="content inbox">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
                        <small class="text-muted"> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i
                                    class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);"> صندوق ورودی </a></li>
                        <li class="breadcrumb-item active float-right">ایجاد ایمیل</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card action_bar">
                        @include('alert')
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>تماس با ما </strong></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <form action="{{route('front.contacts.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 col-lg-12 col-xl-12">

                                        <div class="form-group form-float">
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="نام و نام خانوادگی :">
                                        </div>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group form-float">
                                            <input type="text" name="title" class="form-control"
                                                   placeholder="موضوع">
                                        </div>
                                        @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <strong> متن پیام: </strong>
                                        <textarea id="" class="form-control" name="message" rows="10"></textarea>
                                        @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="file"
                                               class="btn btn-dark btn-round waves-effect m-t-20"
                                               placeholder="آپلود فایل">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-round waves-effect m-t-20">
                                            ارسال پیام
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


{{--    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->--}}

{{--    <script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor -->--}}

{{--    <script src="{{asset('assets/js/pages/forms/editors.js')}}"></script>--}}
@endsection
