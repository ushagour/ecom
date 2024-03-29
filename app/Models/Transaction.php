<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
class Transaction extends Model
{
    use SoftDeletes, HasFactory;

    protected $table ="transactions";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'mode',
        'status',
        'order_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function Ordre()
    {
        return $this->belongsTo(Ordre::class);
    }

}
