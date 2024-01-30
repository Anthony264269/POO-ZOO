<?php
require_once('./utils/autoload.php');
require_once('./utils/connexion_database.php');

// require_once('./utils/connexion_database.php');
if (
    isset($_POST['name-zoo']) && !empty($_POST['name-zoo']) &&
    isset($_POST['name-employ']) && !empty($_POST['name-employ']) &&
    isset($_POST['age-employ']) && !empty($_POST['age-employ']) &&
    isset($_POST['sexe-employ']) && !empty($_POST['sexe-employ'])
    
) {
// var_dump($_POST);
    $nameZoo = $_POST['name-zoo'];
    $nameEmploy = $_POST['name-employ'];
    $arrayEmploy  = array(
        'name_employ' => $_POST['name-employ'],
        'age_employ' => $_POST['age-employ'],
        'sexe_employ' => $_POST['sexe-employ'],
    );
    $newZooManagement = new ZooManagement($db);
    $newZoo = new Zoo($nameZoo,$arrayEmploy);
    $newEmploy = $newZoo->getCreatedEmploy();
    // var_dump($newZoo);
    // echo $newZoo->getNameZoo();
    $newZooManagement->addZoo($newZoo);
    $newEmployManagement = new EmployManagement($db);
    $newEmployManagement->addEmploy($newEmploy);
    // var_dump($newZooManagement);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./utils/style.css"> -->
    <title>Document</title>
</head>
<body>
     <!-- created zoo -->
    <!-- created employ -->
    <div class="d-flex flex-column">
        <div>
            <h3> Crée votre ZOO :</h3>
            <form action="" method="post">
                <div>
                    <label for="name-zoo"> Quel nom veux tu donner a ton zoo : </label>
                    <input type="text" name="name-zoo" required>
                </div>
                <div>
                    <label for="name"> Donner un nom a votre employer :</label>
                    <input type="text" name="name-employ" required>
                </div>
                <div>
                    <label for="age"> Donner un age a votre employer :</label>
                    <input type="date" name="age-employ" required>
                </div>
                <div>
                    <select name="sexe-employ" id="sexe-employ" required>
                       <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                    </select>
                </div>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>