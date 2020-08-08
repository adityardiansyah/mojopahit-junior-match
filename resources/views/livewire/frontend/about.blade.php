@section('title')
    Tentang Kami
@endsection
<style>
    .content-column{
        background: #fff;
        padding: 68px 40px;
    }
    .about-title{
        padding: 8px 20px;
        background: yellow;
        font-size: 14pt;
        color: #000;
        font-weight: 700;
    }
    .bg-blue-young{
        background: #00132D !important;
        position: relative;
        padding: 50px 0 50px;
    }
    .about-section-two{
        padding: 50px 0 50px;
    }
</style>
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>TENTANG KAMI</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Beranda</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- About Section -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <span class="about-title">
                        Tentang
                    </span>
                    <br>
                    <h1 style="color:#000; font-weight: 600; margin-top: 18px;">Majapahit Junior Match</h1>
                    {!! $description !!}
                </div>

                 <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12 p-0 wow fadeInUp" data-wow-delay="400ms">
                    <img src="{{ asset('images/logo.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue-young">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix">
                    <div>
                        <iframe style="height:500px; width:70%; display:block;" src="{{ $url_video }}" class="img-fluid m-auto wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
    </section>
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix">
                    <div>
                        <iframe style="height:500px; width:80%; display:block;" src="{{ $url_maps }}" class="img-fluid m-auto wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
</div>
