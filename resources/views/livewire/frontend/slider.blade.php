@section('css')
    <style>
        .gradient{
            height: 400px;
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            background: linear-gradient(rgba(255, 255, 255, 0), #010914);
            /* Standard syntax */
            
            background: -webkit-linear-gradient(rgba(255, 255, 255, 0), #010914);
            /* For Safari 5.1 to 6.0 */
            
            background: -o-linear-gradient(rgba(255, 255, 255, 0), #010914);
            /* For Opera 11.1 to 12.0 */
            
            background: -moz-linear-gradient(rgba(255, 255, 255, 0), #010914);
        }
        .carousel-indicators{
            bottom: 120px;
            z-index: 20;
        }
        .carousel{
            top: 0;
            height: 700px;
            overflow: hidden;
        }
        .slider-caption{
            position: absolute;
            top: 50px;
            color: #fff;
            z-index: 20;
        }
        .slider-h1{
            font-size: 55pt;
            font-weight: 900;
            letter-spacing: 8px;
        }
        .slider-h2{
            font-size: 35pt;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .slider-btn{
            background: yellow;
            padding: 14px 44px;
            border-radius: 8px;
            font-weight: 700;
            margin-top: 12px;
        }
        .carousel-control-prev{
            z-index: 20;
        }
        .carousel-control-next{
            z-index: 20;
        }
        .slider-btn-info{
            background: transparent;
            padding: 30px 66px;
            border-radius: 8px;
            font-weight: 700;
            margin-top: 12px;
            border: 2px solid yellow;
            color: yellow;
            font-size: 20pt;
            position: relative;
            top: 100px;
            right: -180px;
        }
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
                <img class="d-block w-100" src="{{ asset('images/banner1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/banner2.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/banner3.jpg')}}" alt="First slide">
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
        <div class="gradient">
            <section style="width: 100%;">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-caption wow fadeInUp" data-wow-delay="400ms">
                                <h1 class="slider-h1">MAJAPAHIT</h1>
                                <h2 class="slider-h2">INFO & UPDATE</h2>
                                <button class="slider-btn">SELENGKAPNYA</button>
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
    </div>
    {{-- <img src="{{ asset('assets/frontend/images/main-slider/1.jpg') }}" alt="Image" data-bgposition="center center" data-no-retina> --}}
</div>
