<?php
////////////////////
// BOUCLES
///////////////////
/// WHILE / DO WHILE
$i = 0;
$num = 50;
while  ($i < 10) {
    $i++;
    $num--;
}
echo $num;
do {
    $i++;
    $num--;
} while ($i < 20);
echo '<br>';
echo $num;
////////////////////////
/// FOR
////////////////////////
for($i = 0;$i <= 2000; $i++) {
    echo $i . ',';
}
echo '<hr>';
// affichez les nombres de 1 à 100 avec un espace entre chaque
for($i = 1; $i <= 100; $i++) {
    echo $i . ' ';
}
// Affichez les nombres de 5 à 25, séparé par virgule, il ne doit pas y avoir de virgule à la fin de votre chaine.
for($i = 5; $i <= 25; $i++)  {
    echo $i;
    if($i < 25) {
        echo ',';
    }
}
echo '<hr>';
// Affichez les multiples de 5 entre 15 et 120 séparés par des tirets
for($i = 5; $i <= 120; $i+=5) {
    echo $i;
    if($i < 120) {
        echo '-';
    }
}
echo '<hr>';
// Affichez les nombres pairs de 19 à 67 séparés par balise br
for($i = 19; $i <= 67; $i++) {
    if($i % 2 == 0) {
        echo $i . '<br>';
    }
}
echo '<hr>';
// Affichez les années depuis votre année de naissance jusqu'à aujourd'hui. Mettre chaque année dans un p avec la class "year"
echo date('Y');
// Affichez les nombres de 50 à 25 par ordre décroissant, sauf le 30
// Affichez les nombres de 1 à 50. Les nombres de 36 à 47 doivent être en vert