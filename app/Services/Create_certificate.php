<?php
namespace App\Services;

use App\Interfaces\Create_certificate_Interface;
use Intervention\Image\ImageManagerStatic as Image;

class Create_certificate implements Create_certificate_Interface
{

    public function __construct()
    {

    }
    public static function create_certificate($certificate, $user)
    {

        $img = Image::make('img/certificates_templates/certificate.jpg');
        //     $img->text('This is a example', 120, 100, function($font) {
        //     //    $font->file(public_path('/fonts/Montserrat-Regular.ttf'));
        //        $font->size(28);
        //        $font->color('#e1e1e1');
        //        $font->align('center');
        //        $font->valign('bottom');
        //        $font->angle(90);
        //    });
        return $img->response('jpg');
        // $img->save(public_path('images/certificate.jpg'));
    }

}
