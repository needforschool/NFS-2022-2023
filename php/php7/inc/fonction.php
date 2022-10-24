<?php

function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function viewError($errors,$key)
{
    if(!empty($errors[$key])) {
        echo $errors[$key];
    }
}

function getPostValue($key)
{
    if(!empty($_POST[$key]) ) {
        echo $_POST[$key];
    }
}


function validationText($err,$data,$keyError,$min,$max)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $err[$keyError] = 'Veuillez renseigner plus de '.$min.' caractères';
        } elseif (mb_strlen($data) > $max) {
            $err[$keyError] = 'Veuillez renseigner moins de '.$max.' caractères';
        }
    } else {
        $err[$keyError] = 'Veuillez renseigner ce champ';
    }
    return $err;
}


function validationEmail($err,$email,$key = 'email') {
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $err[$key] = 'Veuillez renseigner un email';
    }
    return $err;
}

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}
