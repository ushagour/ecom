<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CatalogeComponent extends Component
{
    public function render()
    {
        return view('livewire.cataloge-component')->layout("layouts.base");
    }
}
