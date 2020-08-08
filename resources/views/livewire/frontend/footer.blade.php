<div>
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
                                        <li class="wow fadeInUp" data-wow-delay="200ms"><a href="{{ $facebook }}"><span class="fab fa-facebook-f"></span></a></li>
                                        <li class="wow fadeInUp" data-wow-delay="300ms"><a href="{{ $youtube }}"><span class="fab fa-youtube"></span></a></li>
                                        <li class="wow fadeInUp" data-wow-delay="400ms"><a href="{{ $instagram }}"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="big-column col-xl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="footer-column col-lg-4 col-md-4 col-sm-12 offset-md-4">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Informasi Kontak</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><i class="material-icons">place</i>{{ $address }}</li>
                                            <li><i class="material-icons">phone</i> <a href="tel:{{ $phone }}">{{ $phone }}</a></li>
                                            <li><i class="material-icons">email</i> <a href="mailto:{{ $email }}">{{ $email }}</a></li>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Menu</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="{{ url('/')}}">Beranda</a></li>
                                            <li><a href="{{ url('/tentang-kami')}}">Tentang Kami</a></li>
                                            <li><a href="{{ url('/club')}}">List Club</a></li>
                                            <li><a href="{{ url('/blog')}}">Berita</a></li>
                                            <li><a href="{{ url('/video')}}">Video</a></li>
                                            <li><a href="{{ url('/galeri')}}">Galeri</a></li>
                                            <li><a href="{{ url('/contact')}}">Hubungi Kami</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
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
