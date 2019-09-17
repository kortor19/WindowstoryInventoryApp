<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $primaryKey = 'product_category_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
