<?php
namespace App\Services;

use App\Interfaces\Time_formater_interface;

class Time_formater implements Time_formater_interface
{
    public function Format_time($time){
         return $time/3600;   
    }
  
}