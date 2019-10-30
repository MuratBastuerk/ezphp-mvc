<?php


namespace Mb7\EzPhp\Mvc;


use Mb7\EzPhp\Mvc\Controller\AbstractController;
use Mb7\EzPhp\Mvc\Controller\Exception\EZMVCControllerDoesNotExistAction;
use Mb7\EzPhp\Mvc\View\ViewInterface;
use Mb7\EzPhp\Router\RouterInterface;

class MVC implements MVCInterface
{
    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @var ViewInterface
     */
    private $view;

    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function getRouter(): RouterInterface
    {
        return $this->router;
    }

    public function getController(): AbstractController
    {
        $controllerName = $this->getRouter()->getControllerName();
        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if ($controller instanceof AbstractController) {
                $controller->setView($this->getView());
                $controller->setLayout("default");
                $controller->setRouter($this->getRouter());
                return $controller;
            }
        }
        throw new EZMVCControllerDoesNotExistAction("Controller $controllerName does not Exist");
    }

    public function setView(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function getView(): ViewInterface
    {
        return $this->view;
    }
}