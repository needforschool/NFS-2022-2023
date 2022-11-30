<?php
require('../inc/pdo.php');

$sql = "SELECT * FROM city ORDER BY RAND() LIMIT 1";

$query = $pdo->prepare($sql);
$query->execute();
$city = $query->fetch();

die(json_encode($city['Name']));