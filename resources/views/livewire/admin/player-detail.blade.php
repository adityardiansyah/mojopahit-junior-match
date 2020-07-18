@section('title')
    Detail Pemain 
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Halaman Detail Pemain</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.player-edit',$player_id) }}" class="btn btn-success btn-sm btn-bold"><i class="la la-pencil"></i>Edit Pemain</a>
                <a href="{{ route('admin.players') }}" class="btn btn-default btn-sm btn-bold"><i class="la la-arrow-left"></i>Kembali</a>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Detail Pemain</div>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td colspan="2">
                                    <div class="row">
                                        <img src="{{ asset('storage/'.$photo)}}" alt="" class="m-auto img-fluid" style="height: 150px;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Nama Lengkap</td>
                                <td>: &nbsp; {{ $name }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Nama Panggilan</td>
                                <td>: &nbsp; {{ $nickname }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Nomor Punggung</td>
                                <td>: &nbsp; {{ $back_number }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Posisi</td>
                                <td>: &nbsp; {{ $position }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Tanggal Lahir</td>
                                <td>: &nbsp; {{ $date_born }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Assist</td>
                                <td>: &nbsp; {{ $assist }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Goal</td>
                                <td>: &nbsp; {{ $goal }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Asal Sekolah</td>
                                <td>: &nbsp; {{ $from_school }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Nomor Telepon</td>
                                <td>: &nbsp; {{ $phone }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Alamat</td>
                                <td>: &nbsp; {{ $address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Club Pemain</div>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td colspan="2">
                                    <div class="row">
                                        <img src="{{ asset('storage/'.$logo_team)}}" alt="" class="m-auto img-fluid" style="height: 150px;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Nama Team</td>
                                <td>: &nbsp; {{ $name_team }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Jenjang</td>
                                <td>: &nbsp; {{ $age_team }}</td>
                            </tr>
                            <tr style="border-bottom:1px solid #d9d9d9">
                                <td class="pl-3" width="40%">Alamat Team</td>
                                <td>: &nbsp; {{ $address_team }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush