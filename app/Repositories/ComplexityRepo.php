<?php

namespace App\Repositories;

use App\Interfaces\Complexity_interface;
use App\Complexity;

class ComplexityRepo implements Complexity_interface
{
    public function __construct()
    {
        $this->complesity=new Complexity();
    }
    public function get_complexities(){
        return $this->complesity->orderby('xp_threshold','desc')->get();

    }
}
