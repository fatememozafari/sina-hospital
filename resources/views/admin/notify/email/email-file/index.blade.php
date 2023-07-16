@extends('layouts.adminMasterPage')
@section('content')
    <section class="content container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>فایل های ضمیمه
                        {{--                        <small class="text-muted"> خوش آمدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">صفحات</a></li>
                        <li class="breadcrumb-item active float-right">email</li>
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
                            <h2><strong>فایل های ضمیمه </strong></h2>
                            <ul class="header-dropdown">
                                <li class="">
{{--                                    <a class="btn btn-info" href="{{route('admin.email.create')}}">ایجاد پیام جدید</a>--}}
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
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="فایل ضمیمه: activate to sort column ascending"
                                            style="width: 44.3906px;">فایل ضمیمه
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="عملیات: activate to sort column ascending"
                                            style="width: 233.453px;">عملیات
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($emailFiles as $key => $emailFile)
                                        <tr role="row" class="even">
                                            <td>{{$key +=1}}</td>
                                            <td>
                                                <a href="{{asset($emailFile->file_path)}}"><img style="width: 80px; height: 80px" src="{{asset($emailFile->file_path)}}" alt=""></a>
                                            </td>
                                             <td>
                                                <div style="display: flex" >
                                                    <form action="{{route('admin.email-file.delete',$emailFile->id)}}" class="mt-2" method="post">
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
