<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
class Order extends Model
{
    
    use SoftDeletes, HasFactory;
    Protected  $table="orders";
    
  protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at'
  ];

  protected $fillable = [
      'tax',
      'total',
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
      'status',
      'is_shipping_difrent',
      'created_at',
      'updated_at',
      'deleted_at'
  ];
  protected function serializeDate(DateTimeInterface $date)
  {
      return $date->format('Y-m-d H:i:s');
  }

}
