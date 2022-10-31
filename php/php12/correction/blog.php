<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
//require('inc/validation.php');

// PHP
$articles = getAllPostByStatus('publish');

include('inc/header.php'); ?>
<?php foreach ($articles as $article) { ?>

    <div>
        <h2><?= $article['title']; ?></h2>
        <p>Auteur: <?= $article['auteur']; ?></p>
        <a href="single.php?id=<?= $article['id']; ?>">Voir détail</a>
    </div>



<?php } ?>

<?php include('inc/footer.php');