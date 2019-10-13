<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialOrder extends Model
{

    protected $fillable = [
        'material_name',
        'material_category_id',
        'unit_of_measurement',
        'reorder_points',
        'variant_id', 
    ];
}
