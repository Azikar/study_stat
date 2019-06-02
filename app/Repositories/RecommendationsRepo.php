<?php

namespace App\Repositories;

use App\Interfaces\RecommendationInterface;

class RecommendationRepo implements RecommendationInterface
{
    public function __construct()
    {
       
    }

    public function getAuthors($recommendations){
        // dd($recommendations->join('Users'));
        foreach($recommendations as $key=>$recommendation){
            $recommendations[$key]->author=$recommendation->Author();
        }
        //dd($recommendations);
        return $recommendations;
    }
    
}