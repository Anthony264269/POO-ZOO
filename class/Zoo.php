<?php



class Zoo {
    protected int $id;
    protected string $nameZoo;
    protected $createdEmploy ;
    protected int $numberEnclosurMax = 10 ;
    protected array $arrayEnclosur = ["afficher parm de l'enclos"];

    public function __construct(string $nameZoo, array $data)
    {
        $this->nameZoo = $nameZoo;
        $this->createdEmploy = new Employ($data);
    }

    public function displayEnclosur()
    {
        // afficher le contenue de tous les enclos
    }
    public function main()
    {

        // Pour chaque animal du zoo, on va aléatoirement modifier les valeurs des variables d'instance de cet animal (par exemple on le rend malade, on l'endort ou on l'affame).
        // Pour chaque enclos, on modifie aléatoirement son état de propreté, sa salinité, etc...
        // Enfin on passe la main à l'employé (donc à vous, utilisateur) pour qu'il s'occupe du zoo.

    }

    /**
     * Get the value of nameZoo
     */ 
    public function getNameZoo()
    {
        return $this->nameZoo;
    }

    /**
     * Set the value of nameZoo
     *
     * @return  self
     */ 
    public function setNameZoo($nameZoo)
    {
        $this->nameZoo = $nameZoo;

        return $this;
    }

    /**
     * Get the value of createdEmploy
     */ 
    public function getCreatedEmploy()
    {
        return $this->createdEmploy;
    }

    /**
     * Set the value of createdEmploy
     *
     * @return  self
     */ 
    public function setCreatedEmploy($createdEmploy)
    {
        $this->createdEmploy = $createdEmploy;

        return $this;
    }

    /**
     * Get the value of numberEnclosurMax
     */ 
    public function getNumberEnclosurMax()
    {
        return $this->numberEnclosurMax;
    }

    /**
     * Set the value of numberEnclosurMax
     *
     * @return  self
     */ 
    public function setNumberEnclosurMax($numberEnclosurMax)
    {
        $this->numberEnclosurMax = $numberEnclosurMax;

        return $this;
    }

    /**
     * Get the value of arrayEnclosur
     */ 
    public function getArrayEnclosur()
    {
        return $this->arrayEnclosur;
    }

    /**
     * Set the value of arrayEnclosur
     *
     * @return  self
     */ 
    public function setArrayEnclosur($arrayEnclosur)
    {
        $this->arrayEnclosur = $arrayEnclosur;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
