<?php
require('inc/pdo.php');
require('inc/fonction.php');
// request
$errors = array();
$success = false;
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $ville = getCityById($id);
    // debug($ville);
    if(empty($ville)) {
        die('404');
    }
} else {
    die('404');
}
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
        // UPDATE
        $sql = "UPDATE city SET Name = :nom, District = :dis, Population = :pop, CountryCode = :code WHERE ID = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', $nom,PDO::PARAM_STR);
        $query->bindValue('code', mb_strtoupper($code),PDO::PARAM_STR);
        $query->bindValue('dis', $district,PDO::PARAM_STR);
        $query->bindValue('pop', $pop,PDO::PARAM_INT);
        $query->bindValue('id', $id,PDO::PARAM_INT);
        $query->execute();
        $success = true;
        header('Location: detail-city.php?id=' . $id);
    }
}

// debug($ville);
include('inc/header.php'); ?>
<h1>Editer une ville</h1>

    <form action="" method="post" novalidate class="wrap">
        <label for="nom">Nom de la ville</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom'];} else {echo $ville['Name'];} ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom'];} ?></span>

        <label for="code">Code</label>
        <input type="text" id="code" name="code" value="<?php if(!empty($_POST['code'])) { echo $_POST['code'];} else {echo $ville['CountryCode'];} ?>">
        <span class="error"><?php if(!empty($errors['code'])) {echo $errors['code'];} ?></span>

        <label for="district">District</label>
        <input type="text" id="district" name="district" value="<?php if(!empty($_POST['district'])) { echo $_POST['district'];} else {echo $ville['District'];} ?>">
        <span class="error"><?php if(!empty($errors['district'])) {echo $errors['district'];} ?></span>

        <label for="pop">Population</label>
        <input type="text" id="pop" name="pop" value="<?php if(!empty($_POST['pop'])) { echo $_POST['pop'];} else {echo $ville['Population'];} ?>">
        <span class="error"><?php if(!empty($errors['pop'])) {echo $errors['pop'];} ?></span>

        <input type="submit" name="submitted" value="Ajouter une ville">
    </form>

<?php include('inc/footer.php');