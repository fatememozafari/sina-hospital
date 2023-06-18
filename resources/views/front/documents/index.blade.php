@extends('layouts.frontMasterPage')
{{--@dd($errors->all())--}}
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
                            <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست دوره هایی که قبلا گذرانده اید</li>
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
                                <h2> <strong>دوره هایی که قبلا گذرانده اید </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown">

                                        <a href="{{route('front.documents.create')}}" class="btn btn-info">
                                            <i class="fa fa-plus"></i>
                                            ثبت دوره جدید
                                        </a>
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
{{--                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="ردیف: activate to sort column ascending"--}}
{{--                                                style="width: 41.5625px;">ردیف--}}
{{--                                            </th>--}}
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام دوره: activate to sort column descending"
                                                style="width: 125.062px;">نام دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" نام تخصصی : activate to sort column ascending"
                                                style="width: 133.453px;"> نام تخصصی دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" نوع دوره و نوع فایل : activate to sort column ascending"
                                                style="width: 66.3906px;"> نوع دوره
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="مدرس: activate to sort column ascending"
                                                style="width: 44.7031px;">مدرس
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 233.828px;">عملیات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
{{--                                            <th rowspan="1" colspan="1">ردیف</th>--}}
                                            <th rowspan="1" colspan="1">نام دوره</th>
                                            <th rowspan="1" colspan="1"> نام تخصصی دوره</th>
                                            <th rowspan="1" colspan="1"> نوع دوره</th>
                                            <th rowspan="1" colspan="1">مدرس</th>
                                            <th rowspan="1" colspan="1">عملیات</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($document as $item)
                                            <tr role="row" class="even">
{{--                                                <td>{{$item->id}}</td>--}}
                                                <td class="sorting_1">{{$item->title}}</td>
                                                <td>{{$item->slug}}</td>
                                                <td>{{__('custom.'.$item->type)}}</td>
                                                <td>{{$item->teacher}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="mt-3">
                                                            <a href="{{route('front.documents.show',$item->id)}}" class="btn-sm text-info">نمایش
                                                            </a>
                                                        </div>
                                                        <div class="mt-3">
                                                            <a href="{{route('front.documents.edit',$item->id)}}" class="btn-sm text-info">ویرایش
                                                            </a>
                                                        </div>
                                                        <div class="mt-1">
                                                            <form action="{{route('front.documents.destroy',$item->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-round btn-simple">
                                                                    حذف
                                                                </button>
                                                            </form>
                                                        </div>




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
