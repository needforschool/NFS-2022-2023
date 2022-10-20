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
for($i = 1978; $i <= date('Y'); $i++) {
    echo '<p class="year">'.$i.'</p>';
}
echo '<hr>';
// Affichez les nombres de 50 à 25 par ordre décroissant, sauf le 30
for($i = 50; $i >=25; $i--) {
    if($i != 30) {
        echo $i;
    }
}
echo '<hr>';
// Affichez les nombres de 1 à 50. Les nombres de 36 à 47 doivent être en vert, les autres en Rouge
for($i = 1; $i <= 50; $i++) {
//    if($i >= 36 && $i <= 47) {
//       $color = 'green';
//    } else {
//       $color = 'red';
//    }
    $color = ($i >= 36 && $i <= 47) ? 'green' : 'red';
    echo '<p style="color:'.$color.';">'.$i.'</p>';
}
//////////////////////////
/// BOUCLES & TABLEAUX
//////////////////////////
$musiques = array('Basse','Guitare','Batterie','Piano','Percu','Xylophone','Voix');
echo '<pre>';
print_r($musiques);
echo '</pre>';
echo $musiques[2]; // Batterie
echo count($musiques); // 6
echo '<ul>';
for($i = 0; $i < count($musiques );$i++) {
    echo '<li>'.$musiques[$i].'</li>';
}
echo '</ul>';
$fruits = array('Banane','Kiwi','Papaye','Tomate','Courgette','Litchi','Fruit du dragon');
// section id fruits
    // div par fruits  class fruit
        // h2
echo '<section id="fruits">';
for($i = 0; $i < count($fruits);$i++) {
    echo '<div class="fruit"><h2>'.$fruits[$i].'</h2></div>';
}
echo '</section>';
?>
<section id="fruits">
    <?php for($i = 0; $i < count($fruits);$i++) { ?>
        <div class="fruit">
            <h2><?php echo $fruits[$i]; ?></h2>
        </div>
    <?php } ?>
</section>

<?php
// foreach
foreach($fruits as $fruit) {
    echo $fruit;
}
// $musiques => ul li => grâce à foreach
        // avec les 2 méthodes
echo '<ul>';
foreach($musiques as $instrument) {
    echo '<li>'.$instrument.'</li>';
}
echo '</ul>';
?>
<ul>
    <?php foreach($musiques as $instrument) { ?>
        <li><?= $instrument; ?></li>
    <?php } ?>
</ul>

<?php
$tiroirs = array('clef','monnaie','capote','piles','stylo 4 couleurs');
// ul li  => for
echo '<ul>';
    for ($i = 0; $i < count($tiroirs);$i++) {
        echo '<li>'. $tiroirs[$i] .'</li>';
    }
echo '</ul>';
// ul li  => foreach
echo '<ul>';
    foreach($tiroirs as $tiroir) {
        echo '<li>'.$tiroir.'</li>';
    }
echo '</ul>';
// ul li  => for  => méthode en alternance
?>
<ul>
    <?php for($i = 0; $i < count($tiroirs);$i++) { ?>
        <li><?= $tiroirs[$i]; ?></li>
    <?php } ?>
</ul>
<?php
// ul li  => foreach => méthode en alternance
?>
<ul>
    <?php foreach ($tiroirs as $tiroir) { ?>
        <li><?= $tiroir; ?></li>
    <?php } ?>
</ul>











