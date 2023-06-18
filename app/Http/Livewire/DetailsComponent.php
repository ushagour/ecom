<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sale;

use Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }
  
    public function addToCart($product_id,$product_name,$regular_price){

       
        Cart::instance("cart")->add($product_id,$product_name,1,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
       Session()->flash('success_info','item added to cart');

       return redirect()->route('product.cart');//returniih  l page dyal cart 
       

   }
    public function store($product_id,$product_name,$regular_price){

       
        Cart::add($product_id,$product_name,$this->qty,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
  
                    Session()->flash('success_info','item added to cart');
                    return redirect()->route('product.cart');
       

                 }


                public function increaseQuantity()
                {

                    $this->qty++;

                }
                public function decreseQuantity()
                {
                
                    if($this->qty > 1)
                    {
                        $this->qty--;
                    }
                
                }
                  

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $Sale =  Sale::where("status",1)->first(); 

        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['product'=>$product,'popular_products'=>$popular_products,'related_products'=>$related_products,"Sale"=>$Sale])->layout('layouts.base');
    }
  
}
