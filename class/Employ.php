<?php




class Employ
{
    protected int $id;
    protected string $nameEmploy;
    protected $ageEmploy;
    protected string $sexeEmploy;

    public function __construct($data)
    {
        if(isset($data['id'])){
           $this->id = $data['id'];
        }
        $this->nameEmploy = $data['name_employ'];
        $this->ageEmploy = $data['age_employ'];
        $this->sexeEmploy = $data['sexe_employ'];
    }



    /**
     * Get the value of nameEmploy
     */
    public function getNameEmploy()
    {
        return $this->nameEmploy;
    }

    /**
     * Set the value of nameEmploy
     *
     * @return  self
     */
    public function setNameEmploy($nameEmploy)
    {
        $this->nameEmploy = $nameEmploy;

        return $this;
    }

    /**
     * Get the value of ageEmploy
     */
    public function getAgeEmploy()
    {
        return $this->ageEmploy;
    }

    /**
     * Set the value of ageEmploy
     *
     * @return  self
     */
    public function setAgeEmploy($ageEmploy)
    {
        $this->ageEmploy = $ageEmploy;

        return $this;
    }

    /**
     * Get the value of sexeEmploy
     */
    public function getSexeEmploy()
    {
        return $this->sexeEmploy;
    }

    /**
     * Set the value of sexeEmploy
     *
     * @return  self
     */
    public function setSexeEmploy($sexeEmploy)
    {
        $this->sexeEmploy = $sexeEmploy;

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