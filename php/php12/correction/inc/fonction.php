<?php


function debug($tableau) {
    echo '<pre style="height:150px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function redirectNotFound()
{
    header("HTTP/1.0 404 Not Found");
    header('Location: 404.php');
}