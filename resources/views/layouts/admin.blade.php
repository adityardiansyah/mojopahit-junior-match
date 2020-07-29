<!DOCTYPE html>

<html lang="en">
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8" />
    <title>Administrator - @yield('title')</title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <link href="{{ asset('public/assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/plugins/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
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
    <link href="{{ asset('public/assets/plugins/general/summernote/dist/summernote.css') }}" charset="utf-8" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <style>
        .toast .toast-message{
            font-size: 1.1rem;
        }
        .toast-info{
            background: #0abb87;
        }
        .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__heading .kt-menu__link-icon, .kt-aside-menu .kt-menu__nav > .kt-menu__item > .kt-menu__link .kt-menu__link-icon{
            color: #abacca;
        }
        .kt-form{
            width: 60%;
            margin-left: auto;
            margin-right: auto;;
        }
        .select2-container{
            width: 100%!important;
        }
        .kt-timeline-v2 .kt-timeline-v2__items .kt-timeline-v2__item .kt-timeline-v2__item-time{
            font-size: 1rem;
        }
        input.datepicker{
            width: 100%;
        }
        @media (max-width: 1024px){
            .kt-form{
                width: 100%;
            }
        }
        #tooltip {
            background-color: #333;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
        }
    </style>

    @stack('styles')
    
    <livewire:styles>

</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="">
            <img alt="Logo" src="{{ asset('images/logo.png') }}" style="height:30px;">
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>

