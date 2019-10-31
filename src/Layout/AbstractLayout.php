<?php


namespace Mb7\EzPhp\Mvc\Layout;


abstract class AbstractLayout implements LayoutInterface
{
    /**
     * @var
     */
    protected $layoutBasePath;
    /**
     * @var
     */
    protected $layoutName;
    /**
     *
     */
    protected const LAYOUTFILEEXTENSION = ".phtml";
    /**
     * @var bool
     */
    private $layoutEnabled = true;

    /**
     * @var array
     */
    private $cssFiles = [];

    /**
     * @var array
     */
    private $jsFiles = [];

    /** @var string */
    private $jsFolderName;

    /** @var string */
    private $cssFolderName;

    /**
     * @var string
     */
    private $publicBasePath;

    /** @var string */
    private $pageTitle;

    /**
     * @param string $layoutBasePath
     */
    public function setLayoutBasePath(string $layoutBasePath)
    {
        $this->layoutBasePath = $layoutBasePath;
    }

    /**
     * @param string $layoutName
     */
    public function setLayout(string $layoutName)
    {
        $this->layoutName = $layoutName;
    }

    /**
     * @param string $layoutName
     * @return string
     */
    protected function getLayoutFileName(string $layoutName) : string {
        return $this->layoutBasePath.$layoutName.self::LAYOUTFILEEXTENSION;
    }

    /**
     *
     */
    public function disableLayout()
    {
        $this->layoutEnabled = false;
    }

    /**
     *
     */
    public function enableLayout()
    {
       $this->layoutEnabled = true;
    }

    /**
     * @return bool
     */
    public function isLayoutEnabled(): bool
    {
        return $this->layoutEnabled;
    }

    /**
     * @param string $cssFile
     * @return mixed
     */
    public function addCSSFile(string $cssFile)
    {
        // TODO: Implement addCSSFile() method.
    }

    /**
     * @param string $jsFile
     * @return mixed
     */
    public function addJsFile(string $jsFile)
    {
        // TODO: Implement addJsFile() method.
    }

    /**
     * @return string
     */
    public function getCSS(): string
    {
        // TODO: Implement getCSS() method.
    }

    /**
     * @return string
     */
    public function getJS(): string
    {
        return $this->getJS();
    }

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return "<title>$this->gageTitle()</title>";
    }

    /**
     * @return string
     */
    public function getHtmlHead(): string
    {
        // TODO: Implement getHtmlHead() method.
    }

    /**
     * @return string
     */
    public function getScriptContent(): string
    {
        return $this->getPageTitle();
    }

    /**
     * @param string $pageTitle
     * @return mixed
     */
    public function setPageTitle(string $pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * @param string $title
     * @param string $delimiter
     * @return mixed
     */
    public function appendPageTitle(string $title, string $delimiter = "-")
    {
        $this->pageTitle .= " " . $delimiter . " " . $title;
    }

    /**
     * @param string $publicBasePath
     * @return mixed
     */
    public function setPublicBasePath(string $publicBasePath)
    {
        $this->publicBasePath = $publicBasePath;
    }

    /**
     * @param string $cssFolderName
     * @return mixed
     */
    public function setCSSFolderName(string $cssFolderName)
    {
        $this->cssFolderName = $cssFolderName;
    }

    /**
     * @param string $jsFolderName
     * @return mixed
     */
    public function setJsFolderName(string $jsFolderName)
    {
        $this->jsFolderName = $jsFolderName;
    }


}