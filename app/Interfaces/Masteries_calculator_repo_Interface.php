<?php

namespace App\Interfaces;

interface Masteries_calculator_repo_Interface
{
    public function Get_user_masteries_data($user);
    public function Read_mastery_data($nickname);
    public function build_response($user_mastery_data, $complexities);
}
