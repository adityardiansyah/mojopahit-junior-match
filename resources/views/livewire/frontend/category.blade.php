@section('title')
    Kategori
@endsection
@section('meta_keywords','Kategori majapahit junior match')
@section('meta_description','Kategori Majapahit Junior Match')
@section('css')
    <style>
        .text p{
            color:#c1c1c1!important;
        }
    </style>
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Kategori</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Beranda</a></li>
                    <li>Kategori</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- News Section -->
    <section class="news-section blog-grid" style="background-color: #010914;">
        <div class="auto-container">

            <div class="row">
                <!-- News Block -->
                @forelse ($blog as $item)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="{{ asset('storage/'.$item->image) }}" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><span class="material-icons">event</span> {{ GlobalHelper::tgl_indo($item->published_at) }}</li>
                                    {{-- <li><span class="material-icons">textsms</span> Comment: 2</li> --}}
                                </ul>
                                <h5><a href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a></h5>
                                <div class="text text-justify" style="color:#c1c1c1!important;">{!! GlobalHelper::limit_word($item->description) !!}</div>
                                <div class="link-box"><a href="{{ url('artikel/'.$item->slug) }}">Read more <i class="la la-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2 class="text-center">Tidak ada artikel</h2>
                @endforelse
            </div>
            {{ $blog->links('livewire.frontend.custom-pagination-links-view') }}
        </div>
    </section>
    <!--End News Section -->
</div>
