<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class GrupTabel extends Component
{
    public $dataArray;
    public $search = '';
    public $baris = 10; // Jumlah item per halaman
    public $currentPage = 1; // Halaman saat ini
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['AddKontak' => 'render'];

    


    public function getPaginatedData()
    {
        $k = DB::table('grup_kontak')
            ->where('g_option', 1)
            ->where('g_nama', 'like', '%' . $this->search . '%')
            ->get();

        $data = [];

        foreach ($k as $val) {
            $d['nama'] = $val->g_nama;
            $jum = DB::table('kontak')->where('kon_grup', $val->g_id)->count();
            $d['jumlah'] = $jum;

            $data[] = $d;
        } // end foreach
            $options = [
                "path" => url()->current(),
                "pageName" => "pgrup"
            ];
        $j = json_encode($data);
        $hasil = json_decode($j);
        $collection = new Collection($hasil);

        return new LengthAwarePaginator(
            $collection->forPage($this->currentPage, $this->baris),
            $collection->count(),
            $this->baris,
            $this->currentPage,
            $options
        );
    }

    public function render()
    {
        $paginator = $this->getPaginatedData();

        return view('livewire.grup-tabel', ['grup' => $paginator]);
    }

    // public function render()
    // {
    //     $k = DB::table('grup_kontak')
    //         ->where('g_option', 1)
    //         ->where('g_nama', 'like', '%' . $this->search . '%')
    //         // ->paginate($this->baris);
    //         ->get();


    //     // ->paginate($this->baris);
        
    //     $data = [];

    //     foreach ($k as $val) {
    //         $d['nama'] = $val->g_nama;
    //         $jum = DB::table('kontak')->where('kon_grup', $val->g_id)->count();
    //         $d['jumlah'] = $jum;

    //         $data[] = $d;

            
    //     }

    //     // dd($k);
    //     // $hasil = $data->paginate($this->baris);
    //     // $hasil = collect($data)->paginate($this->baris);
    //     // $this->dataArray = $data;

    //     // Membuat paggination manual ------------------------------------->
    //     $j = json_encode($data);
    //     $hasil = json_decode($j);
    //     $collection = new Collection($hasil);
    //     $options = [
    //         "path" => url()->current(),
    //         "pageName" => "pgrup"
    //     ];
    //     $currentPage = request()->get('pgrup', 1); // Halaman saat ini, diambil dari parameter 'page'
    //     $paginator = new LengthAwarePaginator(
    //         $collection->forPage($currentPage, $this->baris),
    //         $collection->count(),
    //         $this->baris,
    //         $currentPage,
    //         $options
            
    //     );
    //     $paginator->withPath(url()->current());
    //     // dd($paginator);



    //     return view('livewire.grup-tabel', ['grup' => $paginator]);
    // }

    public function updatingSearch(){
        $this->resetPage();
    }
}
