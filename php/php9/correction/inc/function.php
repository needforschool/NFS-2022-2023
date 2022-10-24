<?php

function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function poster($film) {
    echo '<img src="https://formation.weblitzer.fr/posters/'. $film['id'].'.jpg" alt="'.$film['title'].'">';
}

