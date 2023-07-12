@extends('layouts.frontMasterPage')
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
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست تیکت ها</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Exportable Table -->
                @include('error')
                @include('alert')
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>تیکت ها </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a class="btn btn-info" href="{{route('front.tickets.create')}}">ایجاد تیکت جدید</a>
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
                                                aria-label="نویسنده تیکت: activate to sort column descending"
                                                style="width: 133.453px;">نویسنده تیکت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" عنوان تیکت : activate to sort column ascending"
                                                style="width: 133.453px;"> عنوان تیکت
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" وضعیت تیکت: activate to sort column ascending"
                                                style="width: 41.5625px;">وضعیت تیکت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="دسته تیکت: activate to sort column ascending"
                                                style="width: 80.3906px;">دسته تیکت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="اولویت تیکت: activate to sort column ascending"
                                                style="width: 80.3906px;">اولویت تیکت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="ارجاع شده از: activate to sort column ascending"
                                                style="width: 99.3906px;">ارجاع شده از
                                            </th>
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="تیکت مرجع: activate to sort column ascending"--}}
{{--                                                style="width: 99.3906px;">تیکت مرجع--}}
{{--                                            </th>--}}
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 160px;">عملیات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tickets as $ticket)
                                            <tr role="row" class="even">
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $ticket->user->fullName }}</td>
                                                <td>{{ $ticket->subject }}</td>
{{--                                                <td>{{ Str::limit($ticket->description, 30) }}</td>--}}
                                                <td>{{ $ticket->status == 0 ? 'باز' : 'بسته' }}</td>
                                                <td>{{ $ticket->category->name }}</td>
                                                <td>{{ $ticket->priority->name }}</td>
                                                <td>{{ $ticket->admin->user->fullName }}</td>
{{--                                                <td>{{ $ticket->parent->subject ?? '-' }}</td>--}}
                                                <td class="width-16-rem text-left">
                                                    <a href="{{ route('front.tickets.show', $ticket->id) }}"
                                                       class="btn btn-info btn-sm">مشاهده</a>
                                                    <a href="{{ route('front.tickets.changeStatus', $ticket->id) }}"
                                                       class="btn btn-warning btn-sm">{{ $ticket->status == 0 ? 'باز' : 'بسته' }}</a>
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
