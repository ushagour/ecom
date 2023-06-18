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
        'order_id',
        'firstName',
        'lastName',
        'mobile',
        'email',
        'line',
        'line1',
        'city',
        'province',
        'country',
        'zipcode',     
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    

}

