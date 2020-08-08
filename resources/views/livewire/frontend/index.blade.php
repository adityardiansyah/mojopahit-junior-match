@section('title')
    Beranda
@endsection
<div>
    <livewire:frontend.slider />
    <div style="background: #010914;">
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- History Column -->
                    <div class="content-side col-lg-9 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title wow fadeInUp" data-wow-delay="400ms" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Berita Terbaru</span>
                            </div>
    
                            <section class="news-section blog-grid" style="padding: 0px;">
                                <div class="auto-container">

                                    <div class="row">
                                        <!-- News Block -->
                                        @forelse ($artikel as $key => $item)
                                            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                    <figure class="image"><a href="{{ url('artikel/'.$item->slug) }}"><img src="{{ asset('storage/'.$item->image) }}" alt=""></a></figure>
                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info">
                                                            <li><span class="material-icons">event</span> {{ GlobalHelper::tgl_indo($item->published_at) }}</li>
                                                        </ul>
                                                        <h5><a href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a></h5>
                                                        
                                                        <div class="link-box"><a href="{{ url('artikel/'.$item->slug) }}">Read more <i class="la la-long-arrow-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <h1 class="text-center">Tidak ada Artikel</h1>
                                        @endforelse
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 wow fadeInUp">
                                            <div style="background: #00132D;">
                                                <img src="{{ asset('images/banner.png')}}" class="img-fluid" alt="">
                                                {{-- <p style="text-align: center; line-height:74px;">Iklan</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br><br>
                            <div class="sec-title wow fadeInUp" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Video Kompetisi Terbaru</span>
                            </div>
                            <section class="news-section" style="padding: 0px;">
                                <div class="auto-container">
                                    <div class="row">
                                        @forelse ($video as $item)
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <iframe src="{{ $item->embed }}" class="img-fluid video wow fadeInUp" data-wow-delay="100ms" frameborder="0"></iframe>
                                            </div>
                                        @empty
                                            <div class="col-md-12 text-center">
                                                <h1>Video tidak ada</h1>    
                                            </div>                                            
                                        @endforelse
                                    </div>
                                </div>
                            </section>
                            <br><br>
                            <div class="sec-title wow fadeInUp" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Galeri Majapahit Junior Match</span>
                            </div>
                            <section class="news-section" style="padding: 0px;">
                                <div class="auto-container">
                                    <div class="row">
                                        @forelse ($galeri as $item)
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <img src="{{ asset('storage/'.$item->image)}}" class="img-fluid video wow fadeInUp" data-wow-delay="100ms" alt="">
                                            </div>
                                        @empty
                                            <div class="col-md-12 text-center">
                                                <h1>Galeri tidak ada</h1>    
                                            </div>   
                                        @endforelse
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
    
                    <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <!-- Category Widget -->
                            <div class="sidebar-widget categories">
                                <div class="sec-title wow fadeInUp" style="margin-bottom:32px;">
                                    <span class="title" style="margin:0;">Artikel Trending</span>
                                </div>
                                <div class="widget-content">
                                    <!-- Blog Category -->
                                    <ul class="blog-categories-white">
                                        @forelse ($trending as $key => $item)
                                            <li class="wow fadeInUp" data-wow-delay="200ms"><a href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a></li>
                                        @empty
                                            <li class="text-center">Tidak ada Artikel</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            {{-- https://majapahitjuniormatch.com/wp-content/uploads/2020/06/JULI-FIX-IG-FLAYER1-820x1024.png --}}
                            <div class="sidebar-widget categories">
                                <div class="sec-title wow fadeInUp" data-wow-delay="200ms" style="margin-bottom:32px;">
                                    <span class="title" style="margin:0;">Info Update</span>
                                </div>
                                <div class="widget-content">
                                    <!-- Blog Category -->
                                    <img src="{{ asset('images/poster.png')}}" class="img-fluid wow fadeInUp" data-wow-delay="300ms" alt="">
                                    <br><br>
                                    <iframe src="https://www.youtube.com/embed/juoCHaHmxJA?feature=oembed&start&end&wmode=opaque&loop=0&controls=1&mute=0&rel=0&modestbranding=0" class="img-fluid video wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
