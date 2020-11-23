@section('title')
    Hubungi Kami
@endsection
@section('meta_keywords','Hubungi Kami')
@section('meta_description','Hubungi Kami')
@section('css')
    <style>
        .contact-info-block{
            margin-bottom: 0px;
        }
    </style>
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Hubungi Kami</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href=""><i class="la la-home"></i>Beranda</a></li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section -->
    <section class="projects-section" style="background-color: #010914;">
        <div class="auto-container">
            <div class="row">
                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 mt-4 col-md-12" >
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="tel:{{ $phone }}">
                            <span class="icon la la-phone"></span>
                            <h4>Hubungi kami</h4>
                        </a>
                    </div>
                </div>

                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 mt-4 col-md-12">
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="mailto:{{ $email }}">
                            <span class="icon la la-envelope"></span>
                            <h4>Email</h4>
                        </a>
                    </div>
                </div>

                <!-- Contact Info BLock -->
                <div class="contact-info-block col-lg-4 mt-4 col-md-12">
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="https://api.whatsapp.com/send?phone={{ $whatsapp }}">
                            <span class="icon la la-whatsapp"></span>
                            <h4>Whatsapp</h4>
                        </a>
                    </div>
                </div>
                <div class="contact-info-block col-lg-4 mt-4 col-md-12">
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="{{ $instagram }}">
                            <span class="icon la la-instagram"></span>
                            <h4>Instagram</h4>
                        </a>
                    </div>
                </div>
                <div class="contact-info-block col-lg-4 mt-4 col-md-12">
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="{{ $facebook }}">
                            <span class="icon la la-facebook"></span>
                            <h4>Facebook</h4>
                        </a>
                    </div>
                </div>
                <div class="contact-info-block col-lg-4 mt-4 col-md-12">
                    <div style="background-color: #00132D; padding:32px;">
                        <a href="{{ $youtube }}">
                            <span class="icon la la-youtube"></span>
                            <h4>Youtube</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->
</div>