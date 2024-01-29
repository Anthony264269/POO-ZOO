<?php



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
        $result = $request->fetch();
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
           $_SESSION['idZoo'] = $id;
        //    var_dump($_SESSION['idZoo']);


        // header('Location: ./class/Interface.php?error=J ai bien créé mon compte et je suis connecté !!!');

    } else {


        $_SESSION['idZoo'] = $existingZoo['id'];
        // var_dump($_SESSION['idZoo']);
     

}

}

}