<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $table ="products";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'quantity',
        'sale_price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
