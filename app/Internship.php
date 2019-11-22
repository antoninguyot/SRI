<?php

namespace App;

use App\Traits\HasPeriod;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasPeriod;
    protected $fillable = ['student_id', 'company', 'country', 'begins_at', 'ends_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
