<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sale;

class AdminOnsaleComponent extends Component
{

     public $sale_date;
     public $status;


    public function mount()
    {
                $sale = Sale::find(1)->first(); //always find the first one and update it 
                $this->sale_date = $sale->sale_date; 
                $this->status = $sale->status; 
    }
     public function UpdateSale()
     {
                $sale = Sale::find(1)->first();
                $sale->sale_date = $this->sale_date;
                $sale->status = $this->status;
                $sale->save();
                session()->flash('success_info','category created succesfuly');


     }
    public function render()
    {


        return view('livewire.admin.admin-onsale-component')->layout('layouts.base');;
    }
}
