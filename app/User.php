<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
