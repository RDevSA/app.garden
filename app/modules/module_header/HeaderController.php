<?php

namespace Module_Header;
use Core\Builder\ModuleBuilder;

class HeaderController
{
    public static function index()
    {
        $headerBuilder = new ModuleBuilder();
        $headerBuilder
            ->setHtml('header')
            ->setCss('header')
            ->setJs('headerJS')
            ->build();
    }

}