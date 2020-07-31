<div>
    <div class="kt-heading kt-heading--md">Tambah Video</div>
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
                            <label for="title">Judul Video</label>
                            <input type="text" class="form-control" id="title" wire:model="title" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="image">Link Embed Video</label>
                            <input type="text" class="form-control" id="embed" wire:model="embed" autocomplete="off" placeholder="ex: https://www.youtube.com/embed/juoCHaHmxJA?feature=oembed&start&end&wmode=opaque&loop=0&controls=1&mute=0&rel=0&modestbranding=0">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Team Pertama</label>
                            <div wire:ignore>
                                <select name="team_id" id="team1" class="select-2 form-control">
                                    <option value="0">Tidak ada team</option>
                                    @foreach ($team as $item)
                                        <option value="{{$item->id}}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Team Kedua</label>
                            <div wire:ignore>
                                <select name="team2_id" id="team2" class="select-2 form-control">
                                    <option value="0">Tidak ada team</option>
                                    @foreach ($team as $item)
                                        <option value="{{$item->id}}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
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
@push('scripts')
    <script>
        $('.select-2').select2();
        $('#team1').on('change', function (e) {
            @this.set('team_id', e.target.value);
        });
        $('#team2').on('change', function (e) {
            @this.set('team2_id', e.target.value);
        });
    </script>
@endpush