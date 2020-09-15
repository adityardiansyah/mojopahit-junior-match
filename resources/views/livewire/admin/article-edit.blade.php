@section('title')
    Edit Artikel 
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Formulir Edit Artikel</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.article') }}" class="btn btn-default btn-sm btn-bold">Kembali</a>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <form action="" method="post" enctype="multipart/form-data" wire:submit.prevent="update">
        <input type="hidden" wire:model="post_id" value="{{ $post_id }}">
        <div class="row">
            <div class="col-md-8">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        {{-- <div class="kt-heading kt-heading--md">Tambah Artikel</div> --}}
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="hidden" wire:model="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                            <input wire:model="title" type="text" class="form-control" name="title" required id="">
                                        </div>
                                        <div class="form-group" wire:ignore>
                                            <label for="desciption">Konten</label>
                                            <textarea type="text" input="description" id="summernote" class="form-control summernote">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="modal-body">
                            <table class="mt-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category_id">Kategori</label>
                                            <select wire:model="category_id" name="category_id" class="form-control" id="">
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Url</label>
                                            <input wire:model="slug" type="text" class="form-control" name="slug" placeholder="(optional)" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="imageEdited">Gambar Thumbnail</label>
                                            <img src="{{ asset('storage/'.$image) }}" class="img-fluid" alt="">
                                            <input wire:model="imageEdited" type="file" class="form-control" name="imageEdited" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Publish</label>
                                            <input type="date" class="form-control" wire:model="published_at" name="published_at" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Publish ?</label>
                                            <select wire:model="status" name="status" class="form-control" id="">
                                                <option value="DRAFT">DRAFT</option>
                                                <option value="PENDING">PENDING</option>
                                                <option value="PUBLISH">PUBLISH</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <b>SEO</b>
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <input wire:model="meta_title" type="text" class="form-control" name="meta_title" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea wire:model="meta_description" type="text" class="form-control" name="meta_description" id=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_keyword">Tag </label><small>(pisahkan dengan koma)</small>
                                            <input wire:model="meta_keyword" type="text" class="form-control" name="meta_keyword" id="">
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('admin.article') }}" class="btn btn-secondary"><i class="la la-arrow-left"></i> Kembali</a>  
                            <button type="submit" class="btn btn-primary"><i class="la la-save"></i> Simpan</button>
                            <div wire:loading>
                                Proses Simpan...
                            </div>
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
