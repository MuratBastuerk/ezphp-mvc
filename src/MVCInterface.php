<?php


namespace Mb7\EzPhp\Mvc;


use Mb7\EzPhp\Mvc\Controller\AbstractController;
use Mb7\EzPhp\Mvc\View\ViewInterface;
use Mb7\EzPhp\Router\RouterInterface;

interface MVCInterface
{
    public function setRouter(RouterInterface $router);
    public function getRouter(): RouterInterface;
    public function setView(ViewInterface $view);
    public function getView(): ViewInterface;
    public function getController(): AbstractController;
}