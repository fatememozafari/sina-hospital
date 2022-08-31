@extends('front.layout.masterPage')
@section('content')
    <section class="content profile-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>پروفایل کاربر
                        <small class="text-muted"> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
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
                        <img src="assets/images/image-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>درباره</strong> کاربر </h2>
                        </div>
                        <div class="body">
                            <strong>نام و نام خانوادگی</strong>
                            <p>سوگل محمودی</p>
                            <strong> شغل </strong>
                            <p>متخصص UI UX</p>
                            <strong> آدرس ایمیل </strong>
                            <p>sogol.mahmodi@info.com</p>
                            <strong>تلفن</strong>
                            <p>025-678-906</p>
                            <hr>
                            <strong>آدرس</strong>
                            <address>​خیابان سپهبد قرنی، پلاک 179</address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>گزارش <strong>ECG</strong></h2>
                        </div>
                        <div class="body">
                            <div class="stats-row row m-b-20">
                                <div class="stat-item col-2 col-blue">
                                    <h6>Pulse <b>76</b></h6></div>
                                <div class="stat-item col-2 col-blush">
                                    <h6>BP <b>112</b></h6>
                                </div>
                            </div>
                            <div id="real_time_chart" class="flot-chart" style="height: 105px;"></div>
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
                                    <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                    <p class="text-justify">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد  </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2>گزارش <strong> عمومی </strong></h2>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div> فشار خون </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% کامل است (موفقیت)</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div> ضربان قلب </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% کامل است</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div> هموگلوبین </div>
                                            <div class="progress m-b-20">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only"> 60% کامل است  (هشدار)</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>قند</div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% کامل است (خطر)</span> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h2><strong> آموزش </strong></h2>
                                </div>
                                <div class="body">
                                    <ul class="dis list-unstyled">
                                        <li>لورم ایپسوم متن ساختگی</li>
                                        <li> با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </li>
                                        <li> با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </li>
                                        <li>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</li>
                                        <li>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع</li>
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
                                                    <p>تخلیه</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">11:30</div>
                                                    <p>چک آپ روزانه</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning border-l">
                                                <div class="item-content">
                                                    <div class="text-small">10:30</div>
                                                    <p> عملیات </p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-warning">
                                                <div class="item-content">
                                                    <div class="text-small">3 روز پیش</div>
                                                    <p>چک آپ روزانه</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text--muted">سه شنبه ، 10 مهر</div>
                                                    <p>چک آپ روزانه</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">یک شنبه ، 5 مهر</div>
                                                    <p>چک آپ روزانه</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-danger">
                                                <div class="item-content">
                                                    <div class="text-small"> جمعه ، 17 شهریور</div>
                                                    <p>آزمایش خون</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item border-info">
                                                <div class="item-content">
                                                    <div class="text-small">شنبه ، 10 شهریور</div>
                                                    <p> بستری در بخش کاربر. 21 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
