<?php

namespace App\Http\Livewire;

use Livewire\Component;
use cart;

class CartCountComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];  //key=> value 

    public function render()
    {
        return view('livewire.cart-count-component');
    }
}
