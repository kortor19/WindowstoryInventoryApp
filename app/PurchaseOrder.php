<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'quantity',
        'price_per_unit',
        'total',
        'tax',
        'material_id'
    ];
}
