@extends('admin.layout.masterPage')
@section('content')
    <div class="theme-cyan">
    <section class="content profile-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>پروفایل {{$user->name}} {{$user->family}}
                        <small class="text-muted"> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>داشبورد</a></li>
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
                        <img src="{{$user->avatar_path}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>اطلاعات</strong> کاربر {{$user->id}} </h2>
                        </div>
                        <div class="body">
                            <strong>نام و نام خانوادگی</strong>
                            <p>{{$user->name}} {{$user->family}}</p>
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
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
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
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#report">بیوگرافی</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">جدول زمانی</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="report">
                            <div class="card">
                                <div class="body">
                                    <p class="text-justify">{{$user->description}}</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2>گزارش <strong> عمومی </strong></h2>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div> </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% کامل است (موفقیت)</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>  </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% کامل است</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>  </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only"> 60% کامل است  (هشدار)</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% کامل است (خطر)</span> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline">
                            <div class="card">
                                <div class="body">
                                    <div class="timeline-body">
                                        <div class="timeline m-border">
                                            <div class="timeline-item">
                                                <div class="item-content">
                                                    <div class="text-small">اکنون</div>
                                                    <p>{{date('Y/m/d')}}</p>
                                                </div>
                                            </div>
                                            @foreach($user->courses as $item)
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small"> تاریخ برگزاری: {{$item->start_at}}</div>
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
                            <a href="/admin/users/{{$user->id}}/edit" class="btn btn-primary btn-round">ویرایش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
