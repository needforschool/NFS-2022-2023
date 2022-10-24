<?php

require('inc/fonction.php');
$title = 'Mon site - Page contact';
// Formulaire

// pseudo  =>  input text =>  renseigné, min 4, max 120
// message =>  textarea    =>  renseigné, min 10 max 500
// email   =>  input email => renseigné & email valide
// https://www.php.net/manual/fr/function.filter-var.php#111828

$fruits = array(
    'banane' => 'Banane',
    'kiwi' => 'Kiwi',
    'papaye' => 'Papaye',
    'mangue' => 'Mangue',
);

$errors = array();
$success = false;
// Soumis
// if formulaire est soumis ??
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $pseudo  = cleanXss('pseudo');
    $message = cleanXss('message');
    $email   = cleanXss('email');
    $fruit   = cleanXss('fruit');
    // Validation
    $errors = validationText($errors,$pseudo,'pseudo',4,70);
    $errors = validationText($errors,$message,'message',10,500);
    $errors = validationEmail($errors,$email);
    // Validation champ $fruit
    if(!empty($fruit)) {
        if(!array_key_exists($fruit, $fruits)) {
            $errors['fruit'] = 'Error fucking hacker';
        }
    } else {
        $errors['fruit'] = 'Veuillez renseigner un fruit svp';
    }


    if(count($errors) == 0) {
        $success = true;
    }
}

//echo '<pre>';
//print_r($_POST);
//print_r($errors);
//echo '</pre>';

include('inc/header.php'); ?>

<section>
    <h1>Contact</h1>
    <?php if($success) { ?>
        <p class="success">Merci pour votre message.</p>
    <?php } else { ?>
        <form class="wrap" action="" method="post" novalidate>
            <label for="pseudo">Pseudo *</label>
            <input type="text" name="pseudo" id="pseudo" value="<?php getPostValue('pseudo'); ?>">
            <span class="error"><?php viewError($errors,'pseudo'); ?></span>

            <label for="message">Message *</label>
            <textarea name="message" id="message" cols="30" rows="10"><?php getPostValue('message'); ?></textarea>
            <span class="error"><?php viewError($errors,'message'); ?></span>

            <label for="email">E-mail *</label>
            <input type="email" name="email" id="email" value="<?php getPostValue('email'); ?>">
            <span class="error"><?php viewError($errors,'email'); ?></span>

            <label for="fruit">Fruits</label>
            <select name="fruit" id="fruit">
                <option value="">__ selectionnez un fruit __</option>
                <?php foreach ($fruits as $key => $value) { ?>
                    <option value="<?php echo $key; ?>"<?php
                    if(!empty($_POST['fruit']) && $_POST['fruit'] === $key) {
                        echo ' selected';
                    }
                    ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php viewError($errors,'fruit'); ?></span>
            <input type="submit" name="submitted" value="Ajouter">
        </form>
    <?php } ?>
</section>

<?php include('inc/footer.php');
