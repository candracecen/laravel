@extends('layouts.app')
@push('styles')

@endpush

@push('scripts')
<script>
  // Membuat menu li auto activ sesuai link
  document.addEventListener('DOMContentLoaded', function() {
  var currentURL = window.location.href;
  var menuItems = document.getElementsByClassName('menu-item');
  for (var i = 0; i < menuItems.length; i++) { var menuItemLink=menuItems[i].getElementsByTagName('a')[0]; var
    menuItemURL=menuItemLink.href; if (currentURL===menuItemURL) { menuItems[i].classList.add('active'); } } });
</script>
@endpush

@section('content')
<h4 class="fw-bold py-3 mb-4"> <a href=" {{ url('/kontak') }} "> <span class="text-muted fw-light">Kontak /</span></a> Import Kontak</h4>
<div class="row">
  <div class="col-8">
    <div class="card">
      <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="formFile" class="form-label">Input File</label>
              <input class="form-control" type="file" id="formFile" />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlSelect1" class="form-label">Masukkan ke Grup</label>
              <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option value="false" selected>Tidak masuk grup</option>
                <option value="1">Keluarga</option>
                <option value="2">Teman</option>
                <option value="3">Pemasaran</option>
              </select>
            </div>

            <button class="btn btn-primary">Sinpan</button>

          </form>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Panduan Import Kontak</h5>
        <p>
          Format file yang bisa di import adalah csv dan xlsx (Exel), dengan ukuran maksimum 1Mb.  
        </p>
        <p>Kamu bisa download contoh file exel yang sudah support dengan sistem Elsa dibawah ini: </p>
        <a href="../kontak.xlsx">
          <button type="button" class="btn btn-outline-primary">
            <span class="tf-icons bx bx-download"></span>&nbsp; Download Contoh file
          </button>
        </a>
      </div>
    </div>
  </div>

</div>
@endsection