@section('css')
    <style>
        
    </style>
@endsection
<div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol> --}}
        <div class="carousel-inner">
            @foreach ($data as $key => $item)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}"">
                <img class="d-block w-100" src="{{ asset('storage/'.$item->image)}}" alt="">
                <div class="gradient">
                    <section style="width: 100%;">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slider-caption wow fadeInUp" data-wow-delay="400ms">
                                        <h1 class="slider-h1">{{ $item->title }}</h1>
                                        <h2 class="slider-h2">{{ $item->sub_title }}</h2>
                                        <a href="{{ $item->link }}"><button class="slider-btn">SELENGKAPNYA</button></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-caption wow fadeInUp" data-wow-delay="400ms">
                                        <button class="slider-btn-info">UPDATE KOMPETISI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- <img src="{{ asset('assets/frontend/images/main-slider/1.jpg') }}" alt="Image" data-bgposition="center center" data-no-retina> --}}
</div>
