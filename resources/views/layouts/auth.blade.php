<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8" />
    <title>Majapahit Junior Match</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <link href="{{ asset('public/assets/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/plugins/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/plugins/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/plugins/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}" />

    <style>
        .toast .toast-message{
            font-size: 1.1rem;
        }
        .kt-login.kt-login--v1 .kt-login__aside{
            width: 400px;
        }
        .kt-login__body{

        }
        .kt-login__form{
            margin-left: auto;
            margin-right: 2rem;
        }
        .kt-login.kt-login--v1 .kt-login__wrapper{
            background: url("{{ asset('public/images/bg-5.jpg') }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        @media (max-width: 1024px){
            .kt-login.kt-login--v1 .kt-login__aside {
                display: none!important;
            }
            .kt-login.kt-login--v1 .kt-login__wrapper{
                background: url("{{ asset('public/images/bg-5.jpg') }}") no-repeat;
            }
            .kt-login__form{
                margin-left: 2rem;
                margin-right: 2rem;
            }
        }
    </style>
    @stack('styles')
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper p-0">
                <div class="kt-login__body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<script src="{{ asset('public/assets/plugins/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/pages/custom/login/login-1.js') }}" type="text/javascript"></script>
@stack('scripts')
<script>
    @if(Session::has('message'))
        toastr.options.closeButton = true;
        toastr.options.timeOut = 0;
        toastr.options.extendedTimeOut = 0;
        @php
            $message = Session::get('message');
        @endphp
        @if($message['type'] == 'success')
            toastr.info("{{ $message['content'] }}");
        @else
            toastr.error("{{ $message['content'] }}");
        @endif
        @php
            Session::forget('message');
        @endphp
    @endif

    $('.datepicker').datepicker({
        autoclose:true,
        format:'dd-mm-yyyy',
        oritentation:"auto",
        useCurrent: false,
    });
</script>
</body>
</html>
