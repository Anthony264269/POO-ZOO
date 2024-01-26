<?php

require_once('./utils/autoload.php');
require_once('./utils/connexion_database.php');

class ZooManagement {

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkZoo(Zoo $nameZoo)
    {


        $request = $this->db->prepare('SELECT * FROM zoo WHERE zoo.name_zoo = :name_zoo');
        $request->execute([
            'name_zoo' => $nameZoo->getNameZoo()
        ]);
        $result = $request->fetchAll();
        return $result;
    }


    public function addZoo(Zoo $nameZoo) {

    $existingZoo = $this->checkZoo($nameZoo);

    if (empty($existingZoo)) {
      
         $request = $this->db->prepare('INSERT INTO zoo (name_zoo) VALUES (:name_zoo)');
        $request->execute([

            'name_zoo' => $nameZoo->getNameZoo()
            
        ]);

        $id = $this->db->lastInsertId();
           $nameZoo->setId($id);


        header('Location: ./class/Interface.php?error=J ai bien créé mon compte et je suis connecté !!!');

    } else {



       header('Location: ./class/Interface.php?success=Mon compte existe déja et je suis connecté');

}

}

}