<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

use App\Models\HomeSlider;

class AddHomeSliderComponent extends Component
{
    public $title ;
    public $subtitle;
    public $price; 
    public $link; 
    public $image; 
    public $status; 
    public function mount()
    {
        $this->status = true;

    }
    use WithFileUploads;

  public function SaveHomeSlider()
  {

        $HomeSlider = new HomeSlider();
        $HomeSlider->title = $this->title;
        $HomeSlider->subtitle = $this->subtitle;
        $HomeSlider->price = $this->price;
        $HomeSlider->link = $this->link;
        $imageName = "slide-".  Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs("slider",$imageName);
        $HomeSlider->image = $imageName;
        $HomeSlider->status = $this->status;
        $HomeSlider->save();
        session()->flash('success_info','HomeSlider added successfully ');
 
  }

    public function render()
    {
        return view('livewire.admin.add-home-slider-component')->layout('layouts.base');
    }
}
