<?php


namespace Mb7\EzPhp\Mvc\View;


use Mb7\EzPhp\Mvc\Layout\LayoutInterface;

interface ViewInterface extends LayoutInterface
{
    public function setViewBasePath(string $basePath);

    public function render(string $viewName, array $params = []);
}