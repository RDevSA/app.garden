<?php

namespace Module_Header;
use Core\Builder\ModuleBuilder;

class HeaderController
{
   /*
   public static function index()
    {
        $headerBuilder = new ModuleBuilder(new Module());
        $headerBuilder
            ->setHtml('header')
            ->build();
    }
   */
    public static function index(){
        $headerBuilder = new ModuleBuilder();
        $headerBuilder
            ->setHtml('headerNew')
            ->setCss('headerCss')
            ->build();
    }

}