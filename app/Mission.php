<?php

namespace App;

use App\Traits\HasPeriod;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasPeriod;
    protected $fillable = ['first_name', 'last_name', 'location', 'purpose', 'cost', 'begins_at', 'ends_at'];
}
