<?php
session_start();
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
require('inc/validation.php');
$errors = [];

if(!empty($_POST['submitted'])) {
    $login = cleanXss('login');
    $password = cleanXss('password');
    // verification si un user existe avec ce mail ou ce pseudo =>  SELECT  fetch()
    $sql = "SELECT * FROM blog_users WHERE pseudo = :log OR email = :log";
    $query = $pdo->prepare($sql);
    $query->bindValue('log',$login, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    //debug($user);
    if(!empty($user)) {
        if(password_verify($password,$user['password'] )) {
            // CONNEXION  =>  S_SESSION
            $_SESSION['user'] = array(
                'id'     => $user['id'],
                'pseudo' => $user['pseudo'],
                'email'  => $user['email'],
                'role'   => $user['role'],
                'ip'     => $_SERVER['REMOTE_ADDR']
            );
            header('Location: index.php');
        } else {
            $errors['login'] = 'Credentials';
        }
    } else {
        $errors['login'] = 'Credentials';
    }

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