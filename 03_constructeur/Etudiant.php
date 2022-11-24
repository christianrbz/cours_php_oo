<?php 

class Etudiant {

    private $prenom;
    private $nom;

    /**
     * __construct() est une méthode magique
     * Les méthodes magiques sont appelées automatiquement au moment de l'instanciation de la classe. 
     * On a passé en paramètre de la méthode __construct() le paramètre $prenom. La méthode __construct a donc maintenant besoin pour fonctionner de cette information. 
     * 
     * Si la méthode est appelée automatiquement, alors j'aurais besoin de passer à la classe les informations nécessaires. 
     * 
     * On utilisera le construct pour obliger l'utilisateur à nous donner au moment de l'instanciation les informations nécessaires au bon fonctionnement de ma classe. 
     * 
     * A partir de maintenant un Etudiant aura forcément un prénom
     */
    
    // public function __construct($prenom, $nom = "Reubrez") {
    public function __construct($prenom) {
        echo "Instanciation de la classe Etudiant <br>";
        $this->setPrenom($prenom);
    }


    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
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
}