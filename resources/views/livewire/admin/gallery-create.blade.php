<div>
    <div class="kt-heading kt-heading--md">Tambah Galeri</div>
    <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="store">
        <div class="modal-body">
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
            <table class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Judul Foto</label>
                            <input type="text" class="form-control" id="title" wire:model="title" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" wire:model="image" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Kategori</label>
                            <select name="category" class="form-control" wire:model="category" id="">
                                <option value="cup">Cup</option>
                                <option value="league">League</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </table>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary"><i class="la la-trash"></i>Bersihkan</button>
            <button type="submit" id="tombol" class="btn btn-primary"><i class="la la-save"></i>Simpan</button>
        </div>
    </form>
</div>
@push('js')

@endpush