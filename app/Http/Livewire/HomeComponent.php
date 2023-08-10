<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\Sale;

class HomeComponent extends Component
{
    public function render()
    {
            $sliders =  HomeSlider::where("status",true)->get();
            $Lproducts =  Product::orderBy("created_at","DESC")->get()->take(8);

            $cats = explode(",", HomeCategory::find(1)->sel_categories);//cats is an array of home sel categories 

            $categories = Category::whereIn("id",$cats)->get(); //fetching  categories Model  where id in array of sel categories   
                
            $sProducts =  Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
            $onSale =  Sale::where("status",true)->first(); 
            //  dd($onSale->status);
       return view('livewire.home-component',
       ["homesliders" => $sliders,"Lproducts"=>$Lproducts,"categories"=>$categories
       ,"no_of_products"=>HomeCategory::find(1)->no_of_products,"onSale"=>$onSale
       ,"sProducts"=>$sProducts
       ])->layout('layouts.base');
    }
}
