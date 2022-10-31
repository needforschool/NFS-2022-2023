<?php
session_start();
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
//require('inc/validation.php');
//debug($_SESSION);
// PHP
$articles = getAllPostByStatus('publish');


include('inc/header.php'); ?>
<h1>Home</h1>

<?php include('inc/footer.php');