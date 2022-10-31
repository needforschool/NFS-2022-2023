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


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function isLogged() {
    if(!empty($_SESSION['user']['id'])) {
        if(ctype_digit($_SESSION['user']['id'])) {
            if(!empty($_SESSION['user']['pseudo'])) {
                if(!empty($_SESSION['user']['email'])) {
                    if(!empty($_SESSION['user']['role'])) {
                        if(!empty($_SESSION['user']['ip'])) {
                            if($_SESSION['user']['ip'] == $_SERVER['REMOTE_ADDR']) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}