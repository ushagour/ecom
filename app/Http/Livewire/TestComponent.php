<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public  $post;
 
    public function like()
    {
        $this->post =(auth()->user()->name);
    }
    public function render()
    {
        return view('livewire.test-component')->layout("layouts.base");
    }
}
