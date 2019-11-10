<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $fillable = ['student_id', 'study_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }
}