<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="">
                        <img alt="Logo" src="{{ asset('images/logo.png') }}" class="img-fluid">
                    </a>
                </div>
                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                </g>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                    <ul class="kt-menu__nav ">
                        @php
                            $menu_active = '#';
                            if(Session::has('menu_active')){
                                $menu_active = Session::get('menu_active');
                            }
                        @endphp
                        {{-- @if($menu['url'] != '#')
                            <li class="kt-menu__item @if($menu_active == $menu['url']) kt-menu__item--here @endif" aria-haspopup="true"><a href="{{ url($menu['url']) }}" class="kt-menu__link "><i class="kt-menu__link-icon {{ $menu['icon'] }}"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
                        @else
                            <li class="kt-menu__item kt-menu__item--submenu @if($menu_active == search_sub_menu($menu['sub_menu'],$menu_active)) kt-menu__item--open kt-menu__item--here @endif " aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="javascript:void(0)" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon {{ $menu['icon'] }}"></i><span class="kt-menu__link-text">{{ $menu['caption'] }}</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        @foreach($menu['sub_menu'] as $sub_menu)
                                            <li class="kt-menu__item @if($menu_active == $sub_menu['url']) kt-menu__item--active @endif" aria-haspopup="true"><a href="{{ url($sub_menu['url']) }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">{{ $sub_menu['caption'] }}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endif --}}
                            <li class="kt-menu__item @if($menu_active == 'dashboard') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-home-1"></i><span class="kt-menu__link-text">Dashboard</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'slider') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin/slider') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Slider</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'galeri') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin/galeri') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-folder-1"></i><span class="kt-menu__link-text">Galeri</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'video') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin/video') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-video"></i><span class="kt-menu__link-text">Video</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'clublist') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin/list-club') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-list-1"></i><span class="kt-menu__link-text">List Club</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'players') kt-menu__item--here @endif" aria-haspopup="true">
                                <a href="{{ url('/admin/players') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Pemain</span></a>
                            </li>
                            <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-trophy"></i><span class="kt-menu__link-text">Kompetisi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item" aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Liga</span></a></li>
                                        <li class="kt-menu__item" aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cup</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'article') kt-menu__item--here @endif" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="{{ url('/admin/article') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-file-1"></i><span class="kt-menu__link-text">Artikel</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'category') kt-menu__item--here @endif" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="{{ url('/admin/category') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-list"></i><span class="kt-menu__link-text">Kategori</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'about') kt-menu__item--here @endif" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="{{ url('/admin/page/about') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Tentang Kami</span></a>
                            </li>
                            <li class="kt-menu__item @if($menu_active == 'contact') kt-menu__item--here @endif" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="{{ url('/admin/page/contact') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-chat-2"></i><span class="kt-menu__link-text">Hubungi Kami</span></a>
                            </li>
                            <li class="kt-menu__item" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="/admin/users" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">User</span></a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " style="background-color: #5d78ff;">
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">

                    </div>
                </div>

                <div class="kt-header__topbar">
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-header__topbar-welcome kt-hidden-mobile text-white">Hi,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile text-white">{{ Auth::user()->name }}</span>
                                <img alt="Pic" src="{{ asset('images/user.png') }}" />
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">
                                <div class="kt-user-card__avatar">
                                    <img alt="Pic" src="{{ asset('images/user.png') }}" />
                                </div>
                                <div class="kt-user-card__name">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>

                            <div class="kt-notification">
                                <a href="" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">Profil</div>
                                        <div class="kt-notification__item-time">Ubah nama dan password</div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                @yield('content')
            </div>

            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer" style="background-color: #5d78ff;">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__copyright">
                    <div class="kt-footer__copyright text-white">
                        {{ date('Y') }}&nbsp;&copy;&nbsp;Majapahit Junior Match
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

@stack('modals')
<livewire:scripts>
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

<script src="{{ asset('public/assets/plugins/general/jquery/dist/jquery.js') }}"  type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/summernote/dist/summernote.js') }}" charset="utf-8" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/popper.js/dist/umd/popper.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/select2/dist/js/select2.full.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap/dist/js/bootstrap.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js-cookie/src/js.cookie.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/moment/min/moment.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/sticky-js/dist/sticky.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/wnumb/wNumb.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/jquery-form/dist/jquery.form.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/block-ui/jquery.blockUI.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/autosize/dist/autosize.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/toastr/build/toastr.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/sweetalert2/dist/sweetalert2.min.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>
<script src="{{ asset('public/assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js') }}" data-turbolinks-eval="true" type="text/javascript"></script>

{{-- <script src="{{ asset('assets/js/autoNumeric.js') }}" data-turbolinks-eval="true" type="text/javascript"></script> --}}
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
    @endif

    function deleteData(target){
        Swal.fire({
            title: 'Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            // console.log(result);
            
            if (result.value) {
                window.livewire.emit('delete',target);
                // $('#'+target).submit();
            }
        });
    }
    function format_date(nStr, separator = '-'){
        let dateArray = nStr.split('-');
        return dateArray[2] + separator + dateArray[1] + separator + dateArray[0];
    }
    function add_commas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }
    function remove_commas(nStr){
        nStr = nStr.replace(/\./g,'');
        return nStr;
    }
    // $('.select2').select2();
    // $('.datepicker').datepicker({
    //     autoclose:true,
    //     format:'dd-mm-yyyy',
    //     oritentation:"auto",
    //     useCurrent: false,
    // });
    // $('.kt-selectpicker').selectpicker();
            
    // $('.datepicker-month').datepicker({
    //     autoclose: true,
    //     format: "mm-yyyy",
    //     startView: "months",
    //     minViewMode: "months",
    // });
    // $('.timepicker').timepicker({
    //     showMeridian: false,
    //     showSeconds: true,
    //     icons: {
    //         up: 'fa fa-chevron-up',
    //         down: 'fa fa-chevron-down'
    //     }
    // });
    $('.table-responsive').on('show.bs.dropdown', function () {
        $('.table-responsive').css( "overflow", "inherit" );
        $('.xdsoft_autocomplete_dropdown').css( "overflow", "inherit!important" );
    });

    $('.table-responsive').on('hide.bs.dropdown', function () {
        $('.table-responsive').css( "overflow", "auto" );
        $('.xdsoft_autocomplete_dropdown').css( "overflow", "auto!important" );
    });

    
</script>

@stack('scripts')

</body>
</html>
