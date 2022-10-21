<?php
// echo "<br />";  // pour un retour à la ligne
// Manuel seulement ! Internet interdit !
// ne pas réinventer la roue, fonction existe sûrement déjà !!!
$fable = "Maître corbeau sur son arbre perché tenait en son bec un fromage";
//Calculez le nombre de caractères dans la chaîne ci-dessous et stockez-la dans une variable nommée "myStringLength" :
$myStringLength = mb_strlen($fable);
//Affichez la variable myStringLength
echo $myStringLength;
echo '<br>';
//calculez le nombre de mots dans la phrase précédente et affichez le
function str_word_count_utf8($str) {
    return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
}
echo str_word_count_utf8($fable);
echo '<br>';
//affichez la chaîne toute en majuscule
echo mb_strtoupper($fable, 'UTF-8');
echo '<br>';
//affichez la chaîne avec seulement la première lettre de la phrase en majuscule
echo ucfirst($fable);
echo '<br>';
//affichez la chaîne avec la première lettre de chaque mot en majuscule
echo ucwords($fable);
echo '<br>';
//affichez le 10 premiers caractères de la chaîne
echo mb_substr($fable,0,10);
echo '<br>';
// echo $fable[36];
//affichez la chaîne à l'envers (le dernier caractère en premier)
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
echo mb_strrev($fable);
echo '<br>';
//remplacez tous les "a" par des "?"
echo strtr($fable,'a', '?');
echo '<br>';
//Envoyez-vous la chaîne par email, avec la fonction mail()
// mail('quidelantoine@gmail.com',' sujet du mail', $fable);
//affichez la valeur de pi (π) à l'écran (une fonction existe)
echo pi();
echo '<br>';
//arrondissez la valeur de pi à 2 décimales et affichez la
echo round(pi(), 2);
echo '<br>';
//générez un nombre aléatoire entre 10 et 20, et affichez le
echo rand(10,20);
//stockez tous les mots de la chaîne $fable dans un array nommé "words"
$words = explode(' ',$fable);
//affichez le premier mot de votre array
echo $words[0];
//affichez le deuxième mot de votre array
echo $words[1];
//affichez le dernier mot de votre array, sans compter le nombre d'éléments (une fonction spécifique existe)
echo end($words);
//essayez la fonction suivante : print_r($words);
echo '<pre>';
print_r($words);
echo '</pre>';
//Reformez une chaîne à partir de votre array. Chaque mot doit être recollés avec un "<br />". Stockez cette chaîne dans une variable nommée "fable2"
$fable2 = implode('<br>',$words);
echo $fable2;
//Affichez l'année actuelle
echo date('Y');
echo '<br>';
echo date('\l\e d F Y à H:i:s');
echo '<br>';
//Affichez la date au format suivant : jj/mm/yyyy
echo date('d/m/Y');
echo '<br>';
//affichez tous les paramètres de configuration de PHP dans votre page (une fonction existe pour ça)
//phpinfo();

//////// Date en php
/// temps UNIX
echo date('d/m/Y');
echo time();

$dateNaissance = '1978-02-06 15:15:15';

//$nbreSeconde = strtotime($dateNaissance);
//echo $nbreSeconde;
//echo date('D',$nbreSeconde);
echo date('D',strtotime($dateNaissance));
echo '<br>';
echo date('d/m/Y',strtotime('tomorrow'));
echo '<br>';
echo date('d/m/Y',strtotime('+12days'));
echo date('d/m/Y',strtotime('+2months'));
echo date('d/m/Y',strtotime('-3months'));
echo date('d/m/Y',strtotime('-5weeks'));
echo date('d/m/Y à H:i:s',strtotime('+2years 1week 2days 4hours 2seconds'));



