<?php
require('inc/pdo.php');
require('inc/fonction.php');
// request

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM city WHERE ID = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue('id',$id, PDO::PARAM_INT);
    $query->execute();
    $ville = $query->fetch();
    // debug($ville);
    if(empty($ville)) {
        die('404');
    }
} else {
    die('404');
}

// if form soumis
    // FAille xss
    // Validation
    // si no error
        //  UPDATE  SET   WHERE ID = :id
            // redirection vers detail de la ville



debug($ville);



include('inc/header.php'); ?>
<h1>Editer une ville</h1>

    <form action="" method="post">
        <input type="text" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom'];} else {echo $ville['Name'];} ?>">


    </form>

<?php include('inc/footer.php');