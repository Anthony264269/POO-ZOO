<?php

include_once('./utils/autoload.php');
// require_once('../utils/connexion_database.php');

class Employ
{
    protected string $nameEmploy;
    protected string $ageEmploy;
    protected string $sexeEmploy;

    public function __construct($nameEmploy, $ageEmploy, $sexeEmploy)
    {
        $this->nameEmploy = $nameEmploy;
        $this->ageEmploy = $ageEmploy;
        $this->sexeEmploy = $sexeEmploy;
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
}