<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'nationality', 'type'];

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getNationalityAttribute($cc)
    {
        return config('cc.' . $cc);
    }

    public function getTypeAttribute($type)
    {
        switch($type){
            case 'local': return 'Local';
            case 'foreign': return 'Étranger';
        }
    }
}
