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
   
    
}