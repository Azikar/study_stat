<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_courses')->withPivot('last_accessed', 'time_spent', 'completion');
    }

    public function certificates()
    {
        return $this->belongsToMany(Course::class, 'user_certificates')->withPivot('featured', 'created_at', 'certificate_img');
    }

    public function recommendations()
    {
        return $this->hasMany('App\Recommendation', 'user_id', 'id');
    }

    public function get_user_by_nickname($name)
    {
        return $this->where('nickname', $name)->select(['id', 'name', 'about', 'current_xp', 'lvl'])->firstOrFail();
    }

    public function get_User_Name_By_Id($id)
    {
        return $this->select(['id', 'name'])->findOrFail($id);
    }
}
