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
                    @forelse ($galeri as $item)
                        <div class="project-block all masonry-item {{ $item->category }} col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box owl-carousel owl-theme">
                                    <figure class="image wow fadeIn" rel="galeri"><a href="{{ asset('storage/'.$item->image) }}" class="lightbox-image" data-fancybox="team"><img src="{{ asset('storage/'.$item->image) }}" alt=""></a></figure>
                                </div>
                                {{-- <div class="overlay-box">
                                    <div class="inner">
                                        <h5><a href="{{ asset('storage/'.$item->image) }}">{{ $item->title }}</a></h5>
                                        <div class="link-box"><a href="{{ asset('storage/'.$item->image) }}" class="view-project">lihat foto <i class="la la-long-arrow-right"></i></a></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center">Galeri tidak ada</h1>
                    @endforelse
                    
                </div>
                {{ $galeri->links('livewire.frontend.custom-pagination-links-view') }}
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

</div>