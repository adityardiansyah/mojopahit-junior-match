@section('title')
    Edit Pemain 
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Formulir Edit Pemain</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.players') }}" class="btn btn-default btn-sm btn-bold"><i class="la la-arrow-left"></i>Kembali</a>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md"> Edit Pemain</div>
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
                <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="update">
                    <div class="modal-body">
                            <table class="mt-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Nama Team</label>
                                        <div wire:ignore>
                                            <select name="club_list_id" id="" class="select-2 form-control">
                                                <option value="0">Pilih Team Pemain</option>
                                                @foreach ($team as $item)
                                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input wire:model="name" type="text" class="form-control" name="name" required id="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Nama Panggilan</label>
                                        <input wire:model="nickname" type="text" class="form-control" name="nickname" required id="" autocomplete="off">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Posisi Pemain</label>
                                        <select wire:model="position" name="position" id="" class="form-control">
                                            <option value="GK (Goal Keeper)">GK (Goal Keeper)</option>
                                            <option value="DF (Defender)">DF (Defender)</option>
                                            <option value="MF (Defender)">MF (Midfielder)</option>
                                            <option value="ST (Striker)">ST (Striker)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">No. Punggung</label>
                                            <input wire:model="back_number" type="text" class="form-control" name="back_number" required id="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Tanggal Lahir</label>
                                            <input type="text" class="form-control" name="date_born" required id="datepicker" data-provide="datepicker" data-date-autoclose="true" data-date-today-highlight="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Nomor Telepon</label>
                                        <input wire:model="phone" type="text" class="form-control" name="phone" required id="" autocomplete="off">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Asal Sekolah</label>
                                        <input wire:model="from_school" type="text" class="form-control" name="from_school" required id="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Alamat Pemain</label>
                                            <input wire:model="address" type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Foto Pemain</label><small> *maks ukuran foto 1 mb</small>
                                        <input type="file" wire:model="photo" name="photo" id="photo" class="form-control">
                                    </div>
                                </div>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('admin.players') }}" class="btn btn-secondary"><i class="la la-arrow-left"></i>Kembali</a>
                        <button type="submit" class="btn btn-primary"><i class="la la-save"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.select-2').select2();
        $('.select-2').on('change', function (e) {
            @this.set('club_list_id', e.target.value);
        });

        
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
            }).on('changeDate', function(e){
            @this.set('date_born', $('#datepicker').val());
        });
    </script>
@endpush