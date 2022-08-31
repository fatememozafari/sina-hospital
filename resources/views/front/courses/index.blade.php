@extends('front.layout.masterPage')
@section('content')
    <div class="theme-cyan">
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>داشبورد
                            <small class="text-muted">خوش امدید</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10"
                                type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">داشبورد</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2> <strong>دوره های حضوری </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                            <li><a href="javascript:void(0);">عملیات</a></li>
                                            <li><a href="javascript:void(0);">عملیات دیگر</a></li>
                                            <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                        </ul>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام: activate to sort column descending"
                                                style="width: 125.062px;">نام
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" موقعیت : activate to sort column ascending"
                                                style="width: 233.453px;"> موقعیت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" دفتر : activate to sort column ascending"
                                                style="width: 44.3906px;"> دفتر
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="سن: activate to sort column ascending"
                                                style="width: 41.5625px;">سن
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="تاریخ شروع: activate to sort column ascending"
                                                style="width: 98.7031px;">تاریخ شروع
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="حقوق: activate to sort column ascending"
                                                style="width: 106.828px;">حقوق
                                            </th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">نام</th>
                                            <th rowspan="1" colspan="1"> موقعیت</th>
                                            <th rowspan="1" colspan="1"> دفتر</th>
                                            <th rowspan="1" colspan="1">سن</th>
                                            <th rowspan="1" colspan="1">تاریخ شروع</th>
                                            <th rowspan="1" colspan="1">حقوق</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">آریا عظیمی</td>
                                            <td> حسابدار</td>
                                            <td>ساری</td>
                                            <td>33</td>
                                            <td>1394/11/28</td>
                                            <td>162 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">اصغر دانشگر</td>
                                            <td> مدیر ارشد مالی (CFO)</td>
                                            <td>اراک</td>
                                            <td>64</td>
                                            <td>1390/06/09</td>
                                            <td>725 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">الناز شفیعی</td>
                                            <td> دبیر</td>
                                            <td>پاریس</td>
                                            <td>41</td>
                                            <td>1390/02/12</td>
                                            <td>109 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">الی شفیعی</td>
                                            <td> کنترل مالی</td>
                                            <td>پاریس</td>
                                            <td>62</td>
                                            <td>1389/02/14</td>
                                            <td>452 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">انسیه ابطحی</td>
                                            <td> مدیر دفتر</td>
                                            <td>لندن</td>
                                            <td>37</td>
                                            <td>1380/12/11</td>
                                            <td>136 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">بهنام محمدی</td>
                                            <td>مدیر منطقه</td>
                                            <td>پاریس</td>
                                            <td>36</td>
                                            <td>1384/10/16</td>
                                            <td>470 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">حمید علی محمدی</td>
                                            <td> حسابدار</td>
                                            <td>ساری</td>
                                            <td>63</td>
                                            <td>1395/07/25</td>
                                            <td>170 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">رحمان رحمانی</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>اراک</td>
                                            <td>63</td>
                                            <td>1390/01/04</td>
                                            <td>125 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">رحمان رضایی</td>
                                            <td> هماهنگ کننده داده</td>
                                            <td>تهران</td>
                                            <td>64</td>
                                            <td>1392/04/09</td>
                                            <td>138 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">رضا شفق</td>
                                            <td> مدیر پشتیبانی</td>
                                            <td>قم</td>
                                            <td>22</td>
                                            <td>1388/03/03</td>
                                            <td>342 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">آریا عظیمی</td>
                                            <td> حسابدار</td>
                                            <td>ساری</td>
                                            <td>33</td>
                                            <td>1394/11/28</td>
                                            <td>162 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">اصغر دانشگر</td>
                                            <td> مدیر ارشد مالی (CFO)</td>
                                            <td>اراک</td>
                                            <td>64</td>
                                            <td>1390/06/09</td>
                                            <td>725 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">الناز شفیعی</td>
                                            <td> دبیر</td>
                                            <td>پاریس</td>
                                            <td>41</td>
                                            <td>1390/02/12</td>
                                            <td>109 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">الی شفیعی</td>
                                            <td> کنترل مالی</td>
                                            <td>پاریس</td>
                                            <td>62</td>
                                            <td>1389/02/14</td>
                                            <td>452 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">انسیه ابطحی</td>
                                            <td> مدیر دفتر</td>
                                            <td>لندن</td>
                                            <td>37</td>
                                            <td>1380/12/11</td>
                                            <td>136 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">بهنام محمدی</td>
                                            <td>مدیر منطقه</td>
                                            <td>پاریس</td>
                                            <td>36</td>
                                            <td>1384/10/16</td>
                                            <td>470 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">حمید علی محمدی</td>
                                            <td> حسابدار</td>
                                            <td>ساری</td>
                                            <td>63</td>
                                            <td>1395/07/25</td>
                                            <td>170 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">رحمان رحمانی</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>اراک</td>
                                            <td>63</td>
                                            <td>1390/01/04</td>
                                            <td>125 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">رحمان رضایی</td>
                                            <td> هماهنگ کننده داده</td>
                                            <td>تهران</td>
                                            <td>64</td>
                                            <td>1392/04/09</td>
                                            <td>138 هزار تومان</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">رضا شفق</td>
                                            <td> مدیر پشتیبانی</td>
                                            <td>قم</td>
                                            <td>22</td>
                                            <td>1388/03/03</td>
                                            <td>342 هزار تومان</td>
                                        </tr>
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
