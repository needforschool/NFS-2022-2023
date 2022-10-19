<h1>Mon super titre</h1>
<?php
// phpinfo();
echo 'Hello world !';
echo '<p>Hello world !</p>';
echo phpversion();
?>
<p>ici un paragraphe</p>
<?php
echo '<p>ici affichage paragraphe via php</p>';
?>
<h2><?php echo 'mon deuxieme titre'; ?></h2>

<?php
/////////////////////
// VARIABLES
///////////////////////
$variable = 'Agence immobilière';
$helloWorld2 = 'Hello 2';
$heelo_world_3 = 'Hello 3';
// Interdit majuscule et chiffre, underscore en premier
// Interdits => #$%&-
// $nom est différents de $nOm; // les noms de variables sont sensibles à la case
?>
<h1><?php echo $variable; ?></h1>
<?php
///////////////
// TYPE de VARIABLES
//////////////////
///  STRING   , chaine de caractère
$titre = 'Mon e-shop';
// INTEGER , INT   => entier;
$year = 2022;
// FLOAT
$pourcentage = 12.2;



