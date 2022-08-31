@extends('front.layout.masterPage')
@section('content')
<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>جزئیات بلاگ
                    <small>به قطب نما خوش آمدید</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-left">
                    <li class="breadcrumb-item float-right"><a href="index.html"><i class="zmdi zmdi-home"></i> قطب نما</a></li>
                    <li class="breadcrumb-item float-right"><a href="blog-dashboard.html">وبلاگ</a></li>
                    <li class="breadcrumb-item active float-right">جزئیات بلاگ</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>خبرنامه <strong>ایمیل</strong> <small> محصولات / اخبار ما را زودتر از دیگران دریافت کنید ، بیایید در تماس باشیم. </small></h2>
                    </div>
                    <div class="body widget newsletter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
