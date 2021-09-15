<!DOCTYPE html>
<html dir="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>لوحة التحكم</title>
    <link rel="apple-touch-icon" href="{{asset('dashboard_files/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard_files/images/ico/favicon.ico')}}">
    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/vendors/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/font-awesome-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/colors.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/rtl/style-rtl.css')}}">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>

    <style>
        .mr-2{
            margin-right: 5px;
        }

        .loader {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #367FA9;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 1s linear infinite; /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>


    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

    {{--<!-- iCheck -->--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/icheck/all.css') }}">




</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">




                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ auth()->user()->name}}</span></div><span><img class="round" src="{{asset('dashboard/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                        </a>

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ auth()->user()->name}}</span></div><span><img class="round" src="{{asset('dashboard_files/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- END: Header-->
   @include('dashboard.layouts._aside')

    @yield('content')

    @include('dashboard.partials._session')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('dashboard_files/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script> -->
    <!-- <script src="../../../app-assets/vendors/js/extensions/tether.min.js"></script> -->
    <!-- <script src="../../../app-assets/vendors/js/extensions/shepherd.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('dashboard_files/js/app-menu.js')}}"></script>
    <script src="{{asset('dashboard_files/js/app.js')}}"></script>
    <script src="{{asset('dashboard_files/js/components.js')}}"></script>
    {{--custom js--}}
    <script src="{{asset('dashboard_files/js/custom/image_preview.js')}}"></script>
    <script src="{{asset('dashboard_files/js/custom/order.js')}}"></script>
    {{--ckeditor standard--}}
    <script src="{{asset('dashboard_files/plugins/ckeditor/ckeditor.js')}}"></script>
    {{--jquery number--}}
    <script src="{{ asset('dashboard_files/js/jquery.number.min.js') }}"></script>
    {{--print this--}}
    <script src="{{ asset('dashboard_files/js/printThis.js') }}"></script>

    <script>
        $(document).ready(function () {

            //delete
            $('.delete').click(function (e) {

                var that = $(this)

                e.preventDefault();

                var n = new Noty({
                    text: "هل متأكد من الحذف ؟",
                    type: "warning",
                    killer: true,
                    buttons: [
                        Noty.button("نعم", 'btn btn-success mr-2', function () {
                            that.closest('form').submit();
                        }),

                        Noty.button("لا", 'btn btn-primary mr-2', function () {
                            n.close();
                        })
                    ]
                });

                n.show();

            });//end of delete




        });//end of ready

    </script>
    @stack('scripts')
</body>
<!-- END: Body-->

</html>
