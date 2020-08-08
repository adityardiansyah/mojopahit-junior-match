<div>
    <header class="main-header">
    <div class="header-top">
      <div class="auto-container clearfix">
          <div class="top-right clearfix">
              <ul class="info-list">
                  <li class="title"><strong>Butuh bantuan? Hubungi kami :</strong></li>
                  <li><span class="material-icons">phone</span><a href="tel:{{ $phone }}">{{ $phone }}</a></li>
                  <li><span class="material-icons">email</span><a href="mailto:{{ $email }}">{{ $email }}</a></li>
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
                              <strong>{{ $phone }}</strong>
                                <span class="info">{{ $email }}</span>
                          </div>
                      </div>

                      <!--Info Box-->
                      <div class="info-box">
                          <div class="inner">
                              <div class="icon"><span class="la la-home"></span></div>
                              <strong>{{ $address }}</strong>
                            <span class="info">{{ $address2 }}</span>
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
                                <li><a href="{{ $facebook }}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{ $youtube }}"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="{{ $instagram }}"><span class="fab fa-instagram"></span></a></li>
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
</div>
