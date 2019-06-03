<?php

namespace App\Interfaces;

interface Level_progression_calc_Interface
{
    public function calculate_level_progression($lvl, $xp);
    public function remaining_xp($lvl);
    public function progression_persentage($xp, $remaining_xp);

}
