<?php

namespace App\Http\Livewire;

use App\Models\KontakModel;
use App\Models\GrupModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class KontakTabel extends Component
{ 
    public $search = '';
    public $baris = '15';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['AddKontak' => 'render'];

    public function render()
    {
        $k = DB::table('kontak')
            ->join('grup_kontak', 'kontak.kon_grup', '=', 'grup_kontak.g_id')
            ->select('kontak.*', 'grup_kontak.*')
            ->where('kontak.kon_status', 200)
            ->where('kontak.kon_nomor', 'like', '%' . $this->search . '%')
            ->orWhere('grup_kontak.g_nama', 'like', '%' . $this->search . '%')
            ->orWhere('kontak.kon_nama', 'like', '%' . $this->search . '%')
            ->paginate($this->baris);


            // dd($k);
        return view('livewire.kontak-tabel', ['kontak' => $k]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

}
