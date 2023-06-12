<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;


class WishlistComponent extends Component
{

    public function removeFromWishList($product_id)
    {
        foreach (Cart::instance("wishlist")->content() as $item) {

            if ($item->id == $product_id) {
                Cart::instance("wishlist")->remove($item->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
   
    }
      
    public function addToCart($product_id,$product_name,$regular_price){

       
        Cart::instance("cart")->add($product_id,$product_name,1,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
       Session()->flash('success_info','item added to cart');

       return redirect()->route('product.cart');//returniih  l page dyal cart 
       

   }
   public function moveProductFromWishlistToCart($rowId)
        {
            $item = Cart::instance("wishlist")->get($rowId);
            Cart::instance('wishlist')->remove($rowId);
            Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        
            $this->emitTo('wishlist-count-component', 'refreshComponent');
            $this->emitTo('cart-count-component', 'refreshComponent');
    
        }

    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
