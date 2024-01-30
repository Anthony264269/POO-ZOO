<?php

include_once('../utils/autoload.php');

class Voliere extends Enclos
{
    protected array $aviaryAuthorization;

    public function construct(array $data)
    {
        parent::__construct($data);
    }

    public function cleanTopEncosure()
    {
        echo 'je frotte le haut de la volière';
    }

    
     

  public function getAviaryAuthorization(){
      return $this->aviaryAuthorization;}

    
     


public function setAviaryAuthorization($aviaryAuthorization){$this->aviaryAuthorization = $aviaryAuthorization;

        return $this;
    }
}
