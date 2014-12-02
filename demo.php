<?php
include_once 'assetsManager' . DIRECTORY_SEPARATOR . 'AssetsManager.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Assets Manager Demo File </title>
        <?php echo BundleConfig::render("css/demo"); ?>
    </head>
    <body>
        <h1>PHP Assets Manager Demo File</h1>
        <h3>Css :</h3>
        <p>
            <textarea cols="100" rows="10"><?php echo BundleConfig::render("css/demo"); ?></textarea>
        </p>

        <h3>Javascript :</h3>
        <p>
            <textarea cols="100" rows="10"><?php echo BundleConfig::render("js/demo"); ?></textarea>
        </p>
    </body>
</html>
<?php echo BundleConfig::render("js/demo"); ?>
