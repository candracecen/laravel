<div>
<div class="demo-inline-spacing">
<button type="button" class="btn btn-primary d-inline" wire:click="showModalAddKontak" title="Tambah Kontak">
    <span class="tf-icons bx bx-user-plus"></span>&nbsp; Add Kontak
</button>
<button type="button" class="btn btn-warning d-inline" wire:click="showModalAddGrup" title="Tambah Kontak"
    title="Tambah Grup">
    <span class="tf-icons bx bx-group"></span>&nbsp; Add Grup
</button>

    <button type="button" class="btn btn-info">
        <span class="tf-icons bx bx-user-check"></span>&nbsp; Cek Status
    </button>
    <button class="btn btn-icon btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth"
        aria-controls="offcanvasBoth" title="Bantuan">
        <span class="tf-icons bx bx-help-circle"></span>
    </button>
</div>
{{-- NOTIF --}}
@if (session()->has('message'))
<div id="notification" class="alert alert-success mt-4" role="alert">
    {{ session('message') }}
</div>
@endif
{{-- <div class="alert alert-primary mt-4" role="alert">This is a primary alert — check it out!</div> --}}
{{-- MODAL ADD KONTAK --}}
<div class="modal" id="basicModal" data-bs-backdrop="static" tabindex="-1" style="display: {{ $isOpen ? 'block' : 'none' }}">
    <div class="modal-dialog" role="document"> 
        <form class="modal-content" wire:submit.prevent='save'>
            <div class="modal-header">
                <h5 class="modal-title" id="AddKontakTitle">Tambah Kontak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="hideModalAddKontak" style="display: {{ $isOpen ? 'block' : 'none' }}"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Nama</label>
                        
                        <input type="text" id="nameBackdrop" class="form-control @error('nama') is-invalid @enderror" placeholder="Elsa" wire:model="nama" />
                        @error('nama')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>    
                        @enderror
                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Nomor</label>
                        
                        <input type="number" id="nameBackdrop" class="form-control @error('nomor') is-invalid @enderror" placeholder="081xxxxxxxxx" wire:model="nomor"/>
                        @error('nomor')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>    
                        @enderror
                        
                    </div>
                </div>
                
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="PilihGrup" class="form-label">Grup</label>
                        <select class="form-select" id="PilihGrup" aria-label="Pilih Grup" wire:model="grup">
                            @foreach ($lis_grub as $item)
                                @if ($item->g_option == 2)
                                    <option value="{{ $item->g_id }}" selected>{{ $item->g_nama }}</option>
                                @endif
                                @if ($item->g_option == 1)
                                    <option value="{{ $item->g_id }}">{{ $item->g_nama }}</option>
                                @endif
                                
                            @endforeach
                            {{-- @dd($lis_grub) --}}
                            
                        </select>
                    </div>
                    <div class="col mb-0">
                        <label for="PilihGrup" class="form-label">Import Kontak</label>
                        <div class="ml-4">
                            <a href="{{ url('/import-kontak') }}" rel="noopener noreferrer"> <button type="button"
                                    class="btn btn-outline-primary"><span class="tf-icons bx bx-file"></span>&nbsp;
                                    Import
                                    Kontak</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click="hideModalAddKontak" style="display: {{ $isOpen ? 'block' : 'none' }}">
                    Tutup
                </button>
                <button type="submit"  class="btn btn-primary" wire:loading.attr="disabled">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL ADD GUP --}}
<div class="modal" data-bs-backdrop="static" tabindex="-1" style="display: {{ $isOpen2 ? 'block' : 'none' }}">
    <div class="modal-dialog">
        <form class="modal-content" wire:submit.prevent='savegrup'>
            <div class="modal-header">
                <h5 class="modal-title" id="AddGrupTitle">Tambah Grup</h5>
                <button type="button" class="btn-close" wire:click="hideModalAddGrup" style="display: {{ $isOpen2 ? 'block' : 'none' }}"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Nama Grup</label>
                        <input type="text" id="nameBackdrop" class="form-control @error('namagrup') is-invalid @enderror" placeholder="Pemasaran" wire:model="namagrup" />
                        @error('namagrup')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click="hideModalAddGrup" style="display: {{ $isOpen2 ? 'block' : 'none' }}">
                    Tutup
                </button>  
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                Simpan
            </button>
            </div>
        </form>
    </div>
</div>


<script>
    // Menghapus notifikasi setelah penundaan waktu
    setTimeout(function() {
          // document.getElementById('notification').style.display = 'none';
        $('#notification').hide();
      }, 5000); // Penundaan 5 detik (5000 ms)
</script>
</div>
