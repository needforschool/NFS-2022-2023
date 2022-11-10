<?php

require('pdo.php');

// LEFT JOIN, RIGHT JOIN, INNER JOIN

$sqlBase = "SELECT p.id AS id_post,p.title AS title_post, c.title AS title_cat, c.id AS id_cat FROM post AS p
            LEFT JOIN category AS c
            ON p.category_id = c.id";

$query = $pdo->prepare($sqlBase);
$query->execute();
$articles = $query->fetchAll();
debug($articles);