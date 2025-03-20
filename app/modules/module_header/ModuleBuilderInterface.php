<?php

namespace Module_Header;

interface ModuleBuilderInterface
{
    public function setContent($content);
    public function setHtml($html);
    public function setCss(string $css);
}