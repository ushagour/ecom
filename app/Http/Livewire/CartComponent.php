<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;


class CartComponent extends Component
{

    public function increasequantity($id)

    {
        $product = Cart::get($id);
        $qty = $product->qty +1;
        Cart::update($id,$qty);


    }

    public function decreasequantity($id)

    {
        $product = Cart::get($id);
        $qty = $product->qty -1;
        Cart::update($id,$qty);

    }
    public function destroy($id)

    {
        $product = Cart::get($id);
        Cart::remove($id);
        session()->flash('success_info','item deleted succesfuly');

    }
    public function clearAll()

    {
      
        Cart::destroy();

    }
    public function test()
    {
        session()->flash('success_info','item  test  session data ');

    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
