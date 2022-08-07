<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminHomeCategoriesComponent extends Component
{

    public $sel_categories=[];
    public $no_of_products;
 
public function mount()
{
    $this->sel_categories = $sel_categories;
    $this->no_of_products = $no_of_products;
}
    public function add()
    {
        echo "test";
    }
    public function render()
    {


        return view('livewire.admin.admin-home-categories-component',['categories'=>Category::all()])->layout("layouts.base");
    }
}
