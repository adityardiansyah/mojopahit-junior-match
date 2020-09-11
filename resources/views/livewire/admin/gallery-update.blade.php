<div>
    <div class="kt-heading kt-heading--md">Edit Galeri</div>
    <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="update">
        <input type="hidden" wire:model="gallery_id" value="{{ $gallery_id }}">
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
                            <label for="image">Gambar</label><br>
                            <div class="row mb-2 text-center">
                                @if($image_gallery != null || !empty($image_gallery))
                                @forelse ($image_gallery as $item)
                                <div class="col-4 text-center">
                                    <div class="m-auto">
                                        <img src="{{ asset('storage/'.$item)}}" class="img-fluid mb-2 clearfix" alt="">
                                        <br>
                                        <button class="btn btn-outline-danger m-auto" wire:click="deleteGallery('{{$item}}', {{ $gallery_id }})"><i class="icon flaticon-close"></i>Hapus</button>
                                    </div>
                                </div>
                                @empty
                                @endforelse

                                @endif
                            </div>
                            <input type="file" wire:model="image" name="image" id="image" class="form-control" multiple>
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
