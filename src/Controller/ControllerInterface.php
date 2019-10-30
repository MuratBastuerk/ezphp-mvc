<?php


namespace Mb7\EzPhp\Mvc\Controller;


use Mb7\EzPhp\Mvc\View\ViewInterface;
use Mb7\EzPhp\Router\RouterInterface;

interface ControllerInterface
{
    public function setRouter(RouterInterface $router);
    public function getRouter() : RouterInterface;
    public function setView(ViewInterface $view);
    public function setLayout($layoutName);
    public function disableLayout();
    public function enableLayout();
}