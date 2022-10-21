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
echo '<pre>';
print_r($_POST);
echo '</pre>';
//if(!empty($_GET['nom'])) {
//    $nom = $_GET['nom'] . ' ';
//    echo $nom;
//}
//if(!empty($_GET['prenom'])) {
//    $prenom = $_GET['prenom'];
//    echo $prenom;
//}

if(!empty($_POST['nom'])) {
    $nom = $_POST['nom'] . ' ';
    echo $nom;
}
if(!empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    echo $prenom;
}
// Soumis
// xss
// $errors $success
// VAlidation


include('inc/header.php'); ?>

<section>
    <form action="" method="post">
        <label for="nom">Nom * (min 3, max 70)</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">

        <label for="nom">Prénom * (min 5, max 100)</label>
        <input type="text" id="prenom" name="prenom" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>">

        <input type="submit">
    </form>
</section>

<?php include('inc/footer.php');
