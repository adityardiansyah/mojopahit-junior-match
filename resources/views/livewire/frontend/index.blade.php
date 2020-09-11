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
                                                    <figure class="image"><a
                                                            href="{{ url('artikel/'.$item->slug) }}"><img
                                                                src="{{ asset('storage/'.$item->image) }}" alt=""></a>
                                                    </figure>
                                                </div>
                                                <div class="lower-content">
                                                    <ul class="post-info">
                                                        <li><span class="material-icons">event</span>
                                                            {{ GlobalHelper::tgl_indo($item->published_at) }}</li>
                                                    </ul>
                                                    <h5><a
                                                            href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a>
                                                    </h5>

                                                    <div class="link-box"><a
                                                            href="{{ url('artikel/'.$item->slug) }}">Read more <i
                                                                class="la la-long-arrow-right"></i></a></div>
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
                                            <div class="project-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <iframe src="{{ $item->embed }}" class="img-fluid wow fadeInUp animated" style="width: 100%; height: 200px;" data-wow-delay="100ms" frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                    <div class="caption-box text-center">
                                                        @if ($item->team->name == 'Tidak Ada Team')
                                                            <h4><a href="#" style="font-size: 10pt;">{{ $item->title }}</a></h4>    
                                                        @else
                                                            <h4><a href="#">{{ $item->team->name }} VS {{ $item->team2->name }}</a></h4>    
                                                        @endif
                                                        <span class="category">{{ GlobalHelper::tgl_indo_not_munite($item->created_at) }}</span>
                                                    </div>
                                                </div>
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
                                        @if(!empty(json_decode($item->image, TRUE)[0]))
                                        <div class="project-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image wow fadeIn">
                                                        <a href="{{ asset('storage/'.json_decode($item->image, TRUE)[0]) }}"
                                                            class="lightbox-image" data-fancybox="{{json_decode($item->image, TRUE)[0]}}">
                                                            <img src="{{ asset('storage/'.json_decode($item->image, TRUE)[0]) }}"
                                                                data-wow-delay="100ms" class="img-fluid video wow fadeInUp">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="caption-box text-center">
                                                    <h5 class=""><a href="javascript:;" style="cursor:default;">{{ $item->title }}</a></h5>
                                                    @foreach (json_decode($item->image, TRUE) as $value)
                                                    @if ($value != json_decode($item->image, TRUE)[0])
                                                        <figure class="image wow fadeIn">
                                                            <a href="{{ asset('storage/'.$value) }}" class="lightbox-image"
                                                                data-fancybox="{{json_decode($item->image, TRUE)[0]}}">
                                                            </a>
                                                        </figure>
                                                    @endif
                                                    @endforeach
                                                    <span class="category">{{ GlobalHelper::tgl_indo_not_munite($item->created_at) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
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
                                        <li class="wow fadeInUp" data-wow-delay="200ms"><a
                                                href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a></li>
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
                                    <img src="{{ asset('storage/'.$v_poster)}}" class="img-fluid wow fadeInUp"
                                        data-wow-delay="300ms" alt="">
                                    <br><br>
                                    <iframe src="{{ $landing_video }}" class="img-fluid video wow fadeInUp"
                                        data-wow-delay="400ms" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
