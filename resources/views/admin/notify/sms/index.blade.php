@extends('layouts.adminMasterPage')
@section('content')
    <section class="content container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لیست پیام ها
{{--                        <small class="text-muted"> خوش آمدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">صفحات</a></li>
                        <li class="breadcrumb-item active float-right">sms</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('alert')
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>پیام های ارسال شده </strong></h2>
                            <ul class="header-dropdown">
                                <li class="">
                                    <a class="btn btn-info" href="{{route('admin.sms.create')}}">ایجاد پیام جدید</a>
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
                                            aria-label=" ردیف : activate to sort column ascending"
                                            style="width: 10.3906px;"> ردیف
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="عنوان پیام: activate to sort column descending"
                                            style="width: 133.453px;">عنوان پیام
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label=" متن پیام : activate to sort column ascending"
                                            style="width: 150.453px;"> متن پیام
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="تاریخ ارسال: activate to sort column ascending"
                                            style="width: 66.5625px;">تاریخ ارسال
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="وضعیت: activate to sort column ascending"
                                            style="width: 44.3906px;">وضعیت
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="عملیات: activate to sort column ascending"
                                            style="width: 233.453px;">عملیات
                                        </th>

                                    </tr>
                                    </thead>
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <th rowspan="1" colspan="1">ردیف</th>--}}
{{--                                        <th rowspan="1" colspan="1">نام دوره</th>--}}
{{--                                        <th rowspan="1" colspan="1"> نام تخصصی دوره</th>--}}
{{--                                        <th rowspan="1" colspan="1">نوع دوره</th>--}}
{{--                                        <th rowspan="1" colspan="1">تاریخ برگزاری</th>--}}
{{--                                        <th rowspan="1" colspan="1">عملیات</th>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
                                    <tbody>
                                    @foreach($sms as $key => $item)
                                        <tr role="row" class="even">
                                            <td>{{$key += 1}}</td>
                                            <td class="sorting_1">{{$item->title}}</td>
                                            <td>{{$item->body}}</td>
                                            <td>{{$item->published_at}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                                <div style="display: flex" >
                                                    <a href="{{route('admin.sms.show',$item->id)}}" class="btn-sm text-info mt-3">نمایش
                                                    </a>
                                                    <a href="{{route('admin.sms.edit',$item->id)}}" class="btn-sm text-info mt-3">ویرایش
                                                    </a>
                                                    <form action="{{route('admin.sms.delete',$item->id)}}" class="mt-2" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-round btn-simple">
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

    </section>

@endsection
