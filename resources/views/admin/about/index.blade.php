@extends('admin.layout.masterPage')
@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>لیست مخاطبین
                    <small class="text-muted">به قطب نما خوش آمدید</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-left">
                    <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                    <li class="breadcrumb-item float-right"><a href="javascript:void(0);">برنامه</a></li>
                    <li class="breadcrumb-item active float-right">لیست مخاطبین</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-2 col-3">
                                <div class="checkbox inlineblock delete_all">
                                    <input id="deleteall" type="checkbox">
                                    <label for="deleteall">
                                        همه
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-3">
                                <div class="btn-group hidden-sm-down" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-simple dropdown-toggle btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right slideDown">
                                            <li>
                                                <a href="javascript:void(0);"> بستگان </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"> کار </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">گوگل</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);">ایجاد برچسب</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-simple btn-icon-mini btn-round btn-danger float-md-left">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th data-breakpoints="xs">تلفن</th>
                                <th data-breakpoints="xs sm md">ایمیل</th>
                                <th data-breakpoints="xs sm md">آدرس</th>
                                <th data-breakpoints="xs">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_2" type="checkbox">
                                        <label for="delete_2">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">امیر امیری<span class="badge badge-default m-r-10 hidden-sm-down"> بستگان </span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26252583</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i> amiramiri@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i> قم ، شهرک قدس ، ولیعصر 13 ، هدایت 13 </address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_3" type="checkbox">
                                        <label for="delete_3">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">حسین شمس<span class="badge badge-info m-r-10 hidden-sm-down">گوگل</span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26251689</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>hosseinshams@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>قم ، خیابان شهدا ، کوچه ممتاز ، پلاک 108</address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_4" type="checkbox">
                                        <label for="delete_4">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar4.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">مریم امیری</p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26459513</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>maryamamiri@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i> قم ، شهرک قدس ، ولیعصر 13 ، هدایت 13 </address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_5" type="checkbox">
                                        <label for="delete_5">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar6.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">فرزاد فرهودی<span class="badge badge-default m-r-10 hidden-sm-down"> بستگان </span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26451212</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>frazadfarhodi@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>كیلومتر 14 جاده قدیم كرج، بعد از ایران خودرو، شهرك دانش</address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_6" type="checkbox">
                                        <label for="delete_6">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar7.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">سها غلامی<span class="badge badge-default m-r-10 hidden-sm-down"> بستگان </span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26462323</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>sohagholamy@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>تهرانپارس، میدان پروین ، خ 196 شرقی ، خیابان 137 ، کوچه بنی هاشم</address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_7" type="checkbox">
                                        <label for="delete_7">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar8.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">حمیدرضا بهرمند <span class="badge badge-success m-r-10 hidden-sm-down"> کار </span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>264621005</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>hbahremand@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>قم ، خیابان شهدا ، کوچه ممتاز ، پلاک 108</address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_8" type="checkbox">
                                        <label for="delete_8">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">مقداد مطهری</p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>2646259999</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>mmotahhari@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i> قم ، شهرک قدس ، ولیعصر 13 ، هدایت 13 </address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="delete_9" type="checkbox">
                                        <label for="delete_9">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                    <p class="c_name">فرزاد فرهودی<span class="badge badge-default m-r-10 hidden-sm-down"> بستگان </span></p>
                                </td>
                                <td>
                                    <span class="phone"><i class="zmdi zmdi-phone m-l-10"></i>26451212</span>
                                </td>
                                <td>
                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i>frazadfarhodi@gmail.com</a></span>
                                </td>
                                <td>
                                    <address><i class="zmdi zmdi-pin"></i>كیلومتر 14 جاده قدیم كرج، بعد از ایران خودرو، شهرك دانش</address>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-left"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-blue">
                        <h4 class="m-t-10">محمد صفرزاده</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar3.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>12</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>5GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>24 تومان </h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-parpl">
                        <h4 class="m-t-10">سما تاج زاده</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar1.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>18</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>2GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>66 تومان </h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-slategray">
                        <h4 class="m-t-10">امیر مسعود والا </h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar4.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>57</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>12GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>126 تومان</h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-salmon">
                        <h4 class="m-t-10">محمد صفرزاده</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar3.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>12</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>5GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>24 تومان </h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-turquoise">
                        <h4 class="m-t-10">سما تاج زاده</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar5.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>18</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>2GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>66 تومان </h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card member-card">
                    <div class="header l-amber">
                        <h4 class="m-t-10">امیر مسعود والا </h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img src="assets/images/lg/avatar2.jpg" class="rounded-circle" alt="عکس پروفایل">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="فیس بوک" href="#">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="توییتر" href="#">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="اینستاگرام" href="javascript:void(0);">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">مشهد ، میدان توحید ، ابتدای ستارخان کوچه لادن پلاک 28 طبقه دوم</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>57</h5>
                                <small>پرونده ها </small>
                            </div>
                            <div class="col-4">
                                <h5>12GB</h5>
                                <small>استفاده شده</small>
                            </div>
                            <div class="col-4">
                                <h5>126 تومان</h5>
                                <small>خرج کرده است</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
