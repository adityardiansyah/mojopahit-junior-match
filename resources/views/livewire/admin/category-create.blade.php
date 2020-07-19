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
                            <label for="parent_id">Induk Kategori</label>
                            <select class="form-control" name="parent_id" wire:model="parent_id" id="" required>
                                <option value="0" selected>Tidak Ada</option>
                                @foreach ($getCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input wire:model="name" type="text" class="form-control" name="name" required id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input wire:model="slug" type="text" class="form-control" name="slug" placeholder="boleh dikosongi">
                        </div>
                    </div>
                </div>
            </table>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="la la-save"></i>Simpan</button>
        </div>
    </form>
</div>
