<?php


namespace Mb7\EzPhp\Mvc\Layout;


use Mb7\EzPhp\Mvc\View\ViewInterface;

interface LayoutInterface
{
    public function setLayoutBasePath(string $layoutBasePath);
    public function setLayout(string $layoutName);
    public function disableLayout();
    public function enableLayout();
    public function isLayoutEnabled(): bool;
}