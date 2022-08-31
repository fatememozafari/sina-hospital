<!doctype html>
<html class="no-js " lang="en">

<head>
@include('front.layout.partials.head')

</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/logo.svg')}}" width="48" height="48" alt="قطب نما"></div>
        <p>لطفا صبر کنید ...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
@include('front.layout.partials.header')
<!--Top Bar -->
<!-- Right Sidebar -->
@include('front.layout.partials.rightSidebar')
<!-- Left Sidebar -->
@include('front.layout.partials.leftSidebar')

<!-- Chat-launcher -->


<!-- Main Content -->
@yield('content')
<!-- Jquery Core Js -->
@include('front.layout.partials.script')

</body>

</html>
