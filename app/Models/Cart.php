<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'quantity',
        'product_id',
    ];

    function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
