<?php

class Poisson extends Animaux
{

    public function __construct($species_name, $weight, $size, $age, $type, $sexe)
    {

        $this->species_name = $species_name;
        $this->weight =  $weight;
        $this->size = $size;
        $this->age = $age;
        $this->type = $type;
        $this->sexe = $sexe;
    }

    public function hunger()
    {
    }

    public function sleep()
    {
    }

    public function sick()
    {
    }

    public function noise()
    {

        echo 'bloublou';
    }

    public function swim()
    {

        echo 'Je nage dans mon bassin';
    }
}