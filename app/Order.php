<?php

namespace App;

use App\Traits\Operation;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements Operation
{
    protected $fillable = ['designation', 'supplier', 'quantity', 'value', 'date', 'currency'];

    public function getTotalAttribute()
    {
        return $this->value * $this->quantity;
    }

    public function toTitle(): string
    {
        return 'Commande à ' . $this->supplier;
    }

    public function toNotes(): string
    {
        return $this->quantity . ' unités. ' . $this->designation;
    }

    public function toAmount(): float
    {
        return $this->total;
    }
}
