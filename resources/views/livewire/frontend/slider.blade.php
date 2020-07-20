@section('css')
    <style>
    </style>
@endsection
<div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/frontend/images/main-slider/1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ini Pertama</h5>
                    <p>Iya ini memang pertama</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/frontend/images/main-slider/2.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ini Kedua</h5>
                    <p>Ini bukan yang pertama lagi atu</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/frontend/images/main-slider/4.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ini Ketiga</h5>
                    <p>Iya ini memang yang ketiga bro, jangan ngeyel</p>
                </div>
            </div>
            
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
