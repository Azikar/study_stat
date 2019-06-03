<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\CertificatesInterface;
use App\Interfaces\Level_progression_calc_Interface;
use App\Interfaces\Masteries_calculator_repo_Interface;
use App\Interfaces\RecommendationInterface;
use App\Interfaces\Statistics_builder_Interface;
use App\Interfaces\UserInterface;

class ProfileController extends Controller
{

    protected $user;
    protected $progression_calc;
    protected $statistics;
    protected $recommendationsRepo;
    protected $rectificatesRepo;
    protected $mastery_calc;

    public function __construct(UserInterface $user, Level_progression_calc_Interface $progression_calc, Statistics_builder_Interface $statistics, RecommendationInterface $recommendationsRepo, CertificatesInterface $certificatesRepo, Masteries_calculator_repo_Interface $mastery_calc)
    {
        $this->user = $user;
        $this->progression_calc = $progression_calc;
        $this->statistics = $statistics;
        $this->recommendationsRepo = $recommendationsRepo;
        $this->certificatesRepo = $certificatesRepo;
        $this->mastery_calc = $mastery_calc;
    }
    public function user_profile($nickname)
    {

        $user = $this->user->getUser($nickname);
        $progression = $this->progression_calc->calculate_level_progression($user->lvl, $user->current_xp);
        $certificates = $this->user->getUserCertificates($user);
        return view('main_page.main_page', [
            'about' => $user->about,
            'progression' => [
                'lvl' => $user->lvl,
                'current_xp' => $user->current_xp,
                'xp_needed' => $progression['xp_needed'],
                'progression_%' => $progression['progression']],
            'achievements' => $this->user->getUserAchievements($user),
            'statistics' => $this->statistics->build_statistics($this->user->getUserCourses($user), $certificates),
            'recommendations' => $this->recommendationsRepo->getAuthors($this->user->getUserRecommentadions($user)),
            'certificates' => $certificates,
            'user' => $user,
            'mastered' => $this->mastery_calc->Get_user_masteries_data($user),
            'featured' => $this->certificatesRepo->getFeaturedCertificate($user),
        ]);
    }
}
