<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = [
        'product_name',
        'unit',
        'product_category_id',
        
    ];
}
