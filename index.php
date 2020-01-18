<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utilities/translation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php t('title') ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:600i&display=swap">
        <link rel="icon" type="image/png" href="/images/logo.png" />
        <link rel="stylesheet" href="dist/default.css">
    </head>
    <body>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/components/header.php";
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/{$_GET['page']}.php";
        include $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php";
        ?>

    </body>
</html>
