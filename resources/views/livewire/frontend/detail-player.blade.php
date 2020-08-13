@section('title')
    Detail Pemain
@endsection
@section('css')
    <style>
        .table td{
            border-top: 1px solid #abab1b;
        }
        .table{
            border: 1px solid yellow;
        }
        .table-bg-yellow{
            background: yellow;
            color: #00132d;
            text-align: center;
            font-weight: 900;
            width: 30%;
        }
    </style>
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('storage/'.$player->club->cover)}}); background-position: center center; padding: 100px 0 60px;">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="logo-team">
                            <img src="{{ asset('storage/'.$player->club->logo) }}" class="img-fluid img-club" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="title-team">
                            <b id="big-title">{{ $player->club->name }}</b><br><br>
                            <strong class="text-white">Jenjang {{ $player->club->age_level }}</strong>
                            <p class="text-white">{{ $player->club->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="projects-section" style="background-color: #010914;">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="sec-title wow fadeInUp" data-wow-delay="400ms" style="margin-bottom:32px;">
                        <span class="title" style="margin:0;">DATA PRIBADI {{ $player->name }}</span>
                    </div>
                    <div>
                        <table class="table">
                            <tr>
                                <td class="table-bg-yellow">ASAL SEKOLAH</td>
                                <td class="text-white">{{ $player->from_school }}</td>
                            </tr>
                            <tr>
                                <td class="table-bg-yellow">NEGARA</td>
                                <td class="text-white">Indonesia</td>
                            </tr>
                            <tr>
                                <td class="table-bg-yellow">NO TELP</td>
                                <td class="text-white">{{ $player->phone }}</td>
                            </tr>
                            <tr>
                                <td class="table-bg-yellow">ALAMAT</td>
                                <td class="text-white">{{ $player->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card-item-club">
                        <div class="cover-item-club">
                            <img src="{{ asset('storage/'.$player->photo) }}" class="img-fluid img-cover" alt="">
                            <div class="logo-club">
                                <h1 class="img-club text-center" id="number-player">{{ $player->back_number }}</h1>
                            </div>
                        </div>
                        <div class="mt-5 mb-3 text-white">
                            <div class="caption-player">
                                <h2 class="text-center">{{ $player->name }}</h2>
                                <table class="table-player text-left  mt-4">
                                    <tr>
                                        <td>Posisi</td>
                                        <td>{{ $player->position }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ $player->date_born }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Gol</td>
                                        <td>{{ $player->goal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Assist</td>
                                        <td>{{ $player->assist }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@section('js')
    <script>
    </script>
@endsection