<?php

namespace App\Public\Controllers;

use Core\libs\Twig\Twig;
use Core\Libs\Twig\v2_Twig;
use Module_Header\HeaderController;
use Core\BaseController;
use Module_Menu\MenuController;

class PagePublicController extends BaseController
{

    public function init()
    {
        echo '<br>'."Класс: ".__CLASS__;
        echo '<br>DB_HOST = '.$_ENV['DB_HOST'];

        HeaderController::index();
        MenuController::index();
        $twig = new Twig();
        //$twig = new v2_Twig();
        $twig->init();
    }



}