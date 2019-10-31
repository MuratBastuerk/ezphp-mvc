<?php


namespace Mb7\EzPhp\Mvc\Layout;

interface LayoutInterface
{
    public function setLayoutBasePath(string $layoutBasePath);

    public function setLayout(string $layoutName);

    public function disableLayout();

    public function enableLayout();

    public function isLayoutEnabled(): bool;

    public function addCSSFile(string $cssFile);

    public function addJsFile(string $jsFile);

    public function getCSS() : string;

    public function getJS() : string;

    public function getHtmlHead(): string;

    public function getScriptContent(): string;

    public function setPageTitle(string $pageTitle);

    public function getPageTitle(): string ;

    public function appendPageTitle(string $title, string $delimiter = "-");

    public function setPublicBasePath(string $publicBasePath);

    public function setCSSFolderName(string $cssFolderName);

    public function setJsFolderName(string $jsFolderName);
}