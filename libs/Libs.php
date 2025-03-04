<?php

namespace Libs;
use Dotenv\Dotenv;
use Fenom;

class Libs
{


    public static function dotEnv():void
    {
        $dotenv =Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
        $dotenv->load();
    }

    public static function fenom()
    {
        $temps = $_SERVER['DOCUMENT_ROOT'].'core/temps';
        $fenom = Fenom::factory($temps);
        $fenom->display('test.html');
    }

}