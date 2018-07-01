<?php

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('public');
$twig = new Twig_Environment($loader);
$img = scandir('img');
try {
    $preview = $twig->load( 'preview.html');
    echo $preview->render([
       'preview' => $img
    ]);
} catch (Exception $exception) {
    $exception->getMessage();
}

