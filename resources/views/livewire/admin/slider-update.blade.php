<div>
    <div class="kt-heading kt-heading--md">Edit Slider</div>
    <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="update">
        <input type="hidden" wire:model="slider_id" value="{{ $slider_id }}">
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
                        <label for="image">Gambar</label>
                        <img src="{{ asset('storage/'.$image_slider) }}" class="img-fluid" alt="">
                        <input type="file" wire:model="image" name="image" id="image" class="form-control">
                    </div>
                </div>
            </table>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary"><i class="la la-trash"></i>Bersihkan</button>
            <button type="submit" class="btn btn-primary"><i class="la la-save"></i>Simpan</button>
        </div>
    </form>
</div>
