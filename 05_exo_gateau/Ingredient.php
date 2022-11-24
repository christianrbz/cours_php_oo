<?php 

class Ingredient {

    private $nom;
    private $stock;

    public function __construct($nom, $stock) {
        $this->setNom($nom);
        $this->setstock($stock);
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
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function reduireStock($stock) {
        $this->setStock($this->getStock() - $stock);
        echo "Il reste : " . ($this->getstock()). " stocks <br>";
    }
}