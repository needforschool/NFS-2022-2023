<?php
require('inc/pdo.php');
require('inc/fonction.php');
$errors = array();
//nom, code,district, pop

// if formulaire soumit
if(!empty($_POST['submitted'])) {
    // Faille xss

        // Validations

        // if no error
        // INSERT INTO new city

}

debug($errors);
debug($_POST);

include('inc/header.php'); ?>
    <h1>Ajouter une ville</h1>

    <form action="" method="post" novalidate class="wrap">
        <label for="nom">Nom de la ville</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom'];} ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom'];} ?></span>

        <label for="code">Code</label>
        <input type="text" id="code" name="code" value="<?php if(!empty($_POST['code'])) {echo $_POST['code'];} ?>">
        <span class="error"><?php if(!empty($errors['code'])) {echo $errors['code'];} ?></span>

        <label for="district">District</label>
        <input type="text" id="district" name="district" value="<?php if(!empty($_POST['district'])) {echo $_POST['district'];} ?>">
        <span class="error"><?php if(!empty($errors['district'])) {echo $errors['district'];} ?></span>

        <label for="pop">Population</label>
        <input type="number" id="pop" name="pop" value="<?php if(!empty($_POST['pop'])) {echo $_POST['pop'];} ?>">
        <span class="error"><?php if(!empty($errors['pop'])) {echo $errors['pop'];} ?></span>

        <input type="submit" name="submitted" value="Ajouter une ville">
    </form>

<?php include('inc/footer.php');