<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddGrup extends Component
{
    public $grup;

    protected $rules = [
        'grup' => 'required|min:3',
        
    ];

    public function render()
    {
        return view('livewire.add-grup');
    }

    public function showModal()
    {
        $this->resetValidation();
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->isOpen = false;
    }

    public function save()
    {
        $this->validate();

        // Proses penyimpanan atau tindakan lainnya
        // ...

        $this->hideModal();
    }
}
