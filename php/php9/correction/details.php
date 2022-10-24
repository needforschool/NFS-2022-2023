<?php
require('inc/function.php');
require('inc/data.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    // request BDD
    ///// WARNING
    // ATTENTION NE PAS REPRODUIRE LA MEME CHOSE QUAND VOUS ALLEZ CONNAITRE LES REQUEST A LA BDD
    ///// WARNING
    $goodFilm = array();
    foreach ($movies as $key => $movie) {
        if($id === $movie['id']) {
            $goodFilm = $movie;
            $currentIndex = $key;
            break;
        }
    }
    if(empty($goodFilm)) {
        die('404');
    }
} else {
    // redirection 404 (not found)
    die('404');
}
include('inc/header.php'); ?>
<p><a href="index.php">Retour page d'accueil</a></p>
<?php paginationMovie($currentIndex,$movies); ?>
    <div class="wrap">
        <div class="onemovie">
            <div>
                <?php poster($goodFilm); ?>
            </div>
            <div>
                <h1><?php echo $goodFilm['title']; ?></h1>
                <p>Année de sortie : <?php echo $goodFilm['year']; ?></p>
                <p>Réalisateurs : <?php echo $goodFilm['directors']; ?></p>
                <p>Note : <?php echo $goodFilm['rating']; ?></p>
                <p>Imdb : <?php echo $goodFilm['imdb_id']; ?></p>
            </div>
        </div>

    </div>
<?php paginationMovie($currentIndex,$movies); ?>
<?php include('inc/footer.php');