<?php


namespace Mb7\EzPhp\Mvc\Controller;


use Mb7\EzPhp\Mvc\View\ViewInterface;
use Mb7\EzPhp\Router\RouterInterface;

abstract class AbstractController implements ControllerInterface
{
    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @var ViewInterface
     */
    protected $view;

    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function getRouter(): RouterInterface
    {
        return $this->router;
    }

    public function setView(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function setLayout($layoutName)
    {
        $this->view->setLayout($layoutName);
    }

    public function disableLayout()
    {
        $this->view->disableLayout();
    }

    public function enableLayout()
    {
        $this->view->enableLayout();
    }

    public function __toString()
    {
        return self::class;
    }
}