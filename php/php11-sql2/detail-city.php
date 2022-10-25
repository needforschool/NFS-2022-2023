<?php
require('inc/pdo.php');
require('inc/fonction.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM city WHERE ID = $id";
    $query = $pdo->prepare($sql);
    // INJECTION SQL     =>  PROBLEME
    $query->execute();
    $ville = $query->fetch();
    // debug($ville);
    if(empty($ville)) {
        die('404');
    }
} else {
    die('404');
}


include('inc/header.php'); ?>
    <div class="city">
        <h2><?php echo $ville['Name']; ?></h2>
        <p>Code: <?php echo $ville['CountryCode']; ?></p>
        <p>District: <?php echo $ville['District']; ?></p>
        <p>Population: <?php echo $ville['Population']; ?></p>
    </div>
<?php include('inc/footer.php');