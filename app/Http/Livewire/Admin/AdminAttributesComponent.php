<?php

namespace App\Http\Livewire\Admin;

// use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesComponent extends Component
{
    public function render()
    {
        $pattributes = [];
        return view('livewire.admin.admin-attributes-component', compact('pattributes'))->layout('layouts.base');
    }

    public function deleteAttribute($attribute_id)
    {
        // ProductAttribute::find($attribute_id)->delete();
        session()->flash('message', 'The attribute has been deleted.');
    }
}