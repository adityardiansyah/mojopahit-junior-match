@section('title')
    Video
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Video</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Beranda</a></li>
                    <li>Video</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section Three -->
    <section class="projects-section-three" style="background-color: #010914;">
        <div class="auto-container">
            <div class="row">
                <!-- Portfolio Block -->
                @forelse ($video as $item)
                    <div class="project-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <iframe src="{{ $item->embed }}" class="img-fluid wow fadeInUp animated" style="width: 100%; height: 200px;" data-wow-delay="100ms" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="caption-box text-center">
                                @if ($item->team->name == 'Tidak Ada Team')
                                    <h4><a href="#">{{ $item->title }}</a></h4>    
                                @else
                                    <h4><a href="#">{{ $item->team->name }} VS {{ $item->team2->name }}</a></h4>    
                                @endif
                                <span class="category">{{ GlobalHelper::tgl_indo_not_munite($item->created_at) }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center">Video tidak ada</h1>
                @endforelse
            </div>
            {{ $video->links('livewire.frontend.custom-pagination-links-view') }}
        </div>
    </section>
    <!-- Projects Section Three -->

</div>
