<?php

namespace App\Services;

use App\Interfaces\Course_calc_Interface;
use App\Interfaces\Statistics_builder_Interface;
use App\Interfaces\Time_formater_interface;

class Statistics_builder implements Statistics_builder_Interface
{
    protected $course_calc;
    protected $time_formater;
    public function __construct(Course_calc_Interface $course_calc, Time_formater_interface $time_formater)
    {
        $this->course_calc = $course_calc;
        $this->time_formater = $time_formater;
    }
    public function build_statistics($courses, $certificates)
    {
        return [
            'total_courses' => $this->course_calc->total_Courses($courses),
            'total_hours' => $this->time_formater->format_time($this->course_calc->total_Hours($courses)),
            'total_certificates' => $this->course_calc->total_Certificates($certificates),
        ];

    }

}
