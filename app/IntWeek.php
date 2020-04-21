<?php

namespace App;

use App\Traits\HasPeriod;
use Illuminate\Database\Eloquent\Model;

class IntWeek extends Model
{
    use HasPeriod;
    protected $fillable = ['name', 'type', 'fee', 'students', 'begins_at', 'ends_at'];

    public function getFTypeAttribute()
    {
        switch ($this->type){
            case 0: return 'Entrante';
            case 1: return 'Sortante';
            default: return 'Autre';
        }
    }

    public function getFCostAttribute()
    {
        return $this->fee * $this->students;
    }
}
