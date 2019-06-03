<?php

namespace App\Repositories;

use App\Complexity;
use App\Interfaces\Complexity_interface;

class ComplexityRepo implements Complexity_interface
{
    public function __construct()
    {
        $this->complesity = new Complexity();
    }
    public function get_complexities()
    {
        return $this->complesity->orderby('xp_threshold', 'desc')->get();

    }
}
