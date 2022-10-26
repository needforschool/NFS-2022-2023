<?php

function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
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

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}


function getCityById($id){
    global $pdo;
    $sql = "SELECT * FROM city WHERE ID = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue('id',$id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}