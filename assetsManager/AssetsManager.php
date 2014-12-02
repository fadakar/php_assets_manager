<?php

require_once 'Bundle.php';
require_once 'BundleScript.php';
require_once 'BundleStyle.php';
require_once 'BundleConfig.php';


BundleConfig::add(
        (new BundleScript("js/demo"))
                ->add('js/test1.js')
                ->add('js/test2.js')
                ->add('js/test3.js')
);


BundleConfig::add(
        (new BundleStyle("css/demo"))
                ->add('css/test1.css')
                ->add('css/test2.css')
                ->add('css/test3.css')
);

