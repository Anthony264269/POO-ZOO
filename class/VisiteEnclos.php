<?php
 require_once('../utils/autoload.php');
 require_once('../utils/connexion_database.php');
 
var_dump($_SESSION['visite']);

if (isset($_POST['enclosure-id'])&& !empty($_POST['enclosure-id'])){

    $newEncloManagement = new EnclosManagement($db);
    $newEclos = new Enclos($_POST['enclosure-id']);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enclos</title>
</head>
<body>

</body>
</html>

