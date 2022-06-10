<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class HeaderComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;
    public function mount()
    {
            $this->product_cat ='all category';
            $this->fill(request()->only('search','product_cat','product_cat_id')); 
    }
    public function render()
    {
        return view('livewire.header-component',['categories'=>Category::all()]);
    }
}
