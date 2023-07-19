@extends('layouts.app')
@push('styles')
  @livewireStyles
@endpush

@push('scripts')
  @livewireScripts
@endpush

@section('content')

<h4 class="fw-bold py-3">Pesan Terkirim</h4>
<div class="row">
  <div class="card">
    <div class="card-body">
      @livewire('terkirim-table')
    </div>
  </div>
</div>

@endsection