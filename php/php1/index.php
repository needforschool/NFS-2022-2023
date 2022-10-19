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
// <p class="para">Salut Buzz !, je suis en Formation PHP.</p>
// Méthode en alternance
?>
<p class="para"><?php echo $chaine; ?> <?php echo $chaine2; ?> ! je suis en <?= $data1; ?> <?= $data2; ?>.</p>
<?php
// méthode tout en PHP 1
echo '<p class="para">' . $chaine . ' ' . $chaine2 . ' ! je suis en '.$data1.' ' . $data2 . '.</p>';
// méthode tout en PHP 2
$h = '<p class="para">';
$h .= $chaine . ' ' . $chaine2;
$h .= ' ! je suis en ';
$h .= $data1;
$h .= ' ';
$h .= $data2;
$h .= '.';
$h .= '</p>';
echo $h;
// '' vs "" , echappement
echo '<p class="dede">Bonjour Dede</p>';
echo "<p class=\"dede\">Bonjour Dede</p>";

echo 'Arnold a dit: I\'ll be back';
echo "Arnold a dit: \"I'll be back\"";
echo 'Arnold a dit: "I\'ll be back"';

///
$traitees = 'lu';
$la = 'ici';
echo '<p>Les variables sont $traitees $la</p>';
echo '<p>Les variables sont '.$traitees.' $la</p>';
echo "<p>Les variables sont $traitees $la</p>";

/////////////////////////////
/// Les conditions - if elseif else
/////////////////////////////
// SI / SINON SI / SINON

if(true) {
    echo 'yes';
} else {
    echo 'no';
}
$mot1 = 'musique';
$mot2 = 'sport';
$mot3 = 'musique';
if($mot1 == $mot3) {
    echo 'Les mots sont identiques';
} elseif($mot1 != $mot3) {
    echo 'Les mots sont différents';
} else {
    echo 'vous ne me verrez jamais';
}
echo $mot1 == $mot3; // true
echo $mot1 == $mot2; // false

$age = 44;
if($age < 18) {
    echo 'Je suis mineur';
} else {
    echo 'Je suis majeur';
}
// Conditions Ternaire
$majeur = $age < 18 ? false : true;
echo $majeur == true ? 'Je suis majeur' : 'Je suis mineur';

// EXO
// moins de 18 ans => mineur
    // si moins de 18 et aussi moins de 6 => en maternelle
// Sinon si plus de 65 ans => retraite
// Sinon je suis un actif
$age = 12;
if($age < 18) {
    echo 'Je suis mineur';
    if($age <= 6) {
        echo ' et en maternelle';
    }
} elseif($age > 65) {
    echo 'Je suis à la retraite';
} else {
    echo 'Je suis actif';
}
// switch
$i = 1;
switch ($i) {
    case 0:
        echo 'i egale zéro';
        break;
    case 1:
        echo 'i egale à 1';
        break;
    case 2:
        echo 'i egale à 2';
        break;
    default:
        echo 'i est plus grand que 2';
        break;
}
/////////////////
/// Les conditions => Opérateur de comparaison
/////////////////
// $a == $b, Egale, True si $a est égale à $b
// $a === $b, Identique, True si $a est egale à $b et qu'ils sont du même type.
    // 12 === '12' // false
    // 12 == '12' // true
// $a != $b, Différents
// $a !== $b, Différent ou bien s'ils ne sont pas du même type
// $a < $b, Strictement plus petit que
// $a > $b, strictement plus grand que
// $a <= $b, Inférieur ou égale
// $a >= $b, Supérieur ou égale

///////////////////////////////////////
/// Les conditions - Opérateurs logiques
///////////////////////////////////////
/// ET => &&, AND
/// OU => ||, OR
/// ! => négation
$homme = true;
$age = 45;
if($homme && $age > 18) {
    echo 'Accès au site ok!';
}
$a = '42';
$b = ($a === 42); // false
if($a > 0 && !$b) { // true, true
    echo 'Pomme';
} elseif($b && $a <= 42) {  // false / true
    echo 'Poire';
} elseif(!$a || $b > 42) { // false, false
    echo 'Abricot';
}

///////////////////////
/// Arithmétique et incrémentation
/////////////////////////
// -$a, Négation => opposé de $a.
// $a + $b  => Addition
// $a - $b  => Soustraction
// $a * $b  => Multiplication
// $a ** $b => Exponentielle
// $a / $b  => Division
// $a % $b  => Modulo, Reste de la division
    // echo 6 % 2;  // 0
    // echo 7 % 2;  // 1
    // echo 11 % 3;  // 2
$chiffre = 14;
if($chiffre % 2 == 0) {
    echo 'chiffre pair';
} else {
    echo 'chiffre impair';
}
// Précédence
$calcul = 4 + 6 * 2; // 16
// Incrémentation & décrémentation
$j = 1;
// $j = $j + 1;
$j++;
$j++;
echo $j; // 3
$j--;
echo $j; // 2
// $j = $j + 5;
$j+=5;
echo $j; // 7
$j-=3; // 4
$j*=2; // 8
$j/=4; // 2
//////////////////////////////

$x = 4;
$x++; // 5
echo 'Post incrémentation: ' . $x++; // 5
echo $x; // 6;
echo 'Pre incrémentation: ' . ++$x; // 7
echo $x; // 7;















