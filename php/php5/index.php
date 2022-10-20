<?php
$tab = [];
$tab[] = array('A','C','O','D');
$tab[] = array('J','E','O','Z');
$tab[] = array('T','U','I');
$tab[] = array('A','P','R');
// Ecrivez "JUPITER" à partir de $tab
echo '<pre>';
print_r($tab);
echo '</pre>';

echo $tab[1][0] . $tab[2][1] . $tab[3][1] . $tab[2][2] .$tab[2][0]. $tab[1][1]. $tab[3][2]  ;

$arrayDeOuf = array(
    0 => "fdjsa", 1 => 2332,
    2 => array(0 => "dsajf", "sdfsd" => array(
        0 => 9034, "kkk" => "vvv", 2390 => array(
            'dede'  => 'R2D2'
        )), array(
        0 => 1, 1 => 2, 3,
        "k"
    )
    )
);

echo '<pre>';
print_r($arrayDeOuf);
echo '</pre>';

echo $arrayDeOuf[2]['sdfsd'][2390]['dede'];
///////////////////////
/// Tableau multidimensionnel
///////////////////////
$paiements = array(
    array(
        'montant' => 12.55,
        'date'    => '12/12/2022'
    ),
    array(
        'montant' => 14.75,
        'date'    => '13/12/2022'
    ),
    array(
        'montant' => 2.25,
        'date'    => '14/12/2022'
    ),
);

// Affichez le montant du premier paiement
echo $paiements[0]['montant'];
// Affichez la date du dernier paiement
echo $paiements[2]['date'];
// Ajoutez un nouveau paiement
$paiements[] = array(
    'montant' => 34.63,
    'date'    => '12/12/12'
);
echo '<pre>';
print_r($paiements);
echo '</pre>';
// for  &  foreach
foreach($paiements as $key => $paiement) {
    echo '<p>'.$key.' Le paiement de ' . $paiement['montant'] . ' à la date du '.$paiement['date'].'</p>';
}
echo '<hr>';
for($i = 0; $i < count($paiements); $i++) {
    echo '<p>'.$i.' Le paiement de ' . $paiements[$i]['montant'] . ' à la date du '.$paiements[$i]['date'].'</p>';
}
$users = [
    ['nom' => 'Michel','mail' => 'michel@gmail.com','age' => 35],
    ['nom' => 'Jacky','mail' => 'jacky@gmail.com','age' => 25],
    ['nom' => 'Bernard','mail' => 'bernard@gmail.com','age' => 55],
    ['nom' => 'Janine','mail' => 'Janine@gmail.com','age' => 32],
];
// for // foreach
// section id="users"
    // chaque user
        // div => class="one_user"
            // h3 => nom
            // p => a => mailto
            // p => age => class="user_age"

echo '<section id="users">';
for($i = 0;$i < count($users); $i++) {
    echo '<div class="one_user">';
        echo '<h2>'.$users[$i]['nom'].'</h2>';
        echo '<p><a href="mailto:'.$users[$i]['mail'].'">'.$users[$i]['mail'].'</a></p>';
        echo '<p class="user_age">Age: '.$users[$i]['age'].'</p>';
    echo '</div>';
}
echo '</section>';
echo '<hr>';
echo '<section id="users">';
foreach ($users as $user) {
    echo '<div class="one_user">';
        echo '<h2>'.$user['nom'].'</h2>';
        echo '<p><a href="mailto:'.$user['mail'].'">'.$user['mail'].'</a></p>';
        echo '<p class="user_age">Age: '.$user['age'].'</p>';
    echo '</div>';
}
echo '</section>';

?>
<hr>
<section id="users">
    <?php for($i = 0;$i < count($users); $i++) { ?>
        <div class="one_user">
            <h2><?php echo $users[$i]['nom']; ?></h2>
            <p><a href="mailto:<?php echo $users[$i]['mail']; ?>"><?php echo $users[$i]['mail']; ?></a></p>
            <p class="user_age"><?php echo $users[$i]['age']; ?></p>
        </div>
    <?php } ?>
</section>

<hr>
<section id="users">
    <?php foreach ($users as $user) { ?>
        <div class="one_user">
            <h2><?php echo $user['nom']; ?></h2>
            <p><a href="mailto:<?php echo $user['mail']; ?>"><?php echo $user['mail']; ?></a></p>
            <p class="user_age"><?php echo $user['age']; ?></p>
        </div>
    <?php } ?>
</section>




