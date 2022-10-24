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