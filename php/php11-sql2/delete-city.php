<?php
require('inc/pdo.php');
require('inc/fonction.php');


if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $ville = getCityById($id);
    // debug($ville);
    if(empty($ville)) {
        die('404');
    } else {
        $sql = "DELETE FROM city WHERE ID = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue('id',$id, PDO::PARAM_INT);
        $query->execute();
        header('Location: index.php');
    }
} else {
    die('404');
}