<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.jpg')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    @yield('link')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper-page">
       @yield('content')
       @yield('extra')
    </div>

    <!-- jQuery  -->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:48 GMT -->

</html>
