@extends('admin.layout.masterPage')
@section('content')
{{--    <div class="theme-cyan">--}}
{{--        <section class="content home">--}}
{{--            <div class="block-header">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-7 col-md-6 col-sm-12">--}}
{{--                        <h2>--}}
{{--                            <small class="text-muted">خوش امدید</small>--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5 col-md-6 col-sm-12">--}}
{{--                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10"--}}
{{--                                type="button">--}}
{{--                            <i class="zmdi zmdi-plus"></i>--}}
{{--                        </button>--}}
{{--                        <ul class="breadcrumb float-md-left">--}}
{{--                            <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>--}}
{{--                                    خانه</a></li>--}}
{{--                            <li class="breadcrumb-item active float-right">لیست مدرسان</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="container-fluid">--}}
{{--                <!-- Exportable Table -->--}}
{{--                <div class="row clearfix">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="header">--}}
{{--                                <h2> <strong>لیست مدرسان</strong></h2>--}}
{{--                                <ul class="header-dropdown">--}}
{{--                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
{{--                                                            data-toggle="dropdown" role="button" aria-haspopup="true"--}}
{{--                                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
{{--                                        <ul class="dropdown-menu dropdown-menu-right slideUp float-right">--}}
{{--                                            <li><a href="javascript:void(0);">عملیات</a></li>--}}
{{--                                            <li><a href="javascript:void(0);">عملیات دیگر</a></li>--}}
{{--                                            <li><a href="javascript:void(0);">یک چیز دیگر</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="remove">--}}
{{--                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="body">--}}
{{--                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">--}}

{{--                                    <table--}}
{{--                                        class="table table-bordered table-striped table-hover dataTable js-exportable"--}}
{{--                                        id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">--}}
{{--                                        <thead>--}}
{{--                                        <tr role="row">--}}

{{--                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1" aria-sort="ascending"--}}
{{--                                                aria-label="ردیف : activate to sort column ascending"--}}
{{--                                                style="width: 20.5625px;">ردیف--}}
{{--                                            </th>--}}
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="عنوان خبر: activate to sort column ascending"--}}
{{--                                                style="width: 133.453px;">عنوان خبر--}}
{{--                                            </th>--}}
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label=" نویسنده : activate to sort column ascending"--}}
{{--                                                style="width:44.3906px;"> نویسنده--}}
{{--                                            </th>--}}
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label=" عکاس : activate to sort column ascending"--}}
{{--                                                style="width: 106.828px;">عکاس--}}
{{--                                            </th>--}}

{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="عملیات: activate to sort column ascending"--}}
{{--                                                style="width: 233.453px;">عملیات--}}
{{--                                            </th>--}}

{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tfoot>--}}
{{--                                        <tr>--}}
{{--                                            <th rowspan="1" colspan="1">ردیف</th>--}}
{{--                                            <th rowspan="1" colspan="1">عنوان خبر</th>--}}
{{--                                            <th rowspan="1" colspan="1"> نویسنده</th>--}}
{{--                                            <th rowspan="1" colspan="1">عکاس</th>--}}
{{--                                            <th rowspan="1" colspan="1">عملیات</th>--}}
{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
{{--                                        <tbody>--}}
{{--                                        @foreach($news as $item)--}}
{{--                                            <tr role="row" class="even">--}}
{{--                                                <td class="sorting_1">{{$item->id}}</td>--}}
{{--                                                <td><a href="/admin/news/{{$item->id}}">{{$item->title}}</a></td>--}}
{{--                                                <td>{{$item->writer}}</td>--}}
{{--                                                <td><a href="/admin/news/{{$item->id}}">{{$item->photographer}}</a></td>--}}
{{--                                                <td>--}}
{{--                                                    <div>--}}
{{--                                                        <a href="/admin/news/{{$item->id}}" class="btn btn-primary btn-round">نمایش--}}
{{--                                                        </a>--}}
{{--                                                        <a href="/admin/news/{{$item->id}}/edit" class="btn btn-primary btn-round">ویرایش--}}
{{--                                                        </a>--}}


{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}

{{--                                        </tbody>--}}

{{--                                    </table>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- #END# Exportable Table -->--}}

{{--        </section>--}}
{{--    </div>--}}

<div class="theme-blush">
    <section class="content blog-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>لیست اخبار
                        <small> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="{{route('front.news.list')}}">اخبار</a></li>
                        <li class="breadcrumb-item active float-right">لیست اخبار</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 left-box">
                    @foreach($news as $item)
                        <div class="card single_post">
                            <div class="body">
                                <h3 class="m-t-0 m-b-5"><a href="#">{{$item->title}}</a></h3>
                                <ul class="meta">
                                    <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>ارسال شده توسط : {{$item->writer}}</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-label col-red"></i>{{$item->photographer}}</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>نظرات :3</a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="img-post m-b-15">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="{{$item->avatar_path1}}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{$item->avatar_path2}}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{$item->avatar_path3}}" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">قبلی</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">بعدی</span>
                                        </a>
                                    </div>
                                    <div class="social_share">
                                        <a href="{{$item->facebook}}"><button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button></a>
                                        <a href="{{$item->twitter}}"><button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button></a>
                                        <a href="{{$item->instagram}}"> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button></a>
                                    </div>
                                </div>
                                <p>{{$item->body}} </p>
{{--                                <a href="/admin/news/{{$item->id}}" title="ادامه مطلب" class="btn btn-round btn-info"> ادامه مطلب </a>--}}
                                <a href="/admin/news/{{$item->id}}/edit" title="ادامه مطلب" class="btn btn-round btn-info"> ویرایش مطلب </a>
                                <form action="/admin/news/{{$item->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-default btn-round btn-simple">
                                        حذف
                                    </button>
                                </form>

                            </div>
                        </div>
                    @endforeach
                    <ul class="pagination pagination-primary">
                        <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
</div>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">

@endsection
