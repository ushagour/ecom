<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditProductComponenet extends Component
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $newimage;
    public $image;
    public $category_id;
    public $product_id;


    public function mount($product_slug)
    {
        $product = Product::where("slug",$product_slug)->first();
            
        $this->name = $product->name;
        $this->slug =$product->slug;
        $this->short_description =$product->short_description;
        $this->description =$product->description;
        $this->regular_price =$product->regular_price;
        $this->sale_price =$product->sale_price;
        $this->SKU =$product->SKU;
        $this->stock_status =$product->stock_status;
        $this->featured =$product->featured;
        $this->quantity =$product->quantity;
        $this->image =$product->image;
        $this->category_id =$product->category_id;
        $this->product_id =$product->id;

   
    }
    // public function GenerateSlug(){
    //     $this->slug = str::slug($this->name);

    // }


    use WithFileUploads;
    public function UpdateProduct()
    {
        $product = Product::find($this->product_id);

        $product->name=  $this->name; 
        $product->slug=  $this->slug;
        $product->short_description=$this->short_description;
        $product->description=  $this->description; 
        $product->regular_price=  $this->regular_price; 
        $product->sale_price=   $this->sale_price;
        $product->SKU=  $this->SKU; 
        $product->stock_status=  $this->stock_status; 
        $product->featured=  $this->featured; 
        $product->quantity=  $this->quantity; 

        if ($this->newimage) {
            
            $imageName = Carbon::now()->timestamp.".".$this->newimage->extension();

            $this->newimage->storeAs('products',$imageName);
    
            $product->image=  $imageName;
        }
    
        $product->category_id=  $this->category_id;

    

        // dd($product);
         $product->save();
     session()->flash('success_info','product updated  succesfuly');

    }

    public function render()
    {
        return view('livewire.admin.edit-product-componenet',["categories"=>Category::all()])->layout('layouts.base');
    }
}
