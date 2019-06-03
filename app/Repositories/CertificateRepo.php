<?php

namespace App\Repositories;

use App\Interfaces\CertificatesInterface;
use App\Interfaces\UserInterface;

class certificateRepo implements CertificatesInterface
{
    protected $user;
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getAuthors($certificates)
    {
        // dd($recommendations->join('Users'));
        foreach ($certificates as $key => $certificate) {
            $certificates[$key]->author = $this->user->getUserById($certificate->author_id);
        }
        //dd($recommendations);
        return $certificates;
    }
    public function getCertificateLimit($user, $limit)
    {
        if (is_numeric($limit)) {
            // dd("meh");
            return $user->certificates()->orderBy('created_at', 'desc')->take($limit)->get();
        }
        if ($limit === 'all') {
            return $user->certificates()->orderBy('created_at', 'desc')->get();
        }

    }
    public function getFeaturedCertificate($user)
    {
        return $user->certificates()->where('featured', 1)->get();
    }

}
