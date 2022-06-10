<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Category;

use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{

    public $name;
    public $slug;
    public function GenerateSlug(){
        $this->slug =str::slug($this->name);

    }
    public function saveCategory()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('success_info','category created succesfuly');
        

    }
    
    public function render()
    {
      
        return view('livewire.admin.admin-category-component',['categories'=>Category::paginate(6)])->layout("layouts.base");
    }
}
