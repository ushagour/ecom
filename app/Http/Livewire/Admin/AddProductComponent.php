<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;




class AddProductComponent extends Component
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
    public $image;
    public $category_id;
    public function mount()
    {
        $this->stock_status="instock";
        $this->featured=0;
    }
    public function GenerateSlug(){
        $this->slug = str::slug($this->name);

    }
    use WithFileUploads;

    public function save()
    {

        $product = new Product();
     
            $product->name=  $this->name; 
            $product->slug=  str::slug($this->name);
            $product->short_description=   $this->short_description;
            $product->description=  $this->description; 
            $product->regular_price=  $this->regular_price; 
            $product->sale_price=   $this->sale_price;
            $product->SKU=  $this->SKU; 
            $product->stock_status=  $this->stock_status; 
            $product->featured=  $this->featured; 
            $product->quantity=  $this->quantity; 
            $imageName = Carbon::now()->timestamp.".".$this->image->extension();
            $this->image->storeAs("products",$imageName);
            $product->image=  $imageName;
            $product->category_id=  $this->category_id;
    

        $product->save();
         session()->flash('success_info','product added succesfuly');


    }

    public function render()
    {


        return view('livewire.admin.add-product-component',["categories"=>Category::all()])->layout('layouts.base');
    }
}
