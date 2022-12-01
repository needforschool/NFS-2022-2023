<?php
require('../inc/pdo.php');
require('../inc/function.php');

$sql = "SELECT * FROM city ORDER BY RAND() LIMIT 10";

$query = $pdo->prepare($sql);
$query->execute();
$citys = $query->fetchAll();

showJson($citys);