@section('title')
    Edit Club 
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Formulir Edit Club</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.list-club') }}" class="btn btn-default btn-sm btn-bold">Kembali</a>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Edit Club</div>
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Nama Team</label>
                                            <input type="hidden" name="" wire:model="club_id">
                                            <input wire:model="name" type="text" class="form-control" name="name" required id="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Jenjang Umur</label>
                                        <select wire:model="age_level" name="assitant_level" id="" class="form-control">
                                            <option value="U8">U8</option>
                                            <option value="U9">U9</option>
                                            <option value="U10">U10</option>
                                            <option value="U11">U11</option>
                                            <option value="U12">U12</option>
                                            <option value="U13">U13</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Alamat Team</label>
                                            <input wire:model="address" type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" required autocomplete="off">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Logo Team</label><br>
                                        <a href="{{ asset('storage/'.$logo) }}" target="_black"><img src="{{ asset('storage/'.$logo) }}" class="img-fluid" alt="" style="height:64px;"></a>
                                        <input type="file" wire:model="edit_logo" name="logo" id="logo" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Cover Team</label><br>
                                        <a href="{{ asset('storage/'.$cover) }}" target="_black"><img src="{{ asset('storage/'.$cover) }}" class="img-fluid" alt="" style="height:64px;"></a>
                                        <input type="file" wire:model="edit_cover" name="cover" id="cover" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Perwakilan Team</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assistant_name">Nama Perwakilan</label>
                                            <input wire:model="assistant_name" type="text" class="form-control" name="assistant_name" id="assistant_name" value="{{ old('assistant_name') }}" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">No. Telepon Perwakilan</label>
                                        <input wire:model="assistant_number" type="text" name="assistant_number" id="assistant_number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assistant_email">Email Perwakilan</label>
                                            <input wire:model="assistant_email" type="text" class="form-control" name="assistant_email" id="assistant_email" value="{{ old('assistant_email') }}" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Jabatan</label>
                                        <select wire:model="assistant_level" name="assistant_level" id="" class="form-control">
                                            <option value="Pelatih">Pelatih</option>
                                            <option value="Manager">Manager</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Foto Perwakilan</label><br>
                                        <a href="{{ asset('storage/'.$assistant_photo) }}" target="_black"><img src="{{ asset('storage/'.$assistant_photo) }}" class="img-fluid" alt="" style="height:64px;"></a>
                                        <input type="file" wire:model="edit_assistant_photo" name="assistant_photo" id="assistant_photo" class="form-control">
                                    </div>
                                </div>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('admin.list-club') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
