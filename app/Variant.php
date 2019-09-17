<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $primaryKey = 'variant_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
