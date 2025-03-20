<?php

namespace Module_Header;
use Core\Builder\Module;
use Core\Builder\ModuleBuilder;

class HeaderController
{
    public static function index()
    {
        $headerBuilder = new ModuleBuilder(new Module());
        $headerBuilder
            ->setHtml('header')
            ->build();
    }
}