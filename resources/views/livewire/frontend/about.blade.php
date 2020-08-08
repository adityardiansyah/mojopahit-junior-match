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
                    <img src="{{ asset('storage/'.$image)}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue-young">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix text-center">
                    <div>
                        <iframe src="{{ $url_video }}" class="wow fadeInUp" data-wow-delay="400ms" frameborder="0" width="70%" height="500px"></iframe>
                    </div>
                </div>
            </div>
    </section>
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-auto clearfix text-center">
                    <div>
                        <iframe src="{{ $url_maps }}" class="wow fadeInUp" data-wow-delay="400ms" frameborder="0" width="80%" height="500px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section-two" style="border-top:1px solid #00132D;">
        <div class="container text-center">
            <h2 class="title-about">
                TEAM
            </h2>
            <h1 class="about-sub-title">PELAKSANA</h1>
            <div class="row mt-4">
                @forelse ($team as $item)
                    <div class="col-lg-4 col-md-4 col-sm-12" style="color:#fff;">
                        <img src="{{ asset('storage/'.$item->image)}}" alt="{{ $item->name }}" class="img-thumbnail">
                        <br>
                        <h5 class="mt-2">
                            <b>{{ $item->name }}</b>    
                        </h5>
                        <p style="color:#fff;">{{ $item->position }}</p>
                        <p style="color:#fff;">
                            <b>PT. MAJAPAHIT JUNIOR MATCH</b>
                        </p>
                        {{-- <div class="card">
                            <div class="card-body">
                            </div>
                        </div> --}}
                    </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>
    <!--End About Section -->
</div>
