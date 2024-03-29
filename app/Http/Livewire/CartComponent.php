<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Auth;


class CartComponent extends Component
{

    public function increaseQuantity($id)

    {
        $product = Cart::instance("cart")->get($id);
        $qty = $product->qty +1;
        Cart::instance("cart")->update($id,$qty);
        $this->emitTo('cart-count-component','refreshComponent');


    }
    public function checkout()
    {
            if(Auth::check())
            {
                return redirect()->route('checkout');
            }
            else
            {
                 return redirect()->route('login');
            }
    }


    public function decreaseQuantity($id)

    {
        $product = Cart::instance("cart")->get($id);
        $qty = $product->qty -1;
        Cart::instance("cart")->update($id,$qty);
        $this->emitTo('cart-count-component','refreshComponent');


    }
    public function destroy($id)

    {
        $product = Cart::instance("cart")->get($id);
        Cart::instance("cart")->remove($id);
        session()->flash('success_info','item deleted succesfuly');
        $this->emitTo('cart-count-component','refreshComponent');

    }
    public function destroyAll()

    {
      
        Cart::instance("cart")->destroy();
        $this->emitTo('cart-count-component','refreshComponent');

    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
