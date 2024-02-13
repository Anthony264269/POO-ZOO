<?php

class EnclosManagement
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkEnclos(Enclos $enclosurename)
    {
        $request = $this->db->prepare('SELECT * FROM enclos WHERE enclosure_name =:enclosure_name');
        $request->execute([
            'enclosure_name' => $enclosurename->getEnclosureName()
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

    public function deleteEnclos(Enclos $enclos)
    {


        $sql = "DELETE FROM enclos WHERE enclos.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $enclos->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }
    public function addEnclos(Enclos $enclosurname)
    {
        $existingenclos = $this->checkEnclos($enclosurname);
        $numberEnclos = $this->numberMaxEnclos();

        if ($numberEnclos >= 6) { ?>
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

    public function enclosurePoster()
    {
        $idZoo = $_SESSION['idZoo'];
        $result = $this->db->query("SELECT * FROM enclos WHERE enclos.id_zoo = $idZoo ORDER BY id DESC");
        $posts = $result->fetchAll();


        $postsArray = [];
        foreach ($posts as $post) {
            $newPost = new Enclos($post);
            $postsArray[] = $newPost;
        }

        return $postsArray;
    }

    public function findById($id)
    {

        $request = $this->db->prepare('SELECT * FROM enclos WHERE enclos.id = :id');
        $request->execute([
            'id' => $id
        ]);
        $result = $request->fetch();
        // var_dump($result);
        $newEnclos = new Enclos($result);

        return $newEnclos;
    }
}
