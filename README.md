php_assets_manager
==================

##micro assets manager for php

Manage your cascade style sheet and javascript files with php assets manager
Create new package (css/javascript) add some files into package and in html
Render your package with one line Code. 


### How to include

1. You need only **assetsManager** folder.
2. Require AssetsManager.php file:

``` php
require_once('assetsManager/AssetsManager.php');
```

### Usage
To use assets manager just needed to edit assetsManager.php
to define your assets packages

#### how to define a css package:
``` php
BundleConfig::add(
    (new BundleStyle("css/yourNameHere"))
            ->add('css/file1.css')
            ->add('css/file2.css')
            ->add('css/file3.css')
);
```

#### how to define a javascript package:
``` php
BundleConfig::add(
        (new BundleScript("js/yourNameHere"))
                ->add('js/file1.js')
                ->add('js/file2.js')
                ->add('js/file3.js')
);
```
#### how to render a package in html:
##### first you need to include AssetsManager.php file in html file:
``` php
include_once 'AssetsManager.php';
```

##### now call render function to render your css/javascript package:
``` php
echo BundleConfig::render("css/yourNameHere"); // Render your css package   
echo BundleConfig::render("js/yourNameHere"); // Render your javascript package
```
