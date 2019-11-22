<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = ['name', 'duration', 'ects', 'country', 'university'];

    public function exchanges()
    {
        return $this->hasMany(Semester::class);
    }
}
