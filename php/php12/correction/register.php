<?php

session_start();

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
require('inc/validation.php');
$errors = [];

if( isLogged() ) {
    header('Location: index.php');
}

// If form soumis
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $pseudo = cleanXss('pseudo');
    $mail = cleanXss('mail');
    $password = cleanXss('password');
    $password2 = cleanXss('password2');
    // Validation
    // pseudo min 3, max 140, renseigné.
    $errors = validationText($errors, $pseudo, 'pseudo', 3, 140);
    // pseudo unique.
    if(empty($errors['pseudo'])) {
        $sql = "SELECT pseudo FROM blog_users WHERE pseudo = :pseudo";
        $query = $pdo->prepare($sql);
        $query->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();
        $verifPseudo = $query->fetch();
        if(!empty($verifPseudo)) {
            $errors['pseudo'] = 'Pseudo déjà pris';
        }
    }
    // email => email valid et renseigné,
    $errors = validationEmail($errors, $mail, 'mail');
    // email unique
    if(empty($errors['mail'])) {
        $sql = "SELECT id FROM blog_users WHERE email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue('mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $verifEmail = $query->fetch();
        if(!empty($verifEmail)) {
            $errors['mail'] = 'Email déjà pris';
        }
    }
    // password // => renseigné, identiques, 6 caractères au minimum
    if(!empty($password) && !empty($password2)) {
        if($password != $password2) {
            $errors['password'] = 'Vos mots de passe sont différents';
        } elseif(mb_strlen($password) < 6) {
            $errors['password'] = 'Votre mot de passe est trop court(min 6)';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner les mots de passe';
    }

    if(count($errors) == 0) {
        // INSERT INTO
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = 'abonne';
        $token = generateRandomString(80);
        $sql = "INSERT INTO blog_users (pseudo,email,password,created_at, role,token)
                VALUES (:pse,:em,:pass, NOW(), '$role', '$token')";
        $query = $pdo->prepare($sql);
        $query->bindValue('pse', $pseudo, PDO::PARAM_STR);
        $query->bindValue('em', $mail, PDO::PARAM_STR);
        $query->bindValue('pass', $hashPassword, PDO::PARAM_STR);
        $query->execute();
        header('Location: login.php');
    }

}
//debug($_POST);
//debug($errors);
include('inc/header.php'); ?>
    <h1>Inscription</h1>
    <form action="" method="post" novalidate class="wrapform">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php getPostValue('pseudo'); ?>">
        <span class="error"><?php viewError($errors, 'pseudo'); ?></span>

        <label for="mail">E-Mail</label>
        <input type="email" id="mail" name="mail" value="<?php getPostValue('mail'); ?>">
        <span class="error"><?php viewError($errors, 'mail'); ?></span>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" value="">
        <span class="error"><?php viewError($errors, 'password'); ?></span>

        <label for="password2">Confirmez votre mot de passe</label>
        <input type="password" id="password2" name="password2" value="">

        <input type="submit" name="submitted" value="Inscrivez-vous">

    </form>

<?php include('inc/footer.php');