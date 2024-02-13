<?php
require_once('../utils/autoload.php');
require_once('../utils/connexion_database.php');

var_dump($_POST['enclosure-id']);

if (isset($_POST['enclosure-id'])) {

    var_dump(intval($_POST['enclosure-id'])) ;




    $newEnclosManagement = new EnclosManagement($db);



    $findEnclos = $newEnclosManagement->findById(intval($_POST['enclosure-id']));
 
    var_dump($findEnclos);

    $newEnclosManagement->deleteEnclos($findEnclos);

    header('Location: ../class/Interface.php');
} else {
    echo "ID non fourni pour la suppression de l'enclos.";
}
header('Location: ../class/Interface.php');