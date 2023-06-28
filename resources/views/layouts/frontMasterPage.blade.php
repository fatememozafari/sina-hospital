<!doctype html>
<html class="no-js " lang="en">

<head>
    @include('layouts.partials.front.head')
</head>

<style>
    a{
     color: black;
    }
</style>
<body class="theme-cyan container" style="background-color: #eaeaea">
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
@include('layouts.partials.front.header')
<!--Top Bar -->

@include('layouts.partials.front.leftSidebar')

<!-- Chat-launcher -->


<!-- Main Content -->
@yield('content')
<!-- Jquery Core Js -->
@include('layouts.partials.front.script')
@yield('script')
</body>

</html>
