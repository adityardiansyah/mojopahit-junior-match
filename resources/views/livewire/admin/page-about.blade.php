@section('title')
    Tentang Kami
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Tentang Kami</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>
        </div>
    </div>
    
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body pt-1 pb-1 pl-2 pr-2">
                <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="store">
                    <div class="modal-body">
                        @if(session()->has('message'))
                        @php
                            $message = Session::get('message');
                        @endphp
                            @if ($message['type'] == 'success')
                                <div class="alert alert-success">
                                    {{ $message['content'] }}
                                </div>
                                <div class="alert alert-warning">
                                    <a href="" onclick="window.location.reload(true);" class="text-right">Silakan klik ini untuk melihat Perubahan Deskripsi</a>
                                </div>
                            @endif
                        @endif
                        <table class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Nama Halaman</label>
                                        <input wire:model="title" type="text" class="form-control" name="title" required id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Gambar</label> &nbsp; <a target="_blank" href="{{ asset('storage/'.$imageShow)}}">Lihat Gambar</a> 
                                    <input type="file" wire:model="image" name="image" id="image" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" wire:ignore>
                                        <label for="desciption">Deskripsi</label>
                                        <textarea type="text" input="description" id="summernote" class="form-control summernote">{{ $description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="maps">URL Google Maps</label>
                                        <input type="text" wire:model="maps" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="maps">URL Video</label>
                                        <input type="text" wire:model="video" class="form-control">
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
        </div>
    </div>
    <livewire:admin.company-team />
</div>

@push('scripts')
    <script type="text/javascript">
        $('.summernote').summernote({
            tabsize: 2,
            height: 200,
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
        $('.dropdown-toggle').dropdown()
    </script>
@endpush
