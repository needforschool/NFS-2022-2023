<?php

// déclarer une fonction
function maPremiereFonction() {
    return '<p>Bravo pour votre function.</p>';
}

function bonjour(string $prenom,string $nom = '') : string {
    return 'Bonjour ' . $prenom . ' ' . ucfirst($nom);
}

function multiplication( float $nbre1, float $nbre2) : float {
    return $nbre1 * $nbre2;
}
function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

// LES VARIABLES SONT LOCALES A LA FONCTION
$pdo = 'bonjour';
$var = 12;
function testVariable($b) {
    global $pdo;
    echo $pdo;
    echo $b;
}
testVariable($var);

// String => toutes les lettres en minuscule et ensuite mettre la chaine avec uniquement la première lettre en majuscule
function maj($str) {
//    $str = strtolower($str);
//    $str = ucfirst($str);
//    return $str;
    return ucfirst(mb_strtolower($str));
}
// strtolower
// ucfirst
echo maj('GJIJk ljlkjd iopk ljLKJLKf gjhLMKLM');

// minus
    // tout en majuscule , la premiere lettre en minuscule
function minus($str) {
    return lcfirst(mb_strtoupper($str));
}
echo minus('GJIJk ljlkjd iopk ljLKJLKf gjhLMKLM');


// EXO
$plats = array('Tartiflette', 'pot au feu', ' mousse au chocolat', ' blanquette', 'fondue', 'raclette','Boeuf','quiche lorraine', 'steak tartare', 'banane flambée');

$defaults = array('avare','paresseux','ennuyant','borné','cruel','versatile','ringard','stupide','superficiel','egoiste');
// array_rand
// créez un fonction 'generateGroupName'
    // Prendre au hasard un element du premier tableau et du deuxieme tableau
    // former un phrase " Tartiflette frustrée"
    // div => ecrit en rose , chaque mot doit commencer une majuscule.
echo '<hr>';
$fruits = array('Banane', 'Kiwi', 'Papaye');
function generateGroupName($tableau1,$tableau2,$color = 'pink',$balise = 'p')
{
//    $random_index1 = array_rand($tableau1);
//    $ele = $tableau1[$random_index1];
//    $random_index2 = array_rand($tableau2);
//    $ele2 = $tableau2[$random_index2];
//    $str = $ele . ' ' . $ele2;
//    echo '<p style="color:pink;">' . ucwords($str) . '</p>';
    $str = $tableau1[array_rand($tableau1)] . ' ' .$tableau2[array_rand($tableau2)];
    echo '<'.$balise.' style="color:'.$color.';">'.ucwords($str).' </'.$balise.'>';
}
generateGroupName($plats,$defaults);
generateGroupName($fruits,$defaults, 'green');
generateGroupName($fruits,$defaults, 'red', 'h2');
echo '<hr>';
