<?php

namespace Module_Menu;
use Core\Builder\ModuleBuilder;

class MenuController
{
    public static function index()
    {
        $menuBuilder = new ModuleBuilder();
        $menuBuilder
            ->setHtml('menu')
            ->setCss('menuCSS')
            ->setJs('menuJs')
            ->build();
    }
}