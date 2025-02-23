<?php

namespace App\Public\Controllers;

use Core\BaseController;

class PagePublicController extends BaseController
{
    public function init()
    {
        echo '<br>'."Класс: ".__CLASS__;
    }
}