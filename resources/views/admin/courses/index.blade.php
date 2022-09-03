@extends('admin.layout.masterPage')
@section('content')

    <div class="theme-cyan">
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>
                            <small class="text-muted">خوش امدید</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10"
                                type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i
                                        class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست دوره های حضوری</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>دوره های حضوری </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                            <li><a href="javascript:void(0);">عملیات</a></li>
                                            <li><a href="javascript:void(0);">عملیات دیگر</a></li>
                                            <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <table
                                        class="table table-bordered table-striped table-hover dataTable js-exportable"
                                        id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام دوره: activate to sort column descending"
                                                style="width: 133.453px;">نام دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" نام تخصصی دوره یا شناسه دوره: activate to sort column ascending"
                                                style="width: 133.453px;"> نام تخصصی دوره یا شناسه دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" مدرس : activate to sort column ascending"
                                                style="width: 98.7031px;"> مدرس
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="نوع دوره: activate to sort column ascending"
                                                style="width: 41.5625px;">نوع دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="تاریخ شروع: activate to sort column ascending"
                                                style="width: 44.3906px;">تاریخ شروع
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 133.453px;">عملیات
                                            </th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">نام دوره</th>
                                            <th rowspan="1" colspan="1"> نام تخصصی دوره</th>
                                            <th rowspan="1" colspan="1"> مدرس</th>
                                            <th rowspan="1" colspan="1">نوع دوره</th>
                                            <th rowspan="1" colspan="1">تاریخ شروع</th>
                                            <th rowspan="1" colspan="1">عملیات</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($course as $item)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$item->title}}</td>
                                            <td>{{$item->slug}}{{$item->id_code}}</td>
                                            <td>پاریس</td>
                                            <td>{{$item->type}}</td>
                                            <td>{{$item->start_at}}</td>
                                            <td>
                                                <div>
                                                    <a href="/admin/courses/{{$item->id}}" class="btn btn-primary btn-round">نمایش
                                                    </a>
                                                    <a href="/admin/courses/{{$item->id}}/edit" class="btn btn-primary btn-round">ویرایش
                                                    </a>
                                                    <form action="/admin/courses/{{$item->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-default btn-round btn-simple">
                                                            حذف
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

        </section>
    </div>
@endsection
