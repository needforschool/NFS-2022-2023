<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
//require('inc/validation.php');


if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if(empty($article)) {
        redirectNotFound();
    }
} else {
    redirectNotFound();
}

//debug($article);

include('inc/header.php'); ?>
    <section id="detail_article">
        <div class="detail_article">
            <h2 class="title">Titre: <?php echo $article['title']; ?></h2>
            <p class="content"> <?php echo nl2br($article['content']); ?></p>
            <p class="authr"> Auteur: <?php echo $article['auteur']; ?></p>
            <hr>
            <p class="created_at">Publié le: <?php echo date('d/m/Y',strtotime($article['created_at'])) ?></p>
            <?php if(!empty($article['modified_at'])) {
                echo '<p class="created_at">Modifié le:'.date('d/m/Y',strtotime($article['modified_at'])).'</p>';
            } ?>
        </div>
    </section>
<?php include('inc/footer.php');