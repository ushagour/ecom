<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\HomeCategory;

class AdminHomeCategoriesComponent extends Component
{

    public $selected_categories=[];
    public $no_of_products;
 

    public function mount()
    {

        $homecategory = HomeCategory::find(1);
        $this->selected_categories= explode(',',$homecategory->sel_categories); // explode  php function generate a array  from string  splited by ","
        $this->no_of_products = $homecategory->no_of_products;

    }
    public function updatecat()
    {

        $homecategory = HomeCategory::find(1);
        $homecategory->sel_categories = implode(',',$this->selected_categories); // implode php function generate a string splited by ","
        $homecategory->no_of_products = $this->no_of_products;
        $homecategory->save();
        session()->flash('success_info','items updated succesfuly');


    }
    public function render()
    {


        return view('livewire.admin.admin-home-categories-component',['categories'=>Category::all()])->layout("layouts.base");
    }
}
