<?php

require_once('../utils/autoload.php');
require_once('../utils/connexion_database.php');

class EmployManagement {

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
        $resultEmploy = $request->fetchAll();var_dump($resultEmploy);
        return $resultEmploy;
      
    }


    public function addEmploy(Employ $nameEmploy) {

    $existingEmploy = $this->checkEmploy($nameEmploy);

    if (empty($existingEmploy)) {
      
         $request = $this->db->prepare('INSERT INTO employ (name_employ) VALUES (:name_employ)');
        $request->execute([

            'name_employ' => $nameEmploy->getNameEmploy()
            
        ]);

        $id = $this->db->lastInsertId();
           $nameEmploy->setId($id);


    

}

}
}