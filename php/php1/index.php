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
// BOOLEAN ( true, false )
$jeSuisLeFormateur = true;
$isLoveMacron = false;
// NULL
$pasDeValeur = NULL;
// Types Composées
// Tableaux, Objects
$tableaux = array('Beau loft plein sud','Menagerie','Chalet dans montagne');
//echo $tableaux;
echo '<pre>';
print_r($tableaux);
echo '</pre>';
echo $tableaux[1]; ?>
<ul>
    <li><?php echo $tableaux[0]; ?></li>
    <li><?php echo $tableaux[1]; ?></li>
    <li><?php echo $tableaux[2]; ?></li>
</ul>
<?php
// Commentaires sur une ligne
/*  Commentaires */
/*
 * comment 1
 * comment 2
 *
 */
//////////////
// DEBOGAGE
//////////////
// echo , print_r(), var_dump()
var_dump($tableaux);
// die('End of the script');
// Type Errors
    // Fatal => stop le script
    // WARNING => script qui continue
    // parse error => erreur de synthaxe
    // E_NOTICE  => infos
///////////////////
// SUPER GLOBAL
////////////////
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
/////////////////////
// CONCATENATION  =>  .
////////////////////////
/// ?>
<h3><?php echo $titre; ?></h3>
<?php
//echo '<h3>';
//echo $titre;
//echo '</h3>';
echo '<h3>'.$titre.'</h3>';
$html = '';
$html .= '<h3>';
$html .= $titre;
$html .= '</h3>';
echo $html;
// exo
$chaine = 'Salut';
$chaine2 = 'Buzz';
$data1 = 'Formation';
$data2 = 'PHP';
// Avec les 3 méthodes
// <p class="para">Salut Buzz !, je suis en Formation PHP</p>
