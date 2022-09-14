<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;

use Livewire\Component;
use Livewire\WithPagination;
use Cart;



class ShopComponent extends Component
{

    public $sorting;
    public $pagesize;
    public $max_price;
    public $min_price;
  
 
   


 
    /* nb:In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to. NB: mount() is only ever called when the component is first mounted and will not be called again even when the component is refreshed or rerendered.*/
    public function mount()
    {
        $this->sorting ="defult";
        $this->pagesize =12;
        $this->max_price = 1000;
        $this->min_price = 1;
    

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
                        
                        $products = Product::whereBetween("regular_price",[$this->min_price,$this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);

                    }else if ($this->sorting =="price") {
                        $products = Product::whereBetween("regular_price",[$this->min_price,$this->max_price])->sorderBy('regular_price','ASC')->paginate($this->pagesize);

                    }else if($this->sorting =="price-desc")
                    {
                        $products = Product::whereBetween("regular_price",[$this->min_price,$this->max_price])->sorderBy('regular_price','DESC')->paginate($this->pagesize);

                    }else 
                    {
                        $products = Product::whereBetween("regular_price",[$this->min_price,$this->max_price])->paginate($this->pagesize);

                    }
        return view('livewire.shop-component',['products'=>$products,'categories'=>Category::all()])->layout("layouts.base");
    }
  
}
