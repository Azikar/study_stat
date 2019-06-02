<?php

namespace App\Interfaces;


interface CertificatesInterface 
{
    public function getAuthors($certificates);
    public function getCertificateLimit($user,$limit);
    public function getFeaturedCertificate($user);
}