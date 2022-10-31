<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
require('inc/validation.php');
$errors = [];

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
}
debug($_POST);
debug($errors);
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