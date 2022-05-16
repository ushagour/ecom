<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;



class ShopComponent extends Component
{

    public $sorting;
    public $pagesize;

    public $count = 0;
 
    public function doSomething()
    {
        $this->count++;
    }
    public function mount()
    {
        $this->sorting ="defult";
        $this->pagesize =12;
    }
  
    public function store($product_id,$product_name,$regular_price){

        Cart::add($product_id,$product_name,$regular_price)->associate(Product::class);//frre9 biin Prodcut::class w app/model /
        Session()->flash('success_info','item added to cart');
        return redirect()->route('product.cart');//returniih  l page dyal cart 
        

    }
    use WithPagination;
    public function render()
    {
                    if ($this->sorting=='date') {
                        
                        $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);

                    }else if ($this->sorting =="price") {
                        $products = Product::orderBy('regular_price','ASC')->paginate($this->pagesize);

                    }else if($this->sorting =="price-desc")
                    {
                        $products = Product::orderBy('regular_price','DESC')->paginate($this->pagesize);

                    }else 
                    {
                        $products = Product::paginate($this->pagesize);

                    }
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
  
}
