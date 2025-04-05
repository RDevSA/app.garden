<?php

namespace App\Public\Controllers;


use Module_Header\HeaderController;
use Core\BaseController;

use Libs\Libs;

class PagePublicController extends BaseController
{

    public function init()
    {
        echo '<br>'."Класс: ".__CLASS__;
        echo '<br>DB_HOST = '.$_ENV['DB_HOST'];

        HeaderController::index();
        Libs::twig();
        //Libs::render();
    }



}