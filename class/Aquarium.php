<?php

class Aquarium extends Enclos
{
    protected array $fishAuthorization;
    protected bool $saltwater = true;

    public function construct(array $data)
    {
        parent::__construct($data);
    }

     

  public function getFishAuthorization(){
      return $this->fishAuthorization;}

    
     


public function setFishAuthorization($fishAuthorization){$this->fishAuthorization = $fishAuthorization;

        return $this;
    }

    
     

  public function getSaltwater(){
      return $this->saltwater;}

    
     


public function setSaltwater($saltwater){$this->saltwater = $saltwater;

        return $this;
    }
}

