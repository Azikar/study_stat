<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\User;

class UserRepo implements UserInterface
{
    public function __construct()
    {
        $this->user=new User();
    }
    public function getUser($nickname){
        return $this->user->get_user_by_nickname($nickname);
    }
    public function getUserById($id){
        return $this->user->get_User_Name_By_Id($id);
    }
    public function getUserAchievements($user){
        return $user->achievements()->get();
    }
    public function getUserCertificates($user){
        return $user->certificates()->get();
    }
    public function getUserCourses($user){
        return $user->courses()->get();
    }
    public function getUserRecommentadions($user){
        return $user->recommendations()->get();
    }
    
}