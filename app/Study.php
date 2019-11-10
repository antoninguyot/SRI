<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = ['name', 'duration', 'ects', 'country', 'university'];
}
