<?php
require('inc/pdo.php');
require('inc/fonction.php');
// request
$sql = 'SELECT * FROM city ORDER BY Name ASC LIMIT 100 ';
$query = $pdo->prepare($sql);
$query->execute();
$villes = $query->fetchAll();
//debug($villes);

include('inc/header.php'); ?>
    <h1>Home</h1>
    <section id="citys">
        <?php foreach ($villes as $ville) { ?>
            <div class="city">
                <h2><?php echo $ville['Name']; ?></h2>
                <p>Code: <?php echo $ville['CountryCode']; ?></p>
                <p>District: <?php echo $ville['District']; ?></p>
                <p>Population: <?php echo $ville['Population']; ?></p>
                <p><a href="detail-city.php?id=<?php echo $ville['ID']; ?>">Voir plus</a></p>
                <p><a href="edit-city.php?id=<?php echo $ville['ID']; ?>">Editer la ville</a></p>
            </div>
        <?php } ?>
    </section>
<?php include('inc/footer.php');