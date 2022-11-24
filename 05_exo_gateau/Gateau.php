<?php 

class Gateau {

    private $nom;
    private $quantiteIngredient;
    private $nombreDePart;

    public function __construct($nom, $quantiteIngredient = 12) {
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

    public function couperGateau($nombreDePart) {
        $this->nombreDePart = $nombreDePart;
        echo "Le gateau a été coupé en " . $nombreDePart . " parts <br>";

    }

    public function distribuerGateau($nombreDePart) {
        if ( $this->getNombreDePart() <= 0) {
            echo "Le gateau n'a pas encore été coupé !";
        } elseif ( $nombreDePart > $this->getNombreDePart() ) {
            echo "Il n'y a pas assez de part pour tout le monde !";
        } else {
            $this->getNombreDePart() - $nombreDePart;
            $this->setNombreDePart($this->getNombreDePart() - $nombreDePart);
            echo $nombreDePart . " parts on été distribuées. Il en reste : " . ($this->getNombreDePart()). "<br>";
        }
    }

    public function cuisinerGateau(Ingredient $stock) {
        if ($stock >= $this->quantiteIngredient) {
            echo "Le gâteau est prêt ! Le stock de l'ingrédient X est maintenant de X ! ";
        }
    }
}