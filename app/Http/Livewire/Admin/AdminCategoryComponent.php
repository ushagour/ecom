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
    
    protected $rules = [
        'name'=>'required|min:6',
        'slug'=>'required|unique:categories',
    ];


    public function GenerateSlug(){
        $this->slug =str::slug($this->name);

    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveCategory()
    {
        $this->validate();

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('success_info','category created succesfuly');
    }
    

    public function UpdateCategory($id)
    {
        
        $category =Category::find($id)->first();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->update();

    }

    public function render()
    {
      
        return view('livewire.admin.admin-category-component',['categories'=>Category::paginate(30)])->layout("layouts.base");
    }
}
