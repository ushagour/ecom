<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\HomeSlider;

use Illuminate\Support\Str;
use Livewire\WithPagination;
class AdminHomeSliderComponent extends Component
{
    use WithPagination;
 

    public function DeleteHomeSlider($id)
    {   
        $HomeSlider = HomeSlider::find($id);
        $HomeSlider->delete();
        session()->flash('success_info','HomeSlider deleted');

    }
    public function render()
    {

        $HomeSliders = HomeSlider::paginate(8);

        return view('livewire.admin.admin-home-slider-component',["homesliders"=> $HomeSliders])->layout("layouts.base");
    }
}
