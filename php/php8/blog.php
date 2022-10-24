<?php
// Site dynamique
require('inc/function.php');


include('inc/header.php'); ?>

<h1>Blog</h1>
<?php
echo maPremiereFonction();
echo maPremiereFonction();
echo maPremiereFonction();

echo bonjour('Antoine', 'quidel');
echo bonjour('Michel');
//echo bonjour();
echo multiplication(3,17);
echo multiplication(45,187);
echo multiplication(45,187);

$fruits = array('Banane', 'Kiwi', 'Papaye');
debug($fruits);
?>



<?php include('inc/footer.php');