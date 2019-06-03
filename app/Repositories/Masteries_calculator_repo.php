<?php

namespace App\Repositories;

use App\Interfaces\Complexity_interface;
use App\Interfaces\Masteries_calculator_repo_Interface;
use Illuminate\Support\Facades\DB;

class Masteries_calculator_repo implements Masteries_calculator_repo_Interface
{
    protected $complexity;
    protected $progression_calc;

    public function __construct(Complexity_interface $complexity)
    {
        $this->complexity = $complexity;
    }
    public function Get_user_masteries_data($user)
    {
        $data = $this->Read_mastery_data($user->id);
        return $data;
    }
    public function Read_mastery_data($user_id)
    {
        $user_mastery_data = DB::select('SELECT masteries.title, masteries.color, sum(complexities.given_xp) as xp FROM `users`
        inner JOIN user_courses on user_courses.user_id = users.id
        INNER JOIN courses on courses.id = user_courses.course_id
        INNER join complexities on complexities.id = courses.complexity_id
        inner join course_masteries on course_masteries.course_id = courses.id
        inner join masteries on masteries.id = course_masteries.mastery_id
        where users.id = :id and user_courses.completion = 1
        group by masteries.title', ['id' => $user_id]);
        //$user_mastery_data
        $complexities = $this->complexity->get_complexities();
        //dd($user_mastery_data);
        $data = $this->build_response($user_mastery_data, $complexities);
        return $data;
    }
    public function build_response($user_mastery_data, $complexities)
    {
        $mastery_array = [];
        foreach ($user_mastery_data as $data) {
            $old_treshold = 0;
            foreach ($complexities as $mastery) {

                if ($mastery->xp_threshold <= $data->xp) {
                    $percentage = ($data->xp / $complexities[0]->xp_threshold) * 100;
                    if ($percentage >= 100) {
                        $percentage = 100;
                    }

                    $object = (object) [
                        'title' => $data->title,
                        'percentage' => $percentage,
                        'mastery' => $mastery->title,
                        'color' => $data->color,
                    ];
                    break;
                }
            }

            if (isset($object)) {
                $mastery_array[] = $object;
            }

        }
        return $mastery_array;
    }
}
