@section('title')
    Galeri
@endsection
@section('css')
    <style type="text/css">
        .fancybox-next span {
        left: auto;
        right: 20px;
        }
        .fancybox-prev span {
        left: 20px;
        }
    </style>
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Galeri</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Beranda</a></li>
                    <li>Galeri</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section -->
    <section class="projects-section" style="background-color: #010914;">
        <div class="auto-container">
            <div class="sec-title text-center text-white">
                <h2 class="text-white">Galeri Kami</h2>
                <h4>Kenangan yang berharga untuk semuanya</h4>
            </div>
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">Semua Galeri</li>
                        <li class="filter" data-role="button" data-filter=".cup">Galeri Cup</li>
                        <li class="filter" data-role="button" data-filter=".league">Galeri League</li>
                        <li class="filter" data-role="button" data-filter=".lainnya">Lainnya</li>
                    </ul>                     
                </div>

                <div class="items-container row">
                    <!-- Portfolio Block -->
                    {{-- @forelse ($galeri as $item)
                        <div class="project-block all masonry-item {{ $item->category }} col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box owl-carousel owl-theme">
                                    <figure class="image wow fadeIn" rel="galeri"><a href="{{ asset('storage/'.$item->image) }}" class="lightbox-image" data-fancybox="team"><img src="{{ asset('storage/'.$item->image) }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center">Galeri tidak ada</h1>
                    @endforelse --}}
                    @forelse ($galeri as $item)
                        @if(!empty(json_decode($item->image, TRUE)[0]))
                        <div class="project-block-three all masonry-item {{ $item->category }} col-lg-4 col-md-6 col-sm-12">
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
                {{ $galeri->links('livewire.frontend.custom-pagination-links-view') }}
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

</div>