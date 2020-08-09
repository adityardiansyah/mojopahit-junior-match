@section('title')
    Detail Club
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('storage/'.$team->cover)}}); background-position: center center; padding: 100px 0 60px;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="logo-team">
                            <img src="{{ asset('storage/'.$team->logo) }}" class="img-fluid img-club" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="title-team">
                            <b id="big-title">{{ $team->name }}</b><br><br>
                            <strong class="text-white">Jenjang {{ $team->age_level }}</strong>
                            <p class="text-white">{{ $team->address }}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div id="card-pelatih">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 text-right mt-4">
                                    <b class="bg-yellow" class="">PELATIH</b>
                                    <br><br>
                                    <p class="text-white"><b>{{ $team->assistant_name }}</b></p>
                                    <p class="text-white">{{ $team->assistant_email }}</p>
                                    <p class="text-white">{{ $team->assistant_number }}</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="{{ asset('storage/'.$team->assistant_photo) }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                @forelse ($players as $item)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card-item-club text-center">
                            <div class="cover-item-club">
                                <img src="{{ asset('storage/'.$item->photo) }}" class="img-fluid img-cover" alt="">
                                <div class="logo-club">
                                    <h1 class="img-club" id="number-player">{{ $item->back_number }}</h1>
                                </div>
                            </div>
                            <div class="mt-5 mb-3 text-white">
                                <h5 class="p-0 m-0"><b>{{ $item->name }}</b></h5>
                                <p class="text-white">{{ $item->position }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center m-auto">Tidak ada pemain</h1>
                @endforelse
            </div>
        </div>
    </section>
</div>
@section('js')
    <script>
    </script>
@endsection