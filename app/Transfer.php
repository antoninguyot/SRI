<?php

namespace App;

use App\Traits\Operation;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model implements Operation
{
    protected $fillable = ['payee', 'purpose', 'amount', 'date'];

    public function toTitle(): string
    {
        return 'Virement à ' . $this->payee;
    }

    public function toNotes(): string
    {
        return $this->purpose ?? '';
    }

    public function toAmount(): float
    {
        return $this->amount;
    }
}
