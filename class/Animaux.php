<?php

abstract class Animaux
{
    protected string $species_name;
    protected int $weight;
    protected float $size;
    protected int $age;
    protected string $type;
    protected bool $hunger;
    protected bool $sleep;
    protected bool $sick;
    protected string $sexe;



    abstract public function hunger();
    abstract public function sleep();
    abstract public function sick();
    abstract public function noise();


    public function __construct($species_name, $weight, $size, $age, $type, $sexe)
    {

        $this->species_name = $species_name;
        $this->weight =  $weight;
        $this->size = $size;
        $this->age = $age;
        $this->type = $type;
        $this->sexe = $sexe;
    }




    /**
     * Get the value of species_name
     */
    public function getSpecies_name()
    {
        return $this->species_name;
    }

    /**
     * Set the value of species_name
     *
     * @return  self
     */
    public function setSpecies_name($species_name)
    {
        $this->species_name = $species_name;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
}
