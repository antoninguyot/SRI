<?php

namespace App;

use App\Traits\HasPeriod;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasPeriod;
    protected $fillable = ['student_id', 'study_id', 'begins_at', 'ends_at', 'type'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }
}
