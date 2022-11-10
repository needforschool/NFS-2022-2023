<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=nfs_3', "root", "root", array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}



function debug($tableau) {
    echo '<pre style="height:550px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}
