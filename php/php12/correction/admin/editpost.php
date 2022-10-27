<?php
require('../inc/pdo.php');
require('../inc/fonction.php');
require('../inc/request.php');
require('../inc/validation.php');


if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if(empty($article)) {
        redirectNotFound();
    }
} else {
    redirectNotFound();
}

$errors = array();
$success = false;
if (!empty($_POST['submitted'])) {
    $titre = cleanXss('titre');
    $contenu = cleanXss('contenu');
    $auteur = cleanXss('auteur');
    $errors = validationText($errors, $titre, 'titre', 4, 255);
    $errors = validationText($errors, $contenu, 'contenu', 1, 500);
    $errors = validationText($errors, $auteur, 'auteur', 3, 100);
    if (count($errors) == 0){
        updateArticle($id,$titre,$contenu,$auteur);
        $success = true;
        header('Location: index.php');
    }
}
include('inc/header-back.php'); ?>
    <section id="form">
        <div class="wrapform">
            <h1>Ajouter un article</h1>
            <form action="" method="post" novalidate>
                <label for="titre">Titre de l'article</label>
                <input type="text" name="titre" placeholder="Mon super article" id="titre" value="<?php getPostValue('titre',$article['title']); ?>">
                <span class="error"><?php viewError($errors, 'titre'); ?></span>

                <label for="contenu">Contenu de l'article</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"><?php getPostValue('contenu',$article['content']); ?></textarea>
                <span class="error"><?php viewError($errors, 'contenu'); ?></span>

                <label for="auteur">Auteur de l'article</label>
                <input type="text" name="auteur" placeholder="Jason Bourne" id="auteur" value="<?php getPostValue('auteur',$article['auteur']); ?>">
                <span class="error"><?php viewError($errors, 'auteur'); ?></span>

                <input type="submit" name="submitted" value="Ajouter un article">
            </form>
        </div>
    </section>
<?php include('inc/footer-back.php');