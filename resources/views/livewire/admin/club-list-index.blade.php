@section('title')
    List Club
@endsection
<div>
    <form action="" method="post" id="formSearch">
        @csrf
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">List Club</h3>
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
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="{{ route('admin.list-club-create') }}" class="btn btn-primary float-right">Tambah Club</a>
                </div>
            </div>
        </div>
        {{-- @include('tools.search') --}}
    </form>
    
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body pt-1 pb-1 pl-2 pr-2">
                <div class="table-responsive" style="overflow-x: visible;">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Logo</th>
                            {{-- <th>Cover</th> --}}
                            <th>Data Team</th>
                            <th colspan="2">Data Perwakilan Team</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td width="100px"><img src="{{ asset('storage/'.$item->logo)}}" class="img-fluid" alt=""></td>
                                {{-- <td width="150px"><img src="{{ asset('storage/'.$item->cover)}}" class="img-fluid" alt=""></td> --}}
                                <td>
                                    <b>Nama Team :</b> {{ $item->name }}<br>
                                    <b>Jenjang Umur :</b> {{ $item->age_level }} <br>
                                    <b>Alamat : </b> {{ $item->address }}
                                </td>
                                <td width="100px">
                                    <img src="{{ asset('storage/'.$item->assistant_photo)}}" class="img-fluid" alt="">
                                </td>
                                <td>
                                    <b>Nama : </b> {{ $item->assistant_name }}<br>
                                    <b>Jabatan :</b> {{$item->assistant_level}} <br>
                                    <b>No. Telepon :</b> {{$item->assistant_number}} <br>
                                    <b>Email :</b> {{$item->assistant_email}}
                                </td>
                                <td>
                                    <button wire:click="delete({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Hapus" id="button" type="button" class="btn btn-hover-danger btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                        <i class="la la-trash"></i>
                                    </button>
                                    <button wire:click="edit({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Edit" type="button" class="btn btn-hover-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                        <i class="la la-pencil"></i>
                                    </button>
                                    <button wire:click="add_players({{$item->id}})" data-toggle="tooltip" data-placement="top" title="Tambahkan Pemain" type="button" class="btn btn-hover-primary btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle">
                                        <i class="la la-user-plus"></i>
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
