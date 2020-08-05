
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('title') | Mojopahit Junior Match</title>

<!-- Stylesheets -->

<link href="{{asset('public/assets/frontend/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/plugins/revolution/css/settings.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('public/assets/frontend/plugins/revolution/css/layers.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('public/assets/frontend/plugins/revolution/css/navigation.css')}} " rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('public/assets/frontend/css/style.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/css/responsive.css')}} " rel="stylesheet">
<link href="{{asset('public/assets/frontend/css/custom.css')}} " rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

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

  <header class="main-header">
    <div class="header-top">
      <div class="auto-container clearfix">
          <div class="top-right clearfix">
              <ul class="info-list">
                  <li class="title"><strong>Butuh bantuan? Hubungi kami :</strong></li>
                  <li><span class="material-icons">phone</span><a href="tel:001-845-28386">0857 0723 0447</a></li>
                  <li><span class="material-icons">email</span><a href="mailto:mojopahitjuniormatch@gmail.com">mojopahitjuniormatch@gmail.com</a></li>
              </ul>
          </div>
      </div>
    </div>
    <!-- Header Upper -->
      <div class="header-upper">
          <div class="inner-container">
              <div class="auto-container clearfix">
                  <!--Logo-->
                  <div class="logo-outer">
                    <div class="logo"><a href="/"><img src="{{ asset('images/logo.png')}}" class="img-fluid" style="height:50px;" alt="" title="Mojopahit Junior Match"></a></div>
                  </div>

                  <!--Info-->
                  <div class="info-outer clearfix">
                      <!--Info Box-->
                      <div class="info-box">
                          <div class="inner">
                              <div class="icon"><span class="la la-phone"></span></div>
                              <strong>0857 0723 0447</strong>
                              <span class="info">mojopahitjuniormatch@gmail.com</span>
                          </div>
                      </div>

                      <!--Info Box-->
                      <div class="info-box">
                          <div class="inner">
                              <div class="icon"><span class="la la-home"></span></div>
                              <strong>Jl. Ngumpak, RT.03/RW.01, Ngumpak, Jabon</strong>
                              <span class="info">Kec. Mojoanyar, Mojokerto, Jawa Timur 61364</span>
                          </div>
                      </div>

                      <!--Info Box-->
                      {{-- <div class="info-box btn-box">
                          <a href="contact.html" class="theme-btn btn-style-one">Get A Quote</a>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>
    <!--End Header Upper-->

    <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/')}}">Beranda</a></li>
                                <li><a href="{{ url('/tentang-kami')}}">Tentang Kami</a></li>
                                <li class="dropdown"><a href="#">Kompetisi</a>
                                    <ul>
                                        <li><a href="{{ url('/league')}}">League</a></li>
                                        <li><a href="{{ url('/cup')}}">Cup</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/club')}}">List Club</a></li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="{{ url('/blog')}}">Berita</a></li>
                                        <li><a href="{{ url('/video')}}">Video</a></li>
                                        <li><a href="{{ url('/galeri')}}">Galeri</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/hubungi-kami')}}">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-search-5"></span></button>
                                <ul class="dropdown-menu pull-right search-panel wow fadeInUp" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://t.commonsupport.xyz/industar/index.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="social-links">
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                <li><a href=""><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title="Mojopahit Junior Match"><img src="{{ asset('images/logo.png')}}" style="height: 50px;" alt="Mojopahit Junior Match" title="Mojopahit Junior Match"></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                             <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href=""><img src="{{asset('images/logo.png')}}" style="width:200px" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
  </header>
  @yield('content')
  <footer class="main-footer alternate">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <div class="big-column col-xl-4 col-lg-12 col-md-12">
                        <!--Footer Column-->
                        <div class="footer-column">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <div class="image wow fadeInUp" data-wow-delay="300ms"><a href=""><img src="{{asset('images/logo.png')}}" class="logos"  alt="" title=""></a></div>
                                </div>
                                <div class="widget-content">
                                <div class="text wow fadeInLeft" data-wow-delay="400ms">
                                    Kami memberikan nilai pada keunggulan, pelayanan dan kualitas kelas atas. 
                                    Dalam hal pelayanan yang akurat.
                                </div>
                                    <ul class="social-icon-one">
                                        <li class="wow fadeInUp" data-wow-delay="200ms"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li class="wow fadeInUp" data-wow-delay="300ms"><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        <li class="wow fadeInUp" data-wow-delay="400ms"><a href=""><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-xl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Informasi Kontak</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><i class="material-icons">place</i>Jl. Ngumpak, RT.03/RW.01, Ngumpak, Jabon</li>
                                            <li><i class="material-icons">phone</i> <a href="tel:0857 0723 0447">0857 0723 0447</a></li>
                                            <li><i class="material-icons">email</i> <a href="mailto:mojopahitjuniormatch@gmail.com">mojopahitjuniormatch@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Kompetisi Majapahit</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="services.html">League</a></li>
                                            <li><a href="services-2.html">Cup</a></li>
                                          {{-- @foreach ($service as $item)
                                            <li><a href="#">{{ $item->title }}</a></li>
                                          @endforeach --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Menu</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ url('/')}}">Beranda</a></li>
                                            <li><a href="{{ url('/tentang-kami')}}">Tentang Kami</a></li>
                                            <li><a href="contact.html">List Club</a></li>
                                            <li><a href="services.html">Berita</a></li>
                                            <li><a href="services-2.html">Video</a></li>
                                            <li><a href="services-2.html">Galeri</a></li>
                                            <li><a href="contact.html">Hubungi Kami</a></li>
                                          {{-- @foreach($list_menu->parent as $key => $value)
                                              <li><a href="{{url($value->url)}}">{{ $value->title }}</a></li>
                                          @endforeach --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">Copyright © {{ now()->year }} <a href="#">Mojopahit Junior Match</a>. All Right Reserved</div>
            </div> 
        </div>
        
    </footer>
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
