@section('title')
    Galeri
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Galeri</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            @if(session()->has('message'))
            @php
                $message = Session::get('message');
            @endphp
                @if ($message['type'] == 'success')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil! </strong>&nbsp; {{ $message['content'] }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal! </strong>&nbsp; {{ $message['content'] }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            @endif
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        
                        @if($statusUpdate)
                        <livewire:admin.gallery-update />
                        @else
                        <livewire:admin.gallery-create />
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Data Galeri</div>
                        <div class="table-responsive" >
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <b>{{ $item->title }}</b>
                                        </td>
                                        <td width="300px">
                                            @foreach ($item->images as $value)
                                                <a href="{{ asset('storage/'.$value)}}" target="_blank"><img src="{{ asset('storage/'.$value)}}" style="width:40%; float:left; margin:2px;" alt=""></a>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button wire:click="delete({{$item->id}})" onclick="deleteData({{$item->id}}) || event.stopImmediatePropagation()" data-toggle="tooltip" data-placement="top" title="Hapus" id="button" type="button" class="btn btn-hover-danger btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                                <i class="la la-trash"></i>
                                            </button>
                                            <button wire:click="edit({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Edit" type="button" class="btn btn-hover-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                                <i class="la la-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data tidak ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        @if(Session::has('message'))
            toastr.options.closeButton = true;
            toastr.options.timeOut = 0;
            toastr.options.extendedTimeOut = 0;
            @php
                $message = Session::get('message');
            @endphp
            @if($message['type'] == 'success')
                toastr.info("{{ $message['content'] }}");
            @else
                toastr.error("{{ $message['content'] }}");
            @endif
        @endif
        $('[data-toggle="tooltip"]').tooltip()
    </script>
@endpush
