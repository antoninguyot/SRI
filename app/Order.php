<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['designation', 'supplier', 'quantity', 'value', 'date', 'currency'];
}
