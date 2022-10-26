<?php
require('inc/pdo.php');
require('inc/fonction.php');
$errors = array();
$success = false;
//nom, code,district, pop

// if formulaire soumit
if(!empty($_POST['submitted'])) {
    // Faille xss
    $nom = cleanXss('nom');
    $code = cleanXss('code');
    $district = cleanXss('district');
    $pop = cleanXss('pop');
    // Validations
    $errors = validationText($errors,$nom,'nom',2,35);
    $errors = validationText($errors,$code,'code',3,3);
    $errors = validationText($errors,$district,'district',3,20);
    // Validation population
    if(!empty($pop)) {
        if(ctype_digit($pop)) {
            if($pop < 1 || $pop > 99999999999) {
                $errors['pop'] = 'Veuillez renseigner un nombre moins grand';
            }
        } else {
            $errors['pop'] = 'Veuillez renseigner un entier';
        }
    } else {
        $errors['pop'] = 'Veuillez renseigner une population';
    }
    // if no error
    if(count($errors) == 0) {
        // INSERT INTO new city
        $sql = "INSERT INTO city (Name,CountryCode, District, Population )
                VALUES (:nom,:code,:dis,:pop)";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', $nom);
        $query->bindValue('code', mb_strtoupper($code));
        $query->bindValue('dis', $district);
        $query->bindValue('pop', $pop);
        $query->execute();
        $success = true;
        //header('Location: index.php');
        $newId = $pdo->lastInsertId();
        header('Location: detail-city.php?id=' . $newId);
    }
}

//debug($errors);
//debug($_POST);

include('inc/header.php'); ?>
    <h1>Ajouter une ville</h1>

    <form action="" method="post" novalidate class="wrap">
        <label for="nom">Nom de la ville</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom'];} ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom'];} ?></span>

        <label for="code">Code</label>
        <input type="text" id="code" name="code" value="<?php if(!empty($_POST['code'])) {echo $_POST['code'];} ?>">
        <span class="error"><?php if(!empty($errors['code'])) {echo $errors['code'];} ?></span>

        <label for="district">District</label>
        <input type="text" id="district" name="district" value="<?php if(!empty($_POST['district'])) {echo $_POST['district'];} ?>">
        <span class="error"><?php if(!empty($errors['district'])) {echo $errors['district'];} ?></span>

        <label for="pop">Population</label>
        <input type="text" id="pop" name="pop" value="<?php if(!empty($_POST['pop'])) {echo $_POST['pop'];} ?>">
        <span class="error"><?php if(!empty($errors['pop'])) {echo $errors['pop'];} ?></span>

        <input type="submit" name="submitted" value="Ajouter une ville">
    </form>

<?php include('inc/footer.php');