<?php

class EnclosManagement
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkEnclos(Enclos $enclosurname)
    {
        $request = $this->db->prepare('SELECT * FROM enclos WHERE enclosure_name =:enclosure_name');
        $request->execute([
            'enclosure_name' => $enclosurname->getEnclosureName()
        ]);
        // Utiliser fetch pour obtenir les résultats de la requête
        $result = $request->fetch(PDO::FETCH_ASSOC);

        // Si des résultats sont trouvés, cela signifie que l'enclos existe déjà
        return ($result !== false);
    }
    public function numberMaxEnclos()
    {
        $idZoo = $_SESSION['idZoo'];

        $sql = $this->db->prepare("SELECT * FROM enclos WHERE id_zoo = $idZoo");
        $sql->execute();
        $statement = $sql->fetchAll();


        return count($statement);
    }
    public function addEnclos(Enclos $enclosurname)
    {
        $existingenclos = $this->checkEnclos($enclosurname);
        var_dump($existingenclos);
        $numberEnclos = $this->numberMaxEnclos();

        if ($numberEnclos >= 6) {
            echo 'Vous ne pouvez plus ajouter des enclos!!!';
        } else {
            if (!$existingenclos) {

                $request = $this->db->prepare("INSERT INTO enclos (number_animals, enclosure_type, enclosure_name, id_zoo) VALUE (:number_animals, :enclosure_type, :enclosure_name, :id_zoo) ");
                $request->execute([
                    'number_animals' => $enclosurname->getNumberOfAnimals(),
                    'enclosure_type' => $enclosurname->getEnclosureType(),
                    'enclosure_name' => $enclosurname->getEnclosureName(),
                    'id_zoo' => $_SESSION['idZoo']
                ]);
            }
        }
    }

    public function enclosurePoster()
    {

        $result = $this->db->query("SELECT * FROM enclos ORDER BY id DESC");
        $result->execute();
        $posts = $result->fetchAll();

        return $posts;
    }

    public function deleteEnclos()
    {

        $request = $this->db->prepare("DELETE FROM enclos WHERE id");
        $request->execute();
    }
}
