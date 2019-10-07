<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
    public function Faculty()
    {
        $this->belongsTo(Faculty::class);
    }
}
