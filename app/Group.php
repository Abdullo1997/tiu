<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function Faculty()
    {
        $this->hasMany(Faculty::class);
    }
}
