@section('title')
    Booking Lapangan
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Booking Lapangan</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group">
                        <span class="kt-subheader__desc kt-margin-l-10">{{ $countData }} data ditemukan</span>
                        <select wire:model="paginate" name="" id="" class="form-control sm w-auto">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                        <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-margin-l-20">
                            <input wire:model="search" type="text" class="form-control" placeholder="Pencarian ..." id="search_keyword" name="keyword">
                            <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                <span><i class="flaticon2-search-1"></i></span>
                            </span>
                        </div>
                        <input type="date" wire:model="date" class="form-control ml-2 sm w-auto">
                    </div>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet__body pt-2">
                        <div class="table-responsive" style="overflow-x: visible;">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Nama Penyewa</th>
                                    <th>Kategori</th>
                                    <th>Nomor Telepon</th>
                                    <th>Tanggal</th>
                                    <th>Durasi</th>
                                    <th>Lapangan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->category }}
                                        </td>
                                        <td>
                                            {{ $item->phone }}
                                        </td>
                                        <td>
                                            {{ date('d-m-Y', strtotime($item->date)) }}
                                        </td>
                                        <td>
                                            {{ $item->time_start }} - {{ $item->time_end }}
                                        </td>
                                        <td>
                                            {{ $item->lapangan }}
                                        </td>
                                        <td>
                                            {{ $item->status }}
                                        </td>
                                        <td>
                                            @if($item->status == 'Pending')
                                            <button wire:click="confirm({{$item->id}})" onclick="confirmData({{$item->id}}) || event.stopImmediatePropagation()" data-toggle="tooltip" data-placement="top" title="Konfimasi" id="button" type="button" class="btn btn-hover-danger btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                                <i class="la la-check"></i>
                                            </button>
                                            @endif
                                            <button wire:click="edit({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Edit" type="button" class="btn btn-hover-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                                <i class="la la-pencil"></i>
                                            </button>
                                            <button wire:click="delete({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Hapus" type="button" class="btn btn-hover-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data tidak ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="m-auto">
                            <div class="mt-3">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function confirmData(target){
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data akan disetujui",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Setujui',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // console.log(result);

                if (result.value) {
                    window.livewire.emit('konfirmasi',target);
                    // $('#'+target).submit();
                }
            });
        }
        $('[data-toggle="tooltip"]').tooltip()
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
    </script>
@endpush