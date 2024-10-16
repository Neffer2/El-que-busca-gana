<?php

namespace App\Livewire;

use Livewire\Component;

class RuletaComponent extends Component
{
    // Models
    public $device;

    public function render()
    {
        return view('livewire.ruleta-component');
    }

    public function setDevice($device)
    {
        $this->device = $device;
    }
}
