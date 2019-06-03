<?php

namespace App\Interfaces;

interface Course_calc_Interface
{
    public function total_Courses($courses);
    public function total_Hours($courses);
    public function total_Certificates($certificates);

}
