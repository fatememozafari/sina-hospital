@extends('front.layout.masterPage')
@section('content')
    <div class="theme-cyan">
<section class="content page-calendar">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>برنامه پزشک
                    <small class="text-muted">به قطب نما خوش آمدید</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-left">
                    <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                    <li class="breadcrumb-item float-right"><a href="javascript:void(0);">وقت ملاقات</a></li>
                    <li class="breadcrumb-item active float-right">برنامه پزشک</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="body">
                        <button type="button" class="btn btn-round btn-info waves-effect" data-toggle="modal" data-target="#addevent"> برنامه را اضافه کنید </button>
                        <button class="btn btn-default hidden-lg-up m-t-0 float-left" data-toggle="collapse" data-target="#open-Schedule" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>
                        <div class="collapse-xs collapse-sm collapse" id="open-Schedule">
                            <hr>
                            <div class="event-name b-primary row">
                                <div class="col-2 text-center">
                                    <h4>11<span>تیر</span><span>1398</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>کنفرانس</h6>
                                    <p>این یک واقعیت طولانی است که یک خواننده پریشان شود . </p>
                                    <address><i class="zmdi zmdi-pin"></i> خ شهيد كلاهدوز(دولت) - نبش فكوريان-پلاک352 </address>
                                </div>
                            </div>
                            <div class="event-name b-primary row">
                                <div class="col-2 text-center">
                                    <h4>13<span>تیر</span><span>1398</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6> تولد </h6>
                                    <p>این یک واقعیت طولانی است که یک خواننده پریشان شود . </p>
                                    <address><i class="zmdi zmdi-pin"></i> خ شهيد كلاهدوز(دولت) - نبش فكوريان-پلاک352 </address>
                                </div>
                            </div>
                            <hr>
                            <div class="event-name b-lightred row">
                                <div class="col-2 text-center">
                                    <h4>09<span>تیر</span><span>1398</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6> رویداد کارآفرینی </h6>
                                    <p>این یک واقعیت طولانی است که یک خواننده پریشان شود . </p>
                                    <address><i class="zmdi zmdi-pin"></i> خ شهيد كلاهدوز(دولت) - نبش فكوريان-پلاک352 </address>
                                </div>
                            </div>
                            <hr>
                            <div class="event-name b-greensea row">
                                <div class="col-2 text-center">
                                    <h4>16<span>تیر</span><span>1398</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6> رویداد کارآفرینی </h6>
                                    <p>این یک واقعیت طولانی است که یک خواننده پریشان شود . </p>
                                    <address><i class="zmdi zmdi-pin"></i> خ شهيد كلاهدوز(دولت) - نبش فكوريان-پلاک352 </address>
                                </div>
                            </div>
                            <div class="event-name b-greensea row">
                                <div class="col-2 text-center">
                                    <h4>28<span>تیر</span><span>1398</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>گوگل</h6>
                                    <p>این یک واقعیت طولانی است که یک خواننده پریشان شود . </p>
                                    <address><i class="zmdi zmdi-pin"></i> خ شهيد كلاهدوز(دولت) - نبش فكوريان-پلاک352 </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="body">
                        <button class="btn btn-primary btn-round waves-effect" id="change-view-today">امروز</button>
                        <button class="btn btn-default btn-simple btn-round waves-effect" id="change-view-day" >روز</button>
                        <button class="btn btn-default btn-simple btn-round waves-effect" id="change-view-week">هفته</button>
                        <button class="btn btn-default btn-simple btn-round waves-effect" id="change-view-month">ماه</button>
                        <div id="calendar" class="m-t-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"> برنامه را اضافه کنید </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="تاریخ رویداد">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="عنوان رویداد ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="توضیحات ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">افزودن</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal"> بستن </button>
            </div>
        </div>
    </div>
</div>
    </div>

@endsection
