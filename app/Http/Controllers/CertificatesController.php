<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\UserInterface;

use App\Interfaces\CertificatesInterface;
class CertificatesController extends Controller {

    protected $user;

    protected $cectificatesRepo;

    public function __construct(UserInterface $user, CertificatesInterface $certificatesRepo)
    {
        $this->user=$user;
        $this->certificatesRepo=$certificatesRepo;
    }
    public function get_User_Certificates($nickname, $ammount=3){
        $user=$this->user->getUser($nickname);
        return $response = response()->json([
            'certificate_info'=>$this->certificatesRepo->getCertificateLimit($user,$ammount),
            'user_info'=>$user]);
    }
}