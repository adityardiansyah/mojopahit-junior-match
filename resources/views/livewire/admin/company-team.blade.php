<div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Data Pelaksana</div>
                        
                        @if($statusUpdate)
                        <livewire:admin.company-team-edit />
                        @else
                        <livewire:admin.company-team-create />
                        @endif
                        <div class="table-responsive" style="overflow-x: visible;">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Foto</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td width="100px"><img src="{{ asset('storage/'.$item->image)}}" class="img-fluid" alt=""></td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->position }}
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