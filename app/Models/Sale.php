<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
class Sale extends Model
{
    protected $table ="sales";
    use SoftDeletes, HasFactory;

    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [
        'sale_date',
        'status',
        'created_at',
        'updated_at'
    ];

  
 
    

}

