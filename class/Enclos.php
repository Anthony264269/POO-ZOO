<?php

class Enclos {
    protected int $id;
    protected int $limitNumberOfAnimals = 6;
    protected int $numberOfAnimals;
    protected string $enclosureType;
    protected string $enclosureName;
    protected string $cleanLiness;
    protected int $idZoo;


    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


    public function hydrate(array $data) {

        if(isset($data['enclosure_type'])) {
            $this->setEnclosureType($data['enclosure_type']);
        }

        if(isset($data['id'])) {
            $this->setId($data['id']);
        }

        if(isset($data['enclosure_name'])) {
            $this->setEnclosureName($data['enclosure_name']);

        }
        if(isset($data['cleanLiness'])) {
            $this->setCleanLiness($data['cleanLiness']);

        }
        if(isset($data['number_animals'])) {
            $this->setNumberOfAnimals($data['number_animals']);
        }
    }
   


   
    public function getNumberOfAnimals()
    {
        return $this->numberOfAnimals;
    }

   
    public function setNumberOfAnimals($numberOfAnimals)
    {
        $this->numberOfAnimals = $numberOfAnimals;

        return $this;
    }

  
    public function getEnclosureType()
    {
        return $this->enclosureType;
    }

   
    public function setEnclosureType($enclosureType)
    {
       
            $this->enclosureType = $enclosureType;
     
        return $this;
    }
    public function getEnclosureName()
    {
        return $this->enclosureName;
    }

   
    public function setEnclosureName($enclosureName)
    {
        $this->enclosureName = $enclosureName;

        return $this;
    }

    
    public function getCleanLiness()
    {
        return $this->cleanLiness;
    }

   
    public function setCleanLiness($cleanLiness)
    {
        $this->cleanLiness = $cleanLiness;

        return $this;
    }

   
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}