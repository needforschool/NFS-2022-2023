<?php
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
    $pseudo = trim(strip_tags($_POST['pseudo']));
    $message = trim(strip_tags($_POST['message']));
    $email = trim(strip_tags($_POST['email']));
    $fruit = trim(strip_tags($_POST['fruit']));
    // Validation
    // Validation champ $pseudo
    if (!empty($pseudo)) {
        if (mb_strlen($pseudo) < 4) {
            $errors['pseudo'] = 'Veuillez renseigner plus de 4 caractères';
        } elseif (mb_strlen($pseudo) > 120) {
            $errors['pseudo'] = 'Veuillez renseigner moins de 120 caractères';
        }
    } else {
        $errors['pseudo'] = 'Veuillez renseigner ce champ';
    }
    // Validation champ $message
    if (!empty($message)) {
        if (mb_strlen($message) < 10) {
            $errors['message'] = 'Veuillez renseigner plus de 10 caractères';
        } elseif (mb_strlen($message) > 500) {
            $errors['message'] = 'Veuillez renseigner moins de 500 caractères';
        }
    } else {
        $errors['message'] = 'Veuillez renseigner ce champ';
    }
    // Validation champ $email
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors['email'] = 'Veuillez renseigner un email';
    }
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
            <input type="text" name="pseudo" id="pseudo" value="<?php if(!empty($_POST['pseudo']) ) { echo $_POST['pseudo']; } ?>">
            <span class="error"><?php if(!empty($errors['pseudo'])) {echo $errors['pseudo']; } ?></span>

            <label for="message">Message *</label>
            <textarea name="message" id="message" cols="30" rows="10"><?php if(!empty($_POST['message']) ) { echo $_POST['message']; } ?></textarea>
            <span class="error"><?php if(!empty($errors['message'])) {echo $errors['message']; } ?></span>

            <label for="email">E-mail *</label>
            <input type="email" name="email" id="email" value="<?php if(!empty($_POST['email']) ) { echo $_POST['email']; } ?>">
            <span class="error"><?php if(!empty($errors['email'])) {echo $errors['email']; } ?></span>

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
            <span class="error"><?php if(!empty($errors['fruit'])) { echo $errors['fruit']; } ?></span>

            <input type="submit" name="submitted" value="Ajouter">
        </form>
    <?php } ?>
</section>

<?php include('inc/footer.php');
