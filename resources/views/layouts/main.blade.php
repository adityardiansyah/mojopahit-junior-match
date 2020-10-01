
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="@yield('meta_keywords')">
<meta name="description" content="@yield('meta_description')">

<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('meta_description')" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="majapahitjuniormatch.com" />
<meta property="og:image" content="https://majapahitjuniormatch.com/storage/image_about/Xy1i4bIejtIEyYg98bKPs9ceMf4D04th3OXJMdFQ.png" />

<meta name="robots" content="index, follow" />
<meta property="language" content="Indonesia" />
<meta property="webcrawlers" content="all" />
<meta property="rating" content="general" />
<meta property="spiders" content="all" />
<link rel="canonical" href="{{url()->current()}}"/>
<title>@yield('title') | Mojopahit Junior Match</title>

<!-- Stylesheets -->

<link href="{{asset('public/assets/frontend/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/plugins/revolution/css/settings.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('public/assets/frontend/plugins/revolution/css/layers.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('public/assets/frontend/plugins/revolution/css/navigation.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('public/assets/frontend/css/style.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/css/responsive.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/css/custom.css')}} " rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}" />


<!-- Scripts -->
<script src="{{ asset('public/js/app.js') }}" defer></script>
<style>

</style>
@yield('css')
<livewire:styles>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
  <livewire:frontend.header></livewire:frontend.header>
  @yield('content')
  <livewire:frontend.footer></livewire:frontend.footer>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->
<livewire:scripts>
<script src="{{asset('public/assets/frontend/js/jquery.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/popper.min.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/bootstrap.min.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/jquery-ui.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/jquery.fancybox.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/owl.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/wow.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/isotope.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/appear.js')}} "></script>
<script src="{{asset('public/assets/frontend/js/script.js')}} "></script>
@yield('js')
<script>
    if($('.mobile-menu').length){
        var mobileMenuContent = $('.main-header .nav-outer .main-menu .navigation').html();
        $('.mobile-menu').append('<div class="close-btn"><span class="icon flaticon-cancel-music"></span></div>');
        $('.mobile-menu .navigation').append(mobileMenuContent);
        $('.sticky-header .navigation').append(mobileMenuContent);
        $('.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
        //Dropdown Button
        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
            $(this).prev('ul').slideToggle(500);
        });
        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });

    }
    $('.dropdown-toggle').dropdown()
</script>
</body>

</html>
