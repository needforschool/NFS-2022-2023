<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
require('inc/validation.php');
$errors = [];

if(!empty($_POST['submitted'])) {
    $login = cleanXss('login');
    $password = cleanXss('password');
    // verification si un user existe avec ce mail ou ce pseudo =>  SELECT  fetch()
        // s'il existe user
            // debug($user);
            // password_verify
                // true
                    // Connexion
                // false
                    // $error login => 'Credential'
        // Si user existe pas
            // $error login => 'Credential'

}


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