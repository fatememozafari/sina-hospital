@extends('admin.layout.masterPage')
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
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right">   ثبتنام در دوره </li>
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
                            <form action="/admin/enrolls" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">کاربر</label>
                                        <br>
                                        <div class="form-group">
                                        <select class="form-control show-tick" name="user_id" id="">
                                            <option value="">

                                            </option>
                                        @foreach($user as $item)
                                            <option value="{{$item->id}}">{{$item->id}}-{{$item->name}} {{$item->family}}</option>
                                            @endforeach
                                        </select>
                                        </div>


                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">انتخاب دوره</label>
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
