<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithPagination;
 use Illuminate\Support\Str;

class AdminSubCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;
    
    protected $rules = [
        'name'=>'required|min:6',
        'slug'=>'required|unique:sub_categories',
        'category_id'=>'required',
    ];


    public function GenerateSlug(){
        $this->slug =str::slug($this->name);

    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveSubCategory()
    {
        $this->validate();

        $sub_cat = new SubCategory();
        $sub_cat->name = $this->name;
        $sub_cat->slug = $this->slug;
        $sub_cat->category_id = $this->category_id;
        $sub_cat->save();
        session()->flash('success_info','category created succesfuly');
    }
    

    public function UpdateSubCategory($id)
    {
        
        $sub_cat =SubCategory::find($id)->first();
        $sub_cat->name = $this->name;
        $sub_cat->slug = $this->slug;
        $sub_cat->category_id = $this->category_id;
        $sub_cat->update();

    }
    public function render()
    {

        return view('livewire.admin.admin-sub-category-component',['categories'=>Category::all(),'subcats'=>SubCategory::paginate(8)])->layout('layouts.base');
    }
}
