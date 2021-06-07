<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{

    public $isOpen = false;

    protected $listeners = [
        'handleShowAlert'
    ];

    public function handleShowAlert()
    {
        $this->isOpen = true;
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
