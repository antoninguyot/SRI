<?php

namespace App;

use App\Traits\HasPeriod;
use App\Traits\Operation;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model implements Operation
{
    use HasPeriod;

    protected $fillable = ['first_name', 'last_name', 'location', 'purpose', 'cost', 'begins_at', 'ends_at', 'type'];

    public function toTitle(): string
    {
        return 'Mission de ' . $this->first_name . ' ' . $this->last_name;
    }

    public function toNotes(): string
    {
        return 'Vers ' . $this->location . '. ' . ($this->purpose ?? '');
    }

    public function toAmount(): float
    {
        return $this->cost;
    }
}
