<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function Group()
    {
        $this->belongsTo(Group::class);
    }
    public function Student()
    {
        $this->belongsTo(Student::class);
    }
    public function Teacher()
    {
        $this->belongsTo(Teacher::class);
    }
}
