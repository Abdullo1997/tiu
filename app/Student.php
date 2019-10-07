<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
    public function Faculty()
    {
        $this->hasMany(Faculty::class);
    }
    public function Group()
    {
        $this->hasMany(Group::class);
    }
}
