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
                            <h2><strong>پیام های ارسال شده </strong></h2>
                            <ul class="header-dropdown">
                                <li class="">
                                    <a class="btn btn-info" href="{{route('admin.email.create')}}">ایجاد پیام جدید</a>
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
                                    @foreach($email as $key => $item)
                                        <tr role="row" class="even">
                                            <td>{{$key += 1}}</td>
                                            <td class="sorting_1">{{$item->subject}}</td>
                                            <td>{{$item->body}}</td>
                                            <td>{{\Morilog\Jalali\Jalalian::forge($item->published_at)->format('Y-m-d H:i:s')}}</td>
                                            <td>
                                                <label>
                                                    <input id="{{ $item->id }}" onchange="changeStatus({{ $item->id }})" data-url="{{ route('admin.email.changeStatus', $item->id) }}" type="checkbox" @if ($item->status === 1)
                                                    checked
                                                        @endif>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.email-file.index', $item->id) }}" class="btn-sm text-warning"><i class="fa fa-file"></i> فایل ضمیمه</a>

                                            </td>
                                            <td>

                                                <div style="display: flex" class="mt-0" >

                                                    <a href="{{route('admin.email.show',$item->id)}}" class="btn-sm text-info mt-3">نمایش
                                                    </a>
                                                    <a href="{{route('admin.email.edit',$item->id)}}" class="btn-sm text-info mt-3">ویرایش
                                                    </a>
                                                    <form action="{{route('admin.email.delete',$item->id)}}" class="mt-2" method="post">
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

@section('script')
    <script type="text/javascript">

        function changeStatus(id){
            var element = $("#" + id);
            var url = element.attr('data-url');
            var elementValue = !element.prop('checked');

            $.ajax({
                url : url,
                type : "GET",
                success : function(response){
                    if(response.status){
                        if(response.checked){
                            element.prop('checked', true);
                            successToast('ایمیل  با موفقیت فعال شد')
                        }
                        else{
                            element.prop('checked', false);
                            successToast('ایمیل  با موفقیت غیر فعال شد')
                        }
                    }
                    else{
                        element.prop('checked', elementValue);
                        errorToast('هنگام ویرایش مشکلی بوجود امده است')
                    }
                },
                error : function(){
                    element.prop('checked', elementValue);
                    errorToast('ارتباط برقرار نشد')
                }
            });

            function successToast(message){

                var successToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-success text-white">\n' +
                    '<strong class="ml-auto">' + message + '</strong>\n' +
                    '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '</section>\n' +
                    '</section>';

                $('.toast-wrapper').append(successToastTag);
                $('.toast').toast('show').delay(5500).queue(function() {
                    $(this).remove();
                })
            }

            function errorToast(message){

                var errorToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-danger text-white">\n' +
                    '<strong class="ml-auto">' + message + '</strong>\n' +
                    '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                    '<span aria-hidden="true">&times;</span>\n' +
                    '</button>\n' +
                    '</section>\n' +
                    '</section>';

                $('.toast-wrapper').append(errorToastTag);
                $('.toast').toast('show').delay(5500).queue(function() {
                    $(this).remove();
                })
            }
        }
    </script>
    @endsection
