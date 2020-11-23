@section('title')
    Edit Booking 
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Formulir Edit Booking</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.article') }}" class="btn btn-default btn-sm btn-bold">Kembali</a>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="update">
        <input type="hidden" wire:model="booking_id" value="{{ $booking_id }}">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        {{-- <div class="kt-heading kt-heading--md">Tambah Booking</div> --}}
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
                        <div class="modal-body">
                            <table class="mt-3">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Nama Penyewa</label>
                                        <input type="text" wire:model="name" placeholder="Nama Penyewa / SSB / Club" required class="form-control"> 
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Kategori</label>
                                        <select wire:model="category" id="" class="form-control">
                                            <option value="SSB" selected>SSB</option>
                                            <option value="Club">Club</option>
                                            <option value="Umum">Umum</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Nomor Telepon Penyewa</label>
                                        <input type="text" wire:model="phone" placeholder="Nomor Telepon / Whatsapp" required class="form-control">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Tanggal Booking</label>
                                        <input type="date" wire:model="date" required placeholder="Tanggal Booking" name="date" class="form-control">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Mulai Jam</label>
                                        <input type="time" placeholder="Mulai Jam Booking"name="time_start" wire:model="time_start" class="form-control" required value="">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Sampai Jam</label>
                                        <input placeholder="Sampai Jam Booking" type="time" name="time_end" wire:model="time_end" required value="" class="form-control">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Kategori</label>
                                        <select wire:model="lapangan" id="" class="form-control">
                                            <option value="Lapangan 1">Lapangan 1</option>
                                            <option value="Lapangan 2">Lapangan 2</option>
                                            <option value="Full Lapangan">Full Lapangan</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group form-group">
                                        <label for="title">Status</label>
                                        <select wire:model="status" id="" class="form-control">
                                            <option value="Pending">Pending</option>
                                            <option value="Diterima">Diterima</option>
                                            <option value="DP">DP</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        $('.summernote').summernote({
            tabsize: 2,
            height: 450,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                @this.set('description', contents);
            }
        }
        });

        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
            }).on('changeDate', function(e){
            @this.set('published_at', $('#datepicker').val());
        });
    </script>
@endpush
