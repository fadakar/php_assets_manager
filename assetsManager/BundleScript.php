<?php

/**
 * BundleScript contains your javascripts files as package
 * with specific name
 *
 * @author Fadakargholamreza@gmail.com
 */
class BundleScript implements Bundle
{

    /**
     * contians path of all script files
     * @var array 
     */
    private $paths = array();

    /**
     * contains
     * @var string 
     */
    private $name;

    /**
     * constructor of BundleScript
     * @param string $name
     */
    public function __construct($name = null)
    {
        if ($name != null)
        {
            $this->name = $name;
        }
    }

    /**
     * return bundle name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * add new javascript file into bundle
     * @param type $path
     * @return \BundleScript
     */
    public function add($path)
    {
        array_push($this->paths, $path);
        return $this;
    }

    /**
     * render html and return bundle as string 
     * @return string
     */
    public function __toString()
    {
        $html = "";
        foreach ($this->paths as $path)
        {
            $html .= "<script type=\"text/javascript\" src=\"{$path}\" ></script>\r\n";
        }
        return $html;
    }

}
