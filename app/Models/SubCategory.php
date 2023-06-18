<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    protected $gurded=[];
    protected $table ="sub_categories";

    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
