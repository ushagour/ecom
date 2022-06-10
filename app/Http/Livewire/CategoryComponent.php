<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;

use Cart;

class CategoryComponent extends Component
{
    
    public $sorting;
    public $pagesize;
    public $category_slug;


 
    /* nb:In Livewire components, you use mount() instead of a class constructor __construct() like you may be used to. NB: mount() is only ever called when the component is first mounted and will not be called again even when the component is refreshed or rerendered.*/
    public function mount($category_slug)
    {
        $this->sorting ="defult";
        $this->pagesize =12;
        $this->category_slug = $category_slug;
    }



  
    public function store($product_id,$product_name,$regular_price){

       
         Cart::add($product_id,$product_name,1,$regular_price)->associate('App\Models\Product');//frre9 biin Prodcut::class w app/model /
        Session()->flash('success_info','item added to cart');
        return redirect()->route('product.cart');//returniih  l page dyal cart 
        

    }
    use WithPagination;
    public function render()
    {

    $category = Category::where('slug',$this->category_slug)->first();
    $category_id = $category->id;
    $category_name = $category->name;
    // dd($category);

                if ($this->sorting=="date") {
                    
                    $products = Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
                    
                    // dd($products);

                }else if ($this->sorting =="price") {
                    $products = Product::where('category_id',$category_id)->orderBy('regular_price','ASC')->paginate($this->pagesize);
                }else if($this->sorting =="price-desc")
                {
                    $products = Product::where('category_id',$category_id)->orderBy('regular_price','DESC')->get($this->pagesize);


                }else 
                {
                    $products = Product::where('category_id',$category_id)->paginate($this->pagesize);
                    //  dd($products);
                    

                }

                
    return view('livewire.category-component',['products'=>$products,'categories'=>Category::all(),'category_name'=>$category_name])->layout('layouts.base');
}
}
