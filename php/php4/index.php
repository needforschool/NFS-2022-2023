<?php
// Tableau Simple
$etudiants = array('Christophe','Malo','Claude','Kevin','Melvin','Axel');
// print_r
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez le 4eme étudiants
echo $etudiants[3];
// ajoutez un élément au tableau
$etudiants[] = 'Melina';
$etudiants[] = 'Lucas';
// Modifiez les deux étudiants, pour avoir leur prénom et le nom
$etudiants[0] .= ' NomdeKevin';
$etudiants[1] .= ' NomdeMalo';
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// for // foreach
for ($i = 0;$i < count($etudiants); $i++) {
    echo '<p>'.$etudiants[$i].'</p>';
}
foreach ($etudiants as $etudiant) {
    echo '<p>'.$etudiant.'</p>';
}
// Contruisez un tableau $nums contenant les nombres de 10 à 20 grâce à une boucle for.
$nums = array();
for($i = 10; $i <= 20; $i++) {
    $nums[] = $i;
}
// print_r($nums);
//////////////////////////
// Tableau Associatif
///////////////////////
$livre = array(
    // key => value
    'title' => 'Le rouge et le noir',
    'annee' => 1830,
    'pages' => 640,
    'auteur' => 'Stendal'
);
echo '<h1>' . $livre['title'] . '</h1>';
echo '<p>'. $livre['annee'].'</p>';
// Corrigez le nom de l'auteur de ce livre => 'Stendhal'
$livre['auteur'] = 'Stendhal';
// Ajoutez un code isbn à votre livre 6546573216
$livre['isbn'] = 6546573216;
// Ajoutez le price => 5,56
$livre['price'] = 5.56;
// enlevez l'annee
unset($livre['annee']);
echo '<pre>';
print_r($livre);
echo '</pre>';
foreach ($livre as $key => $value) {
    echo '<p> ' . ucfirst($key) . ' : '. $value .'</p>';
}
// tableau $me vide
$me = array();
// Ajoutez votre nom, prénom, age
$me['nom'] = 'Quidel';
$me['prenom'] = 'Antoine';
$me['age'] = 44;
// Affichez votre âge à partir du tableau $me
echo $me['age'];
// Faites vous vieillir de 5 ans
//$me['age'] = $me['age'] + 5;
$me['age'] += 5;
// créer un tableau $mess
$mess = array();
// Ajouter un entier
$mess[] = 65543;
// ajouter une valeur boolean
$mess[] = true;
// ajouter le tableau $me
$mess[] = $me;
// ajouter le tableau $etudiants
$mess[] = $etudiants;
// ajouter le livre
$mess[] = $livre;
echo '<pre>';
print_r($mess);
echo '</pre>';

echo $mess[2]['prenom'];





