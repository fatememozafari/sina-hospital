@extends('layouts.adminMasterPage')
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
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست کاربران</li>
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
                                <h2> <strong>لیست کاربران </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a class="btn btn-info" href="{{route('admin.users.create')}}">ایجاد کاربر جدید</a>
                                    </li>
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li role="presentation" class="divider"></li>
                                            <li><a href="javascript:void(0);">خروجی XLS</a></li>
                                            <li><a href="javascript:void(0);">خروجی CSV</a></li>
                                            <li><a href="javascript:void(0);">خروجی XML</a></li>
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
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 44.062px;">ردیف
                                            </th>
                                            <th class="" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 166.453px;"> نام و نام خانوادگی
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 98.7031px;">کد ملی
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 133.7031px;"> شماره موبایل
                                            </th>
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                style="width: 125.062px;">ایمیل--}}
{{--                                            </th>--}}

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 44.3906px;">امتیاز
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 233.453px;">عملیات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1"> ردیف</th>
                                            <th rowspan="1" colspan="1"> نام و نام خانوادگی</th>
                                            <th rowspan="1" colspan="1">کد ملی</th>
                                            <th rowspan="1" colspan="1"> شماره موبایل</th>
{{--                                            <th rowspan="1" colspan="1">ایمیل</th>--}}
                                            <th rowspan="1" colspan="1">امتیاز</th>
                                            <th rowspan="1" colspan="1">عملیات</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($user as $item)
                                            <tr role="row" class="even">
                                                <td>{{$item->id}}</td>
                                                <td class="sorting_1">{{$item->fullName}}</td>
                                                <td>{{$item->melli_code}}</td>
                                                <td>{{$item->mobile}}</td>
{{--                                                <td>{{$item->email}}</td>--}}
                                                <td>{{$item->rate}}</td>
                                                <td>
                                                    <div>
                                                        <a href="{{route('admin.users.show',$item->id)}}" class="btn-sm text-info ">نمایش
                                                        </a>
                                                        <a href="{{route('admin.users.edit',$item->id)}}" class="btn-sm text-info ">ویرایش
                                                        </a>


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
