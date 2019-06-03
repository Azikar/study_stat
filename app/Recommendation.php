<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    public function Author()
    {
        return $this->belongsTo('App\User', 'author_id', 'id')->select(['id', 'name', 'possition', 'profile_picture'])->first();
    }
}
