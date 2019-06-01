<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function achievements(){
        return $this->belongsToMany(Achievement::class, 'user_achievements')->get();
    }
    public function courses(){
        return $this->belongsToMany(Course::class, 'user_courses')->withPivot('last_accessed','time_spent','completion')->get();
    }

    public function certificates(){
        return $this->belongsToMany(Course::class, 'user_certificates')->withPivot('featured')->get();
    }

    public function get_user_by_nickname($name)
    {
        return $this->where('nickname', $name)->firstOrFail();
    }
}
