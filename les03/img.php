<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('public');
$twig = new Twig_Environment($loader);
$imgName = $_GET['name'];
try {
    $img = $twig->load('img.twig');
    echo $img->render([
        'name' => $imgName
    ]);
} catch (Exception $exception) {
    echo $exception->getMessage();
}