<?php

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
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

