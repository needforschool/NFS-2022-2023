<?php
// NE PAS FAIRE CONFIANCE AU CLIENT
// DON'T REPEAT YOURSELF
$title = 'Mon site - Page home';
// TRAITEMENT PHP

// index.php?nom=michel
// index.php?nom=quidel&prenom=antoine
// article.php?id=4578
//echo '<pre>';
//print_r($_GET);
//echo '</pre>';
//echo '$_POST';
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//if(!empty($_GET['nom'])) {
//    $nom = $_GET['nom'] . ' ';
//    echo $nom;
//}
//if(!empty($_GET['prenom'])) {
//    $prenom = $_GET['prenom'];
//    echo $prenom;
//}

//if(!empty($_POST['nom'])) {
//    $nom = $_POST['nom'] . ' ';
//    echo $nom;
//}
//if(!empty($_POST['prenom'])) {
//    $prenom = $_POST['prenom'];
//    echo $prenom;
//}


if(!empty($_POST['submitted2'])) {
    die('ok submitted 2');
}

$errors = array();
$success = false;
// Soumis
// if formulaire est soumis ??
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $nom = trim(strip_tags($_POST['nom']));
    $prenom = trim(strip_tags($_POST['prenom']));
    // Validation
    // Validation champ $nom
    if(!empty($nom)) {
        if(mb_strlen($nom) < 3) {
            $errors['nom'] = 'Veuillez renseigner plus de 3 caractères';
        } elseif(mb_strlen($nom) > 70) {
            $errors['nom'] = 'Veuillez renseigner moins de 70 caractères';
        }
    } else {
        $errors['nom'] = 'Veuillez renseigner ce champ';
    }
    // Validation prénom
    if(!empty($prenom)) {
        if(mb_strlen($prenom) < 5) {
            $errors['prenom'] = 'Veuillez renseigner plus de 5 caractères';
        } elseif(mb_strlen($prenom) > 100) {
            $errors['prenom'] = 'Veuillez renseigner moins de 100 caractères';
        }
    } else {
        $errors['prenom'] = 'Veuillez renseigner un prénom';
    }
    // email
    // color

    // NO ERRORS  => $errors vide
    if(count($errors) == 0) {
        // Insert into => BDD
        // envoyer un email
            // etc....
        $success = true;
        // redirection

    }

}
//echo '$errors';
//echo '<pre>';
//print_r($errors);
//echo '</pre>';

include('inc/header.php'); ?>
<section>
    <?php if($success) { ?>
        <p class="success">Merci pour tout</p>
    <?php } else { ?>
        <form action="" method="post" class="wrap">
            <label for="nom">Nom * (min 3, max 70)</label>
            <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
            <span class="error"><?php if(!empty($errors['nom'])) { echo $errors['nom']; } ?></span>

            <label for="prenom">Prénom * (min 5, max 100)</label>
            <input type="text" id="prenom" name="prenom" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
            <span class="error"><?php if(!empty($errors['prenom'])) { echo $errors['prenom']; } ?></span>

            <input type="submit" name="submitted" value="Envoyer">
        </form>
    <?php } ?>
    <div class="wrap">
        <h2>Deuxième formulaire</h2>
        <form action="" method="post">
            <input type="submit" name="submitted2" value="Envoyer">
        </form>
    </div>
</section>
<?php include('inc/footer.php');
