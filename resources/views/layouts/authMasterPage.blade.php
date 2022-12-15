<!doctype html>
<html class="no-js " lang="en">

<head>
  @include('layouts.partials.auth.head')
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
@include('layouts.partials.auth.header')
<!-- End Navbar -->

<div class="page-header">
    <div class="page-header-image" style="background-image:url({{asset('extrasection/assets/images/login.jpg')}})"></div>
    @yield('content')
    @include('layouts.partials.auth.footer')

</div>
<!-- Jquery Core Js -->
@include('layouts.partials.auth.script')

</body>

</html>
