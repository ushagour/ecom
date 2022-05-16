<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public function doSomething()
    {
       return redirect()->route('checkout');

    }
    public function store($product_id,$product_name,$regular_price){

        Cart::add($product_id,$product_name,$regular_price)->associate(Product::class);//frre9 biin Prodcut::class w app/model /
        Session()->flash('success_info','item added to cart');
        return redirect()->route('product.cart');//returniih  l page dyal cart 
        

    }
    public $slug;

    /* nb:In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to. NB: mount() is only ever called when the component is first mounted and will not be called again even when the component is refreshed or rerendered.*/
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['product'=>$product,'popular_products'=>$popular_products,'related_products'=>$related_products])->layout('layouts.base');
    }
  
}
