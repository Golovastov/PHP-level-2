<?php

require_once 'config/config.php';
require_once 'engine/SQL.php';
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('public');
$twig = new Twig_Environment($loader);
$img = scandir('img');
for ($i=2; $i <= count($img) ; $i++) {
    $size = filesize('img/' . $img[$i]);
    $sql = "INSERT INTO `loveis`(`name`, `size`) VALUES ('$img[$i]', '$size')";
    executeQuery($sql);
}
$sql = "SELECT * FROM `loveis`";
$imgs = getResult($sql);
try {
    $preview = $twig->load( 'preview.twig');
    echo $preview->render([
       'preview' => $imgs
    ]);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

?>