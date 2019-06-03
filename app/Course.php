<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function courses()
    {
        return $this->belongsToMany(User::class, 'user_courses')->get();
    }
    public function certificates()
    {
        return $this->belongsToMany(User::class, 'user_certificates')->get();
    }

}

