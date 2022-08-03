<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{
    public function render()
    {
        
        return view('livewire.home-component',["homesliders" => HomeSlider::where("status",true)->get()])->layout('layouts.base');
    }
}
