<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\HomeSlider;

use Illuminate\Support\Str;
use Livewire\WithPagination;
class AdminHomeSliderComponent extends Component
{
    use WithPagination;
 

    public function render()
  {
    $HomeSliders  = HomeSlider::all();
    return view('livewire.admin.admin-home-slider-component', compact('HomeSliders'))->layout('layouts.base');
  }

  public function deleteSlide($slide_id)
  {
    HomeSlider::find($slide_id)->delete();

    session()->flash('message', 'The data has been deleted.');
  }
}
