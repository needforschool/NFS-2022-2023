<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
require('inc/validation.php');
$errors = [];

//                //  Pseudo or email
//                // password

//                // submit
include('inc/header.php'); ?>
    <h2>Connexion</h2>
    <form action="" method="post" novalidate class="wrapform">
        <label for="login">Pseudo Or E-Mail</label>
        <input type="text" id="login" name="login" value="<?php getPostValue('login'); ?>">
        <span class="error"><?php viewError($errors, 'login'); ?></span>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" value="">

        <input type="submit" name="submitted" value="Connectez-vous">
    </form>
<?php include('inc/footer.php');