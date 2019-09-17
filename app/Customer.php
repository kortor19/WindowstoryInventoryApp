<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $primaryKey = 'customer_id';
    public $incrementing = true;
    protected $keyType = 'string';
}
