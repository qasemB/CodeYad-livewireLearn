<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{

    public $title = "";
    public $title2 = "";
    public $clockColor = true;

    public function changeColor()
    {
        $this->clockColor = !$this->clockColor;
    }

    public function myFuncInIndex()
    {
        $this->emit('handleShowAlertJs');
    }

    public function resetProperties()
    {
        $this->reset('title', 'title2');
    }

    public function mount()
    {
        $this->fill(['title' => 'سلام دوست گرامی', 'title2' => 'به آموزش لایو وایر خوش اومدی']);
    }

    public function render()
    {
        return view('livewire.index');
    }
}
