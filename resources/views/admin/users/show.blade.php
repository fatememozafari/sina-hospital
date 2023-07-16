@extends('layouts.adminMasterPage')
@section('content')
    <div class="theme-cyan">
    <section class="content profile-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>پروفایل {{$user->fullName}}
{{--                        <small class="text-muted"> خوش آمدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i>داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">کاربران</a></li>
                        <li class="breadcrumb-item active float-right">پروفایل کاربر</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class=" card patient-profile">
                        <img src="/profile/image/{{$user->avatar_path}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>اطلاعات</strong> کاربر {{$user->id}} </h2>
                        </div>
                        <div class="body">
                            <strong>نام و نام خانوادگی</strong>
                            <p>{{$user->fullName}}</p>
                            <strong> شغل </strong>
                            <p>{{$user->job}}</p>
                            <strong> آدرس ایمیل </strong>
                            <p>{{$user->email}}</p>
                            <strong>تلفن</strong>
                            <p>{{$user->mobile}}</p>
                            <hr>
                            <strong>نقش</strong>
                            <p>{{$user->roles->first()?->name}}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong> آموزش </strong></h2>
                        </div>
                        <div class="body">
                            <ul class="dis list-unstyled">
                                @foreach($user->courses as $item)
                                    <li>--{{$item->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>گزارش <strong>امتیازات</strong></h2>
                        </div>
                        <div class="body">
                            <div class="stats-row row m-b-20">
                                <div class="stat-item col-2 col-blue">
                                    <h6>امتیاز: <b>{{$user->rate}}</b></h6></div>
                                <div class="stat-item col-2 col-blush">
                                    <h6> <b></b></h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">


                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active " data-toggle="tab" href="#timeline">جدول زمانی</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#report">لیست دوره های گذرانده شده</a></li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="report">
                            <div class="card">
                                <div class="header">
                                    <h2>گزارش <strong> عمومی </strong></h2>
                                </div>
                                    <div class="body">
                                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable"
                                                id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                                <thead>
                                                <tr role="row">

                                                    <th class="" tabindex="0" aria-controls="DataTables_Table_1"
                                                        rowspan="1" colspan="1"
                                                        style="width: 166.453px; font-size: x-small"> عنوان دوره
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                        rowspan="1" colspan="1"
                                                        style="width: 98.7031px; font-size: x-small">عنوان تخصصی دوره
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                        rowspan="1" colspan="1"
                                                        style="width: 133.7031px; font-size: x-small"> نوع دوره
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                        rowspan="1" colspan="1"
                                                        style="width: 125.062px; font-size: x-small">مدت زمان دوره
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                        rowspan="1" colspan="1"
                                                        style="width: 233.453px; font-size: x-small">تصویر مدرک
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user->documents as $document)
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">{{$document->title}}</td>
                                                        <td>{{$document->slug}}</td>
                                                        <td>{{__('custom.'.$document->type)}}</td>
                                                        <td>{{$document->duration}} ساعت </td>
                                                        <td>
                                                            <div>
                                                                <div class="col-md-12">
                                                                    <a href="{{asset('/uploads/documents/'.$document->file)}}">
                                                                        <img src="{{asset('/uploads/documents/'.$document->file)}}" class="img-responsive"
                                                                             style="max-width: 100px; max-height: 100px" alt="">
                                                                    </a>
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
                        <div role="tabpanel" class="tab-pane active" id="timeline">
                            <div class="card">
                                <div class="body">
                                    <div class="timeline-body">
                                        <div class="timeline m-border">
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">اکنون</div>
                                                    <p>{{ Morilog\Jalali\Jalalian::forge(date('Y/m/d'))}}</p>
                                                </div>
                                            </div>
                                            @foreach($user->courses as $item)
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small"> تاریخ برگزاری:
                                                        {{ Morilog\Jalali\Jalalian::forge($item->start_at)->format('Y/m/d H:i:s') }}
                                                    </div>
                                                    <p>عنوان دوره: {{$item->title}}</p>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="hidden-print col-md-12 text-left">
                            <a href="javascript:void(0);" class="btn btn-info btn-round"><i
                                    class="zmdi zmdi-print"></i></a>
                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-round">ویرایش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
