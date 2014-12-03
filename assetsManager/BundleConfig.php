<?php

/**
 * BundleConfig manage your bundleStyles and BundleScripts
 * and render each package for you
 *
 * @author Fadakargholamreza@gmail.com
 */
class BundleConfig
{

    /**
     * contains all bundles
     * @var array 
     */
    private static $bundles = array();

    /**
     * add new Bundle
     * @param Bundle $newBundle
     */
    public static function add(Bundle $newBundle)
    {
        self::$bundles[strtolower($newBundle->getName())] = $newBundle;
    }

    /**
     * render a package with spacific name
     * @param string $bundleName
     * @return string
     */
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
