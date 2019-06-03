<?php

namespace App\Services;

use App\Interfaces\Level_progression_calc_Interface;

class Level_progression_calc implements Level_progression_calc_Interface
{
    public function calculate_level_progression($lvl = 0, $xp = 0)
    {
        $xp_needed = $this->remaining_xp($lvl);
        $progression = $this->progression_persentage($xp, $xp_needed);
        return ['xp_needed' => $xp_needed,
            'progression' => $progression];
    }
    public function remaining_xp($lvl = 0)
    {
        return $xp_needed = round((4 * (pow($lvl, 3))) / 5);
    }
    public function progression_persentage($xp = 0, $remaining_xp = 0)
    {

        return ($xp / $remaining_xp) * 100;
    }
}
