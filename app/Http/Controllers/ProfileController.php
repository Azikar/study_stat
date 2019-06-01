<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\UserInterface;
use App\interfaces\Level_progression_calc_Interface;
use App\interfaces\Statistics_builder_Interface;
class ProfileController extends Controller {

    protected $user;
    protected $progression_calc;
    protected $statistics;

    public function __construct(UserInterface $user, Level_progression_calc_Interface $progression_calc,Statistics_builder_Interface $statistics)
    {
        $this->user=$user;
        $this->progression_calc=$progression_calc;
        $this->statistics=$statistics;
    }
    public function user_profile($nickname){
        
        $user=$this->user->getUser($nickname);
        $achievements=$user->achievements();
        $progression=$this->progression_calc->calculate_level_progression($user->lvl,$user->current_xp);

        $courses=$user->courses();
        $certificates=$user->certificates();
        $statistics=$this->statistics->build_statistics($courses,$certificates);
       

        return view('main_page.main_page',['about'=>$user->about,
        'progression'=>['lvl'=>$user->lvl, 'current_xp'=>$user->current_xp,'xp_needed'=>$progression['xp_needed'], 'progression_%'=>$progression['progression']],
        'achievements'=>$achievements,
        'statistics'=>$statistics,
        ]);
    }
}
