<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\Category;

use Livewire\WithPagination;
use Cart;



class SearchComponent extends Component
{

    public $sorting;
    public $pagesize;
    public $message;

    public $search;
    public $product_cat;
    public $product_cat_id;


 
    /* nb:In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to. NB: mount() is only ever called when the component is first mounted and will not be called again even when the component is refreshed or rerendered.*/
    public function mount()
    {
        $this->sorting ="defult";
        $this->pagesize =12;
        $this->fill(request()->only('search','product_cat','product_cat_id')); 

    }


  
    public function store($product_id,$product_name,$regular_price){

       
         Cart::add($product_id,$product_name,1,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
        Session()->flash('success_info','item added to cart');
        return redirect()->route('product.cart');//returniih  l page dyal cart 
        

    }
    use WithPagination;
    public function render()
    {
                    if ($this->sorting=='date') {
                        
                        $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('created_at','DESC')->paginate($this->pagesize);

                    }else if ($this->sorting =="price") {
                        $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','ASC')->paginate($this->pagesize);

                    }else if($this->sorting =="price-desc")
                    {
                        $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','DESC')->paginate($this->pagesize);

                    }else 
                    {
                        $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->paginate($this->pagesize);

                    }
        return view('livewire.shop-component',['products'=>$products,'categories'=>Category::all()])->layout("layouts.base");
    }
  
}
