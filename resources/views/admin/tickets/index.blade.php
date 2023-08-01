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
                            <li class="breadcrumb-item active float-right"> تیکت ها </li>
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
                                <h2><strong>لیست تیکت ها </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="">
{{--                                        <a class="btn btn-info" href="{{route('admin.tickets.categories.create')}}">ایجاد تیکت ها جدید</a>--}}
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <table
                                        class="table table-bordered table-striped table-hover dataTable js-exportable table-responsive"
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
                                                aria-label="نویسنده تیکت ها: activate to sort column descending"
                                                style="width: 133.453px;">نویسنده تیکت</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="عنوان تیکت ها: activate to sort column descending"
                                                style="width: 133.453px;">عنوان تیکت ها
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="دسته تیکت ها: activate to sort column descending"
                                                style="width: 133.453px;">دسته تیکت</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="اولویت تیکت ها: activate to sort column descending"
                                                style="width: 133.453px;">اولویت تیکت</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="ارجاع شده از: activate to sort column descending"
                                                style="width: 133.453px;">ارجاع شده از</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="تیکت مرجع: activate to sort column descending"
                                                style="width: 133.453px;">تیکت مرجع</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 233.453px;">عملیات
                                            </th>

                                        </tr>
                                        </thead>
                                        {{--                                        <tfoot>--}}
                                        {{--                                        <tr>--}}
                                        {{--                                            <th rowspan="1" colspan="1">ردیف</th>--}}
                                        {{--                                            <th rowspan="1" colspan="1">نام دوره</th>--}}
                                        {{--                                            <th rowspan="1" colspan="1"> نام تخصصی دوره</th>--}}
                                        {{--                                            <th rowspan="1" colspan="1">نوع دوره</th>--}}
                                        {{--                                            <th rowspan="1" colspan="1">تاریخ برگزاری</th>--}}
                                        {{--                                            <th rowspan="1" colspan="1">عملیات</th>--}}
                                        {{--                                        </tr>--}}
                                        {{--                                        </tfoot>--}}
                                        <tbody>
                                        @foreach($tickets as $ticket)
                                            <tr role="row" class="even">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ticket->user->fullName }}</td>
                                                <td>{{ $ticket->subject }}</td>
                                                <td>{{ $ticket->category->name }}</td>
                                                <td>{{ $ticket->priority->name }}</td>
                                                <td>{{ $ticket->admin->user->fullName }}</td>
                                                <td>{{ $ticket->parent->subject ?? '-' }}</td>
                                                <td>
                                                    <div style="display: flex" >
                                                        <a href="{{route('admin.tickets.show',$ticket->id)}}" class="btn-sm text-info btn-round mt-2">مشاهده
                                                        </a>
                                                        <a href="{{ route('admin.tickets.changeStatus', $ticket->id) }}" class="btn btn-warning btn-simple btn-round"><i class="fa fa-check"></i> {{ $ticket->status == 1 ? 'باز کردن' : 'بستن' }}</a>
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
