<?php


namespace Mb7\EzPhp\Mvc\Routing;


use Mb7\EzPhp\Mvc\Controller\AbstractController;
use Mb7\EzPhp\Router\RouterInterface;

interface MVCRouterInterface extends RouterInterface
{
    public function resolveRoute(AbstractController $controller);

    public function routeTo(string $controllerName, string $actionName, array $urlParams = []);

    public function getControllerName(): string;

    public function getActionName(): string;

    public function setControllerNamespace(string $controllerNamespace);
}