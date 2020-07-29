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
                    <p style="text-align: justify;">
                        Didirikan oleh para pegiat  sekolah sepak bola GEN-B yang bekerjasama dengan manajement bisnis profesional. Sekolah sepak bola GEN-B berdiri pada tahun 2000 di Mojokerto. Dengan Coach yang sangat terlatih dan sudah mendapatkan lisensi dari PSSI. GEN-B sudah menghasilkan banyak prestasi, baik lokal maupun regional. Seiring berjalannya waktu, kendala yang dialami GEN-B adalah kurangnya wadah kompetisidi Mojokerto atau Jawa Timur pada umumnya. Sehingga perkembangan sekolah  sepak bola sendiri menjadi kurang maksimal.
                    </p><br>
                    <p style="text-align: justify;">
                        Sehingga pada akhir Tahun 2019 di putuskan untuk membentuk Liga Juara Junior Indonesia, dibawah naungan PT. MOJOPAHIT JUNIOR MATCH dengan fasilitas lapangan permanen milik sendiry yang akan menjadi wadah bagi sekolah sekolah sepak bola lokal untuk mengadakan kompetisi, Liga sepak bola junior. Tidak hanya itu , juga mengkoordinasi kompetisi sepak bola junior antar sekolah, baik lokal maupun regional.
                    </p>
                </div>

                 <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12 p-0 wow fadeInUp" data-wow-delay="400ms">
                    <img src="https://majapahitjuniormatch.com/wp-content/uploads/2020/06/LOGO.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue-young">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix">
                    <div>
                        <iframe style="height:500px; width:70%; display:block;" src="https://www.youtube.com/embed/juoCHaHmxJA?feature=oembed&start&end&wmode=opaque&loop=0&controls=1&mute=0&rel=0&modestbranding=0" class="img-fluid m-auto wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
    </section>
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix">
                    <div>
                        <iframe style="height:500px; width:80%; display:block;" src="https://maps.google.com/maps?q=majapahit%20junior%20match&t=m&z=15&output=embed&iwloc=near" class="img-fluid m-auto wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
</div>
