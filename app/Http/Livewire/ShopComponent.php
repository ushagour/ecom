<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;

use Livewire\Component;
use Livewire\WithPagination;
use Cart;



class ShopComponent extends Component
{

    // public $sorting;
    // public $pagesize;
  
 
   


 
    /* nb:In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to. NB: mount() is only ever called when the component is first mounted and will not be called again even when the component is refreshed or rerendered.*/
    public function mount()
    {
        $this->sorting ="defult";
        $this->pagesize =12;
        // $this->fill(['message' => 'Hello World!']);
    

    }

  
    public function store($product_id,$product_name,$regular_price){

       
         Cart::add($product_id,$product_name,1,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
        Session()->flash('success_info','item added to cart');
        return redirect()->route('product.cart');//returniih  l page dyal cart 
        

    }
    use WithPagination;
    public function render()
    {
                    if ($this->sorting == "date") {
                        
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
        return view('livewire.shop-component',['products'=>$products,'categories'=>Category::all()])->layout("layouts.base");
    }
  
}
