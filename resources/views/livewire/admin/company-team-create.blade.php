<div>
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
            @if(session()->has('message'))
            @php
                $message = Session::get('message');
            @endphp
                @if ($message['type'] == 'success')
                    <div class="alert alert-success">
                    {{ $message['content'] }}
                    </div>
                @endif
            @endif
            <table class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input wire:model="name" type="text" class="form-control" name="name" required id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="position">Jabatan</label>
                            <input wire:model="position" type="text" class="form-control" name="position" required id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="image">Foto</label>
                        <input type="file" wire:model="image" name="image" id="image" class="form-control">
                    </div>
                </div>
            </table>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="la la-save"></i>Simpan</button>
        </div>
    </form>
</div>
