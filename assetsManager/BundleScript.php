<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BundleScript
 *
 * @author Fadakar
 */
class BundleScript implements Bundle
{

    private $paths = array();
    private $name;

    public function __construct($name = null)
    {
        if ($name != null)
            $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function add($path)
    {
        array_push($this->paths, $path);
        return $this;
    }

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
