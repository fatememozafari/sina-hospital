@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبتنام در دوره
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right">   ثبتنام در دوره </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('alert')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> اطلاعات <strong>پایه</strong>

                                </h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <form action="{{route('admin.enrolls.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">کاربر*</label>
                                        <br>
                                        <div class="form-group">
                                        <select class="form-control show-tick" id="parent" name="user_id"
                                                @error('user_id')
                                                style="border: 1px solid red"
                                            @enderror>
                                        </select>
                                            @error('user_id')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>


                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">انتخاب دوره*</label>
                                        <br>
                                        <input type="hidden" class="form-control" name="course_id" value="{{$course->id}}">
                                        <input type="text" class="form-control" name="" value="{{$course->id}}-{{$course->title}}" readonly>
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
@section('script')
    <script>
        $(document).ready(function () {
            $('#parent').select2({
                minimumInputLength: 3 ,
                placeholder: "جستجوی کاربر ...",
                ajax: {
                    url:"{!! route('admin.users.ajax') !!}",
                    delay: 20,
                    dataType: 'json',
                    minimumInputLength: 3 ,
                    placeholder: "جستجوی کاربر ...",
                    data: function (params) {
                        return {
                            user_id:params.term,
                        }
                    },
                    processResults: function (response) {
                        return{
                            results:response.data
                        };

                    }
                }
            })
        });
    </script>
    @endsection
