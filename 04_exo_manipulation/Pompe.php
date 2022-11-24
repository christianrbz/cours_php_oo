<?php 

class Pompe {

    private $litresEssence;
    private $essenceDistribue;

    public function __construct($litresEssence) {
        // echo "Instanciation de la classe Vehicule <br>";
        $this->setLitresEssence($litresEssence);
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
     * Get the value of essenceDistribue
     */ 
    public function getEssenceDistribue()
    {
        return $this->essenceDistribue;
    }

    /**
     * Set the value of essenceDistribue
     *
     * @return  self
     */ 

    public function setEssenceDistribue($essenceDistribue)
    {
        $this->essenceDistribue = $essenceDistribue;

        return $this;
    }

    // On fait ici de l'injection de dépendance. C'est à dire qu'on utilise en paramètre un objet d'une classe externe.
    public function fairePlein(Vehicule $vehicule){

        // Définir le nombre de litres d'essence à distribuer 
        $this->setEssenceDistribue( $vehicule->getReservoirMax() - $vehicule->getLitresEssence() );

        // Ajouter de l'essence au véhicule
        $vehicule->ajouterEssence($this->getEssenceDistribue());

        // Réduire le nombre de litres d'essence de la pompe 
        $this->setLitresEssence( $this->getLitresEssence() - $this->getEssenceDistribue() );
    }
}
