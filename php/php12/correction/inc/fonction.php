<?php


function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function redirectNotFound()
{
    header("HTTP/1.0 404 Not Found");
    header('Location: 404.php');
}