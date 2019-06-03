<?php

namespace App\Services;

use App\Interfaces\Course_calc_Interface;

class Course_calc implements Course_calc_Interface
{
    public function total_Courses($courses)
    {
        $total = 0;
        foreach ($courses as $course) {
            if ($course->pivot->completion === 1) {
                $total++;
            }

        }
        return $total;
    }
    public function total_Hours($courses)
    {
        $total = 0;

        foreach ($courses as $course) {
            $total += $course->pivot->time_spent;
        }

        return $total;
    }
    public function total_Certificates($certificates)
    {
        return count($certificates);
    }
}
