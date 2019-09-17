<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material_Category extends Model
{
    protected $primaryKey = 'material_category_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
