<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order extends Model
{
    protected $primaryKey = 'purchase_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
