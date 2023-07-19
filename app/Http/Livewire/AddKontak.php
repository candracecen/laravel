<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\WithPagination;
use App\Models\KontakModel;
use App\Models\GrupModel;
use Illuminate\Support\Facades\DB;



class AddKontak extends Component
{

    public $nama;
    public $nomor;
    public $grup;
    public $namagrup;
    public $isOpen = false;
    public $isOpen2 = false;

    // protected $rules = [
    //     'nama' => 'required|min:3',
    //     'nomor' => 'required|min:10',
        
        
    // ];

    public function render()
    {   
        $g = DB::table('grup_kontak')->get();
        // dd($g);

        return view('livewire.add-kontak', ['lis_grub' => $g]);
    }
    
    public function showModalAddKontak()
    {
        $this->resetValidation();
        $this->isOpen = true;
    }

    public function hideModalAddKontak()
    {
        $this->reset();
        $this->resetValidation();
        $this->isOpen = false;
    }

    public function save()
    {
        $this->validate([
            'nama' => 'required|min:3',
            'nomor' => 'required|min:10',
            // Aturan validasi lainnya
        ]);

            // KontakModel::created([
            //     'kon_nama' => $this->nama,
            //     'kon_nomor' => $this->nomor,
            //     'kon_grup' => $this->grup,
            //     'kon_status' => '100'
            // ]);
            if (!$this->grup) {
                $g = 1;
            }else {
                $g = $this->grup;
            }
        $user = new KontakModel;
        $user->kon_nama = $this->nama;
        $user->kon_nomor = $this->nomor;
        $user->kon_grup = $g;
        // Setel nilai atribut lainnya sesuai kebutuhan
        $user->save();
        session()->flash('message', 'Kontak ' . $this->nama . ' berhasil disimpan.');

        $this->hideModalAddKontak();
        
        $this->emit('AddKontak');
        
    }

    public function showModalAddGrup()
    {
        $this->resetValidation();
        $this->isOpen2 = true;
    }

    public function hideModalAddGrup()
    {
        $this->reset();
        $this->resetValidation();
        $this->isOpen2 = false;
    }

    public function savegrup()
    {
        $this->validate([
            'namagrup' => 'required|min:3',
            // Aturan validasi lainnya
        ]);

        $grup = new GrupModel;
        $grup->g_nama = $this->namagrup;
        $grup->g_option = 1;
        $grup->save();
        session()->flash('message', 'Grup ' . $this->namagrup . ' berhasil disimpan.');

        $this->hideModalAddGrup();

        // $this->emit('AddKontak');

    }

    
}
