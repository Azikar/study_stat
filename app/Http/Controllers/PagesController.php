<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

   
    public function __construct()
    {

    }
    public function user_profile(){
        return view('main_page.main_page');
    }
}
