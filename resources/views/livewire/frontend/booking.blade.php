@section('title')
    Booking Lapangan
@endsection
@section('meta_keywords','Booking Lapangan')
@section('meta_description','Booking Lapangan')
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Booking Lapangan</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href=""><i class="la la-home"></i>Beranda</a></li>
                    <li>Booking Lapangan</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="projects-section" style="background-color: #010914; padding-top:32px;">
        <div class="auto-container">
            @if ($errors->any())
                <div class="alert alert-danger alert-bold" role="alert">
                    <div class="alert-text">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div id="alert">
                @if(session()->has('message'))
                @php
                    $message = Session::get('message');
                @endphp
                    @if ($message['type'] == 'success')
                        <div class="alert alert-success">
                            <h5>Booking Berhasil!</h5>
                            <p>Segera konfimasi admin di nomor dibawah ini dan transfer ke rekening dibawah ini dan kirim bukti transfer</p>
                            <p>
                                <b>Nomor Telepon / Whatsapp : </b> <span><a href="tel:085850644757" style="color:#010914; text-decoration: underline">085850644757 (admin)</a></span><br>
                                <b>Nomor Rekening : </b> <span>BCA 0507229992 - ATAS NAMA PT MAJAPAHIT JUNIOR MATCH </span>
                            </p>
                        </div>
                    @endif
                @endif
            </div>
            @if($showInfo)
            <div id="info-booking">
                <table class="table" style="overflow: scroll">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center text-white">List Booking Tanggal Tersebut</th>
                        </tr>
                        <tr class="text-white">
                            <th>Nama Booking</th>
                            <th>Tanggal Booking</th>
                            <th>Jam Booking</th>
                            <th>Lapangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($info as $item)
                        <tr>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ GlobalHelper::tgl_indo($item->date) }}
                            </td>
                            <td>
                                {{ date('h:i', strtotime($item->time_start)) }} - {{ date('h:i', strtotime($item->time_end)) }}
                            </td>
                            <td>
                                {{ $item->lapangan }}
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <b class=" text-white">Tidak ada Booking</b>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @endif
            <!-- Contact Form -->
            <div class="contact-form style-two">
                <div class="form-inner">
                    <!--Comment Form-->
                <form method="post" action="{{ route('booking')}}" id="contact-form" wire:submit.prevent="store">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" wire:model="name" placeholder="Nama Penyewa / SSB / Club" required name="name">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" wire:ignore>
                                <select wire:model="category" id="" name="category">
                                    <option value="SSB" selected>SSB</option>
                                    <option value="Club">Club</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" wire:model="phone" placeholder="Nomor Telepon / Whatsapp" required name="phone">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input wire:model="date" wire:change="info" required placeholder="Tanggal Booking" name="date" onfocus="(this.type='date')" id="date">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input placeholder="Mulai Jam Booking" onfocus="(this.type='time')" name="time_start" wire:model="time_start" required value="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input placeholder="Sampai Jam Booking" onfocus="(this.type='time')" name="time_end" wire:model="time_end" required value="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <select wire:model="lapangan" id="" name="lapangan">
                                    <option value="Lapangan 1">Lapangan 1</option>
                                    <option value="Lapangan 2">Lapangan 2</option>
                                    <option value="Full Lapangan">Full Lapangan</option>
                                </select>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-four" id="btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--End contact Form -->
        </div>
    </section>
</div>
@section('js')
    <script>
        $('#date').on('change', function(){
            $('html,body').animate({ scrollTop: $('#info-booking').offset().top }, 'slow');
        })
        $('#btn').on('click', function(){
            $('html,body').animate({ scrollTop: $('#alert').offset().top }, 'slow');
        })  
    </script>
@endsection