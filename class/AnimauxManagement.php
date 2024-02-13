<?php

class AnimauxManagement
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function numberMaxAnimals()
    {
        $idZoo = $_SESSION['idZoo'];

        $sql = $this->db->prepare("SELECT * FROM enclos WHERE id_zoo = $idZoo");
        $sql->execute();
        $statement = $sql->fetchAll();


        return count($statement);
    }

    public function addAnimaux(Enclos $nameAnimals)
    {
        if ($numberMaxAnimals >= 6) { ?>
            <div id="notification" class="alert alert-danger mt-4" role="alert">
                <?php ?>
                <?php echo 'Vous ne pouvez plus ajouter des enclos !'; ?>
            </div>
<?php
        } else {
            if (!$existingenclos) {

                $request = $this->db->prepare("INSERT INTO enclos (number_animals ,enclosure_type, enclosure_name, id_zoo) VALUE (:number_animals , :enclosure_type,:enclosure_name, :id_zoo)");
                $request->execute([
                    'number_animals' => $enclosurname->getNumberOfAnimals(),
                    'enclosure_type' => $enclosurname->getEnclosureType(),
                    'enclosure_name' => $enclosurname->getEnclosureName(),
                    'id_zoo' => $_SESSION['idZoo']
                ]);
            }
        }
    }

    
}