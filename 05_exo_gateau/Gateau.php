<?php

class Gateau
{

    private $nom;
    private $quantiteIngredient;
    private $nombreDePart;

    public function __construct($nom, $quantiteIngredient = 12)
    {
        $this->setNom($nom);
        $this->setQuantiteIngredient($quantiteIngredient);
    }


    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of quantiteIngredient
     */
    public function getQuantiteIngredient()
    {
        return $this->quantiteIngredient;
    }

    /**
     * Set the value of quantiteIngredient
     *
     * @return  self
     */
    public function setQuantiteIngredient($quantiteIngredient)
    {
        $this->quantiteIngredient = $quantiteIngredient;

        return $this;
    }

    /**
     * Get the value of nombreDePart
     */
    public function getNombreDePart()
    {
        return $this->nombreDePart;
    }

    /**
     * Set the value of nombreDePart
     *
     * @return  self
     */
    public function setNombreDePart($nombreDePart)
    {
        $this->nombreDePart = $nombreDePart;

        return $this;
    }


    public function couperGateau($nbPart)
    {

        // Enregistrer dans la propriété nombreDePart la nouvelle valeur 
        $this->setNombreDePart($nbPart);

        // Je renvoie un message
        // return "Le gateau a été coupé en " . $this->getNombreDePart() . " parts <br>"; 
        return "Le gateau a été coupé en " . $nbPart . " parts <br>";
    }

    public function distribuerGateau($nbPartDistribue)
    {

        // Si le gateau n'est pas coupé 
        // if ( empty($this->getNombreDePart()) ) {
        if ($this->getNombreDePart() == 0) {
            return "Le gateau n'a pas encore été coupé ! <br>";
        } elseif ($nbPartDistribue > $this->getNombreDePart()) {  // Sinon Si le nombre de part demandé est supérieur au nombre de part que le gateau possède 
            return "Il n'y a pas assez de part pour tout le monde !<br>";
        } else {  // Sinon réduire le nombre de part au niveau de la propriété 
            $this->setNombreDePart($this->getNombreDePart() - $nbPartDistribue);
            return $nbPartDistribue . " parts on été distribuées. Il en reste : " . ($this->getNombreDePart()) . "<br>";
        }
    }

    public function cuisinerGateau(Ingredient $ingredient)
    {
        if ( $ingredient->getStock() >= $this->getQuantiteIngredient() ) {
            $ingredient->reduireStock($this->getQuantiteIngredient() );
            return "Le gateau est prêt ! <br> 
                    Le stock de " . $ingredient->getNom() . " est maintenant de " . $ingredient->getStock() . "<br>";
        } else {
            return "Il n' y a pas assez de " . $ingredient->getNom() . " pour faire le gateau " . $this->getNom() . "<br>
                    Il y'a " . $ingredient->getStock() . " " . $ingredient->getNom(). " en stock <br>";
                    
        }
    }
}
