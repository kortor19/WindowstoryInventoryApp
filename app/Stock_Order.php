<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_Order extends Model
{
    protected $primaryKey = 'stock_id';
    public $incrementing = true;
    protected $keyType = 'bigInteger';
}
