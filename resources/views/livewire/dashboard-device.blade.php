<div>
    @if ($data['status'] > 200)
        <div id="qr-loading">
            <div class="spinner-border text-info mt-5" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p>Menunggu server...</p>
        </div>
    @endif
    @if ($data['status'] == 200)
        <div id="device" class="mt-4">
            {{-- <div class="avatar avatar-online mt-5 mb-5"> --}}
                <p class="mt-4">
                <img src="{{ asset('') }}assets/img/icons/brands/whatsapp.png" alt class="h-auto rounded-circle" />
                </p>
            {{-- </div> --}}
        <b>{{$data['username']}}</b>
        <p>{{$data['nomor']}}</p>
        </div>
    @endif
    @if ($data['status'] == 505)
    <span class="badge bg-label-danger">Server Offline</span>
    @endif
    

</div>
