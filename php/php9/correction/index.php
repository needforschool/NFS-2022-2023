<?php
require('inc/function.php');
require('inc/data.php');

//debug($movies);

include('inc/header.php'); ?>
<div class="wrap">
    <section id="films">
    <?php foreach($movies as $movie) { ?>
        <div class="movie">
            <h2><?php echo $movie['title']; ?></h2>
            <a href="details.php?id=<?= $movie['id']; ?>">
                <?php poster($movie); ?>
            </a>
        </div>
    <?php } ?>
    </section>
</div>
<?php include('inc/footer.php');