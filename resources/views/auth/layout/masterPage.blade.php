<!doctype html>
<html class="no-js " lang="en">

<head>
  @include('auth.layout.partials.head')
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
@include('auth.layout.partials.header')
<!-- End Navbar -->

<div class="page-header">
    <div class="page-header-image" style="background-image:url({{asset('extrasection/assets/images/login.jpg')}})"></div>
    @yield('content')
    @include('auth.layout.partials.footer')

</div>
<!-- Jquery Core Js -->
@include('auth.layout.partials.script')

</body>

</html>
