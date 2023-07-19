@extends('layouts.app')
@push('styles')
@livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush

@section('content')
<h4 class="fw-bold py-3">Kontak</h4>
<div class="row mb-4">

@livewire('add-kontak')


</div>

  {{-- @livewire('kontak-tabel') --}}
<hr class="my-5" />
{{-- @livewire('grup-tabel') --}}
  


{{-- OFF CANVAS --}}
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth"
  aria-labelledby="offcanvasBothLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasBothLabel" class="offcanvas-title">Panduan Tentang Kontak</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body my-auto mx-0 flex-grow-0">
    <p class="text-left">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    <p class="text-center">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
      graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
      century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
      for use in a type specimen book.
    </p>
    
    <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">
      Mengerti
    </button>
  </div>
</div>
@endsection