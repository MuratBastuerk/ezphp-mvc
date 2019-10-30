<?php


namespace Mb7\EzPhp\Mvc\Routing;


use Mb7\EzPhp\Mvc\Controller\AbstractController;
use Mb7\EzPhp\Router\Exception\EzRouterRequestedMethodDoesNotExistException;
use Mb7\EzPhp\Router\SimpleStaticRouter;

/**
 * Class MVCRouter
 * @package Mb7\EzPhp\Mvc\Routing
 */
class MVCRouter extends SimpleStaticRouter implements MVCRouterInterface
{
    /**
     * @var String
     */
    private $controllerNamespace;

    /**
     * MVCRouter constructor.
     * @param $server
     * @param $get
     * @param $post
     */
    public function __construct($server, $get, $post)
    {
        parent::__construct($server, $get, $post);
    }

    /**
     * @param AbstractController $controller
     * @return mixed
     * @throws EzRouterRequestedMethodDoesNotExistException
     */
    public function resolveRoute(AbstractController $controller)
    {
        $actionName = $this->getActionName();
        if (method_exists($controller, $actionName)) {
            return $controller->$actionName();
        }
        throw new EzRouterRequestedMethodDoesNotExistException("Requested Method $actionName not found in " . $controller);
    }

    /**
     * @param string $controllerName
     * @param string $actionName
     * @param array $urlParams
     */
    public function routeTo(string $controllerName, string $actionName, array $urlParams = [])
    {
        // TODO: Implement routeTo() method.
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $requestedControllerName = $this->getNamespace() . ucfirst($this->getUrlParts($this->getURl())[1]) . "Controller";
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $requestedControllerName = $this->getUrlParts($this->getURl())[2] . "Action";
    }

    /**
     * @param string $controllerNamespace
     */
    public function setControllerNamespace(string $controllerNamespace)
    {
        $this->controllerNamespace = $controllerNamespace;
    }

    /**
     * @return mixed
     */
    private function getNamespace()
    {
        return $this->controllerNamespace;
    }

}