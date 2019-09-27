<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    // protected $primaryKey = 'variant_id';
    // public $incrementing = true;
    // protected $keyType = 'string';

    protected $fillable = [
        'variant_code',
        'color_code',
        'control_side',
        'cord_color',
        'cord_length',
        'head_rail_color',
        'bottom_rail_color',
        'side_by_side',
        'default_price',

    ];
}
