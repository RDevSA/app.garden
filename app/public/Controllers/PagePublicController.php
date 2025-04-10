<?php

namespace App\Public\Controllers;


use Core\libs\Twig\Twig;
use Module_Header\HeaderController;
use Core\BaseController;

class PagePublicController extends BaseController
{

    public function init()
    {
        echo '<br>'."Класс: ".__CLASS__;
        echo '<br>DB_HOST = '.$_ENV['DB_HOST'];

        HeaderController::index();
        Twig::init();
    }



}