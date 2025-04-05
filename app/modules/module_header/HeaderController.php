<?php

namespace Module_Header;
use Core\Builder\ModuleBuilder;

class HeaderController
{

    public static function index(){
        $headerBuilder = new ModuleBuilder();
        $headerBuilder
            ->setHtml('headerNew')
            ->setCss('headerCss')
            ->setJs('headerJS')
            ->build();
    }

}