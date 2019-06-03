<?php

namespace App\Interfaces;

interface UserInterface
{
    public function getUser($nickname);
    public function getUserById($id);
    public function getUserCertificates($user);
    public function getUserAchievements($user);
    public function getUserCourses($user);
    public function getUserRecommentadions($user);
}
