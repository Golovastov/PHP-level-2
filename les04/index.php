<?php
require_once 'vendor/autoload.php';
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'brend';

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $password);
    $sql = "SELECT * FROM `les04`";
    $result = $pdo->query($sql);
    $loader = new Twig_Loader_Filesystem('public');
    $twig = new Twig_Environment($loader);
    $catalog = $twig->load('');
} catch (PDOException $e) {
    echo $e->getMessage();
}
