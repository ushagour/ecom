<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


use App\Models\HomeSlider;

class EditHomeSliderComponent extends Component
{
    public $title ;
    public $subtitle;
    public $price; 
    public $link; 
    public $image; 
    public $newimage; 
    public $status; 
    public $slider_id; 
    
    public function  mount($id)
    {
              $homeslider = HomeSlider::find($id);
              $this->title=    $homeslider->title;
              $this->subtitle= $homeslider->subtitle;
              $this->price=    $homeslider->price;
              $this->link=     $homeslider->link;
              $this->image=    $homeslider->image;
              $this->status =   $homeslider->status;
              $this->slider_id  =$homeslider->id;

    }
    use WithFileUploads;

      public function updateSlider()
        {
            $slider = HomeSlider::find($this->slider_id);
            $slider->title=  $this->title; 
            $slider->subtitle=  $this->subtitle;
            $slider->price=$this->price;
            $slider->link=  $this->link; 
            $slider->status=  $this->status; 
          
            if ($this->newimage) {
                $imageName = "slide-".  Carbon::now()->timestamp.".".$this->newimage->extension();
                $this->newimage->storeAs("slider",$imageName);
                $slider->image =  $imageName;
            }

            $slider->save();
            session()->flash('success_info','slider updated  succesfuly');

        }
    public function render()
    {
        return view('livewire.admin.edit-home-slider-component')->layout('layouts.base');
    }
}
