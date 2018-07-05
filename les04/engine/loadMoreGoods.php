<?php
require_once '../config/config.php';
try {
    $pdo = new PDO("mysql:host=". SERVER .";dbname=". DB .";charset=utf8,". DB .",". PASSWORD);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $lastGood = $_POST['count'];
        $sql = "SELECT * FROM `les04` LIMIT $lastGood, 24";
        $result = $pdo->query($sql);
        echo include '../templates/good.php';
    }

} catch (PDOException $e) {
    echo $e->getMessage();
    }