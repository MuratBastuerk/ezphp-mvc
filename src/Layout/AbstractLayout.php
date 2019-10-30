<?php


namespace Mb7\EzPhp\Mvc\Layout;


abstract class AbstractLayout implements LayoutInterface
{
    protected $layoutBasePath;
    protected $layoutName;
    protected const LAYOUTFILEEXTENSION = ".phtml";
    private $layoutEnabled = true;

    public function setLayoutBasePath(string $layoutBasePath)
    {
        $this->layoutBasePath = $layoutBasePath;
    }

    public function setLayout(string $layoutName)
    {
        $this->layoutName = $layoutName;
    }

    protected function getLayoutFileName(string $layoutName) : string {
        return $this->layoutBasePath.$layoutName.self::LAYOUTFILEEXTENSION;
    }

    public function disableLayout()
    {
        $this->layoutEnabled = false;
    }

    public function enableLayout()
    {
       $this->layoutEnabled = true;
    }

    public function isLayoutEnabled(): bool
    {
        return $this->layoutEnabled;
    }
}