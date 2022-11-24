<?php 

class Vehicule {

    private $litresEssence;
    private $reservoirMax;

    
    public function __construct($litresEssence, $reservoirMax = 50) {
        $this->setLitresEssence($litresEssence);
        $this->setReservoirMax($reservoirMax);
    }


    /**
     * Get the value of litresEssence
     */ 
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    /**
     * Set the value of litresEssence
     *
     * @return  self
     */ 
    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;

        return $this;
    }

    /**
     * Get the value of reservoirMax
     */ 
    public function getReservoirMax()
    {
        return $this->reservoirMax;
    }

    /**
     * Set the value of reservoirMax
     *
     * @return  self
     */ 
    public function setReservoirMax($reservoirMax)
    {
        $this->reservoirMax = $reservoirMax;

        return $this;
    }

    /** Fonction qui permettra de remplir le véhicule. Elle change la valeur de la propriété $litreEssence */
    public function ajouterEssence($quantite) {
        if ( $quantite + $this->getLitresEssence() <=  $this->getReservoirMax() ) {
            $this->setLitresEssence($quantite + $this->getLitresEssence());
        } else {
            echo "Attention la quantité demandé est supérieur au réservoir max !";
            echo "Quantité Max autorisée : " . ($this->getReservoirMax() - $this->getLitresEssence()) . "<br>";
        }
        
       
    }

}
