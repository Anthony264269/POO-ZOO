<?php





class EmployManagement
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkEmploy(Employ $nameEmploy)
    {


        $request = $this->db->prepare('SELECT * FROM employ WHERE employ.name_employ = :name_employ');
        $request->execute([
            'name_employ' => $nameEmploy->getNameEmploy()
        ]);
        $resultEmploy = $request->fetch();


        $_SESSION['name-employ'] = $nameEmploy->getNameEmploy();
        $_SESSION['employ_id'] = $resultEmploy['id'];
        header('Location: ./class/Interface.php?success=Mon compte existe déja et je suis connecté');
        // var_dump($_SESSION['resultEmploy']); 
        return $resultEmploy;
    }


    public function addEmploy(Employ $nameEmploy)
    {

        $existingEmploy = $this->checkEmploy($nameEmploy);

        if (empty($existingEmploy)) {

            $request = $this->db->prepare('INSERT INTO employ (name_employ, age_employ, sexe_employ, id_zoo) VALUES (:name_employ, :age_employ, :sexe_employ, :id_zoo)');
            $request->execute([

                'name_employ' => $nameEmploy->getNameEmploy(),
                'age_employ' => $nameEmploy->getAgeEmploy(),
                'sexe_employ' => $nameEmploy->getSexeEmploy(),
                'id_zoo' =>  $_SESSION['idZoo']

            ]);

            $id = $this->db->lastInsertId();
            $nameEmploy->setId($id);
            $_SESSION['name-employ'] = $nameEmploy->getNameEmploy();
            $_SESSION['employ_id'] = $id;
            header('Location: ./class/Interface.php?success=Mon compte existe déja et je suis connecté');
        }
    }
    public function findById($id)
    {
        $request = $this->db->prepare('SELECT * FROM employ WHERE id = :id');
        $request->execute([
            'id' => $id
        ]);
        $result = $request->fetch(); 
        // var_dump($result);
        $newEmploy = new Employ($result);
        return $newEmploy;
    }
}
