@extends('layouts.app')
@push('styles')
    @livewireStyles
@endpush

@push('scripts')
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e82b07af29fec07c85ad', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function (data) {
        $('#qrcode').attr('src', data.qr);
        if (data.qr) {
            $('#qrcode').show();
            $('#qr-loading').hide();
        }
        
        
    });
    var channel = pusher.subscribe('ready');
    channel.bind('my-event2', function(data) {
    
    $('#qr-loading').hide();
    $('#qrcode').hide();
    
    setTimeout(() => {
    Livewire.emit('Device');
    }, 3000);

    
    });
    var channel = pusher.subscribe('disconnected');
    channel.bind('my-event3', function(data) {

    $('#qr-loading').show();
    $('#device').hide();
    });
</script>
@livewireScripts
@endpush

@section('content')
            <div class="row mb-5">
                <div class="col-md-6 col-lg-8 mb-3">
                    <div class="row">
                
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Kontak</span>
                                <h3 class="card-title mb-2">{{ $kontak }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Pesan Terkirim</span>
                                <h3 class="card-title mb-2"> {{ angka($terkirim) }} </h3>
                            </div>
                        </div>
                    </div>
                    </div>{{-- end row  --}}
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Scan QR Code</h5>
                            <p class="card-subtitle text-muted">Lakukan scan QR untuk memulai sistem!</p>
                            @livewire('dashboard-device')
                            {{-- <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" /> --}}
                            <img src="" alt="QR Code" id="qrcode" style="display: none;" >
                            {{-- <p class="card-text">Bear claw sesame snaps gummies chocolate.</p> --}}
                            
                        </div>
                    </div>
                </div>
            </div>



@endsection