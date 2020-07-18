<div>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Hubungi Kami</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet__body pt-2">
                        <div class="kt-heading kt-heading--md">Data Hubungi Kami</div>
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
                                                <input wire:model="phone" type="text" class="form-control" name="phone" required id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="whatsapp">Whatsapp</label>
                                                <input wire:model="whatsapp" type="text" class="form-control" name="whatsapp" required id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input wire:model="email" type="text" class="form-control" name="email" required id="">
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