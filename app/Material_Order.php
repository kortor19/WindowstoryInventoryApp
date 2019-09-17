<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material_Order extends Model
{
    protected $primaryKey = 'material_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
