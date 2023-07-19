@extends('layouts.app')
@push('styles')

@endpush

@push('scripts')
<script>
  const data = @json($total);
  document.getElementById("progress").style.width =  data + '%';
</script>
@endpush

@section('content')
<h4 class="fw-bold py-3">Broadcast</h4>
<div class="row">
<div class="col-8">
  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Buat Broadcast</h5>
        <form>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Pesan Broadcast</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Ditujukan Untuk :</label>
          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option value="0" selected>Semua Kontak</option>
            <option value="1">Grub Keluarga</option>
            <option value="2">Grub Teman</option>
            <option value="3">Grup Pemasaran</option>
          </select>
        </div>

        <button type="button" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
  </div>
</div>

<div class="col-4">
  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Status Broadcast</h5>

        <p>
          Tidak ada pesan yang di kirim.
        </p>
        <div class="alert alert-warning" role="alert">This is a warning alert — check it out!</div>
        <div class="progress">
          <div id="progress" class="progress-bar" role="progressbar"  aria-valuenow="" aria-valuemin="0"
            aria-valuemax="100">{{ $total }}%</div> 
        </div>
    </div>
  </div>
</div>
</div>
@endsection