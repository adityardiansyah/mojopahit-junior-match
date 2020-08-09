@section('title')
    List Club
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>List Club</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Beranda</a></li>
                    <li>List Club</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="about-section-two">
        <div class="auto-container">
            <form action="" method="POST">
            <div class="row mb-4">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <select name="filter" id="filter" class="form-control">
                                <option disabled selected="selected">Filter Tahun Season</option>
                            @foreach ($get_tahun as $item)
                                <option value="{{ $item->tahun }}">{{ $item->tahun }}</option>                                
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <input type="text" name="search" wire:model="search" id="search" class="form-control" placeholder="Cari team disini...">
                    </div>
                </div>
            </form>
            <div class="row">
                @forelse ($club as $item)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card-item-club text-center">
                            <div class="cover-item-club">
                                <img src="{{ asset('storage/'.$item->cover) }}" class="img-fluid img-cover" alt="">
                                <div class="logo-club">
                                    <img src="{{ asset('storage/'.$item->logo) }}" class="img-fluid img-club" alt="">
                                </div>
                            </div>
                            <div class="mt-5 mb-3 text-white">
                                <h5 class="p-0 m-0"><b>{{ $item->name }}</b></h5>
                                <p class="text-white">Jenjang {{ $item->age_level }}</p>
                                <br>
                                <a href="{{ url('detail-club/'.$item->id) }}" class="hover-yellow">Profil Team <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center m-auto">Tidak ada Team</h1>
                @endforelse
            </div>
        </div>
    </section>
</div>
@section('js')
    <script>
        $('#filter').on('change', function (e) {
            @this.set('filter', e.target.value);
        });
    </script>
@endsection