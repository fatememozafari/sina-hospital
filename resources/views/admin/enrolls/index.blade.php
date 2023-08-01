@extends('layouts.adminMasterPage')
@section('content')

    <div class="theme-cyan">
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>
{{--                            <small class="text-muted">خوش امدید</small>--}}
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10"
                                type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست دوره های حضوری</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
            @include('alert')
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>لیست دوره های حضوری </strong></h2>
                                <ul class="header-dropdown">
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
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" ردیف : activate to sort column ascending"
                                                style="width: 44.3906px;"> ردیف
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام دوره: activate to sort column descending"
                                                style="width: 133.453px;">نام دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" نام تخصصی دوره : activate to sort column ascending"
                                                style="width: 133.453px;"> نام تخصصی دوره یا شناسه دوره
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" نام کاربر: activate to sort column ascending"
                                                style="width: 41.5625px;">نام کاربر
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="تاریخ برگزاری: activate to sort column ascending"
                                                style="width: 99.3906px;">تاریخ برگزاری
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="وضعیت: activate to sort column ascending"
                                                style="width: 133.453px;">وضعیت
                                            </th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ردیف</th>
                                            <th rowspan="1" colspan="1">نام دوره</th>
                                            <th rowspan="1" colspan="1"> نام تخصصی دوره</th>
                                            <th rowspan="1" colspan="1">نام کاربر</th>
                                            <th rowspan="1" colspan="1">تاریخ برگزاری</th>
                                            <th rowspan="1" colspan="1">وضعیت</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($enrolls as $item)
                                            <tr role="row" class="even">
                                                <td>{{$item->id}}</td>
                                                <td class="sorting_1"><a href="{{route('admin.courses.show',$item->id)}}">{{$item->title}}</a></td>
                                                <td>{{$item->slug}} {{$item->id_code}}</td>
                                                <td> {{$item->name}} {{$item->family}}</td>
                                                <td>{{\Morilog\Jalali\Jalalian::forge($item->start_at)->format('Y-m-d H:i:s')}}</td>
                                                <td>
                                                    <div>
                                                     <span class="badge badge-success">ثبت نام شده</span>
                                                    <form action="{{route('admin.courses.delete',$item->id)}}" method="post">
                                                        @csrf
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
