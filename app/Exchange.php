<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $fillable = ['student_id', 'study_id', 'begins_at', 'ends_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function getBeginsAtAttribute($begins_at)
    {
        if(is_null($begins_at)){ return null; }
        return Carbon::createFromFormat('d/m/Y', $begins_at);
    }

    public function getEndsAtAttribute($ends_at)
    {
        if(is_null($ends_at)){ return null; }
        return Carbon::createFromFormat('d/m/Y', $ends_at);
    }
}
