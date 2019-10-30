<?php


namespace Mb7\EzPhp\Mvc\View;


use Mb7\EzPhp\Mvc\Layout\AbstractLayout;

class SimpleView extends AbstractLayout implements ViewInterface
{
    private $basePath;
    private const VIEWFILEEXTENSION = ".phtml";
    private $viewParams;
    private $viewName;

    public function __construct($basePath)
    {
        $this->basePath = $basePath;
    }

    public function setViewBasePath(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function render(string $viewName, array $params = [])
    {

        $this->viewName = $viewName;
        $this->viewParams = $params;
        if ($this->isLayoutEnabled()) {
            include $this->getLayoutFileName($this->layoutName);
        } else {
            $this->getViewContent();
        }
    }

    private function getFileName(string $viewName): string
    {
        return $this->basePath . $viewName . self::VIEWFILEEXTENSION;
    }

    private function getViewContent()
    {
        extract($this->viewParams);
        include $this->getFileName($this->viewName);
    }
}