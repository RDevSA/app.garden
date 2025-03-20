<?php

namespace Module_Header;
use Core\Builder\Module;
use Core\Builder\ModuleBuilder;
use Core\Builder\NewModuleBuilder;

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
        $headerBuilder = new NewModuleBuilder();
        $headerBuilder
            ->setHtml('headerNew');
        NewModuleBuilder::build();
    }

}