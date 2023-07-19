<?php

namespace App\Http\Livewire;

use App\Models\TerkirimModel;
use Livewire\Component;
use Livewire\WithPagination;


class TerkirimTable extends Component
{
    public $search = '';
    public $baris = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.terkirim-table', [
            'terkirim' => TerkirimModel::query()
            ->where('status', 200)
            ->where('nomor', 'like', '%' .$this->search. '%')
            ->orWhere('pesan', 'like', '%' . $this->search . '%')
            ->paginate($this->baris)
        ]);
    }
}
