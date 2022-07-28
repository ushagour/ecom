<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

use Livewire\WithPagination;

class AdminProductComponent extends Component
{
       use WithPagination;
 
    public function render()
    {

        $products = Product::with('category')->paginate(8);

        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
