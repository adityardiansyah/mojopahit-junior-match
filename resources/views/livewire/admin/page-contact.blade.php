@section('title')
    Informasi Kami
@endsection
<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Informasi Kami</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Data Informasi Kami</div>
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
                                                <label for="phone">Telepon</label>
                                                <input wire:model="phone" type="text" class="form-control" name="phone" id="" placeholder="1. Telepon Kantor (optional)">
                                                <input wire:model="phone2" type="text" class="form-control" name="phone2" id="" placeholder="2. Telepon Kantor (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="whatsapp">Whatsapp</label>
                                                <input wire:model="whatsapp" type="text" class="form-control" name="whatsapp" id="" placeholder="1. Nomor Whatsapp (optional)">
                                                <input wire:model="whatsapp2" type="text" class="form-control" name="whatsapp2" id="" placeholder="2. Nomor Whatsapp (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input wire:model="email" type="text" class="form-control" name="email" id="" placeholder="1. Email Perusahaan (optional)">
                                                <input wire:model="email2" type="text" class="form-control" name="email2" id="" placeholder="2. Email Perusahaan (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Instagram">Instagram</label>
                                                <input wire:model="instagram" type="text" class="form-control" name="instagram" id="" placeholder="Link Instagram (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="youtube">Youtube</label>
                                                <input wire:model="youtube" type="text" class="form-control" name="youtube" id="" placeholder="Link Youtube (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input wire:model="facebook" type="text" class="form-control" name="facebook" id="" placeholder="Link Facebook (optional)">
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