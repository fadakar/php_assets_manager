<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BundleConfig
 *
 * @author Fadakar
 */
class BundleConfig
{

    private static $bundles = array();

    public static function add(Bundle $newBundle)
    {
        self::$bundles[strtolower($newBundle->getName())] = $newBundle;
    }

    public static function render($bundleName)
    {
        if (array_key_exists(strtolower($bundleName), self::$bundles))
        {
            echo self::$bundles[$bundleName]->__toString();
        }
        else
        {
            return "<!-- [Not Found Bundle {$bundleName}] -->";
        }
    }

}
