
<?php

include_once('../utils/autoload.php');
require_once('../utils/connexion_database.php');


var_dump($_POST);

$newEnclosManagement = new EnclosManagement($db);
if ($_POST['enclosure-id']) {
   var_dump($_POST);
    echo 'gros burne sa maman';
}

if (
    isset($_POST['enclosure-name']) && !empty($_POST['enclosure-name']) &&
    isset($_POST['enclosure-type']) && !empty($_POST['enclosure-type'])
) {

    // $this->enclosureType = $enclosureType;
    // $this->enclosureName = $enclosureName;
    // $this->cleanLiness = $cleanLiness;
    // $this->numberOfAnimals = $numberOfAnimals;
    // var_dump(intval($_POST['number-of-animals']));
    // var_dump($_POST['enclosure-type']);
    // var_dump($_POST['enclosure-name']);
    // var_dump($_POST['clean-liness']);

    $arrayStatEnclosure = array(

        'numberOfAnimals' => intval($_POST['number-of-animals']),
        'enclosureType' => $_POST['enclosure-type'],
        'enclosureName' => $_POST['enclosure-name'],
        'cleanLiness' => $_POST['clean-liness']

    );
    $enclos = $_POST['enclosure-type'];
    $newEnclos = new Enclos($arrayStatEnclosure);
    $posts = $newEnclosManagement->addEnclos($newEnclos);
}

$posts = $newEnclosManagement->enclosurePoster()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../utils/style.css">
    <title>Document</title>
</head>

<body id="">

    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-success mt-4" role="alert">
            <?php echo $_GET['error'] ?>
        </div>
    <?php } else if (isset($_GET['success'])) { ?>
        <div class="alert alert-success mt-4" role="alert">
            <?php echo $_GET['success'] ?>
        </div>
    <?php } ?>
    <h1 class="d-flex justify-content-center">Mon Zoo: </h1>
    <div class="d-flex flex-column container">
        <div>
            <form action="" method="post">

                <h3>Crée un enclos :</h3>

                <label for="enclosure-name"> Nom de l'enclos : </label>
                <input type="text" name="enclosure-name" placeholder="Nom de l'enclos" require>

                <select name="enclosure-type" id="enclosure-type" required>
                    <option value="Enclos">Normal</option>
                    <option value="Voliere">Voliére</option>
                    <option value="Aquarium">Bassin</option>
                </select>
                <input type="hidden" name="number-of-animals" value="0">
                <input type="hidden" name="clean-liness" value="clean">
                <button type="submit">Valider</button>


            </form>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id enclos</th>
                        <th scope="col">Nom de l'enclos</th>
                        <th scope="col">Type de l'enclos</th>
                        <th scope="col">Nombre d'animaux par enclos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post) {

                        $postDelete = $post['id'] ;
                        var_dump($postDelete)?>

                        <tr>
                            <th scope="row"><?php echo $post['id'] ?></th>
                            <td><?php echo $post['enclosure_name'] ?></td>
                            <td><?php echo $post['enclosure_type'] ?></td>
                            <td><?php echo $post['number_animals'] ?></td>
                            <td>
                                <form action="" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet enclos ?')">
                                    <input type="hidden" name="enclosure-id" value="<?php $postDelete ?>">
                                    <button type="submit" name="delete-enclosure">SUPPRIMER</button>
                                </form>
                            </td>
                        </tr>
                    <?php }  ?>

                </tbody>
            </table>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>