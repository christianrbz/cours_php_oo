<?php 

class User {

    private $prenom;
    private $nom;
    private $age;

    /**
     * On ne peut pas accéder aux propriétés 'private' en dehors de la classe.
     * Pour définir les valeurs de ces propriétés je dois créer des méthodes 'public' que l'on appelle getter et setter
     * Les getter permettent de récupérer les informations.
     * Les setter permettent de définir les valeurs.
     * 
     * Ces getter/setter me permettent de controler l'intégralité des données.
     */

     public function getPrenom() {
        /**
         * $this fait référence à un objet de la classe User. Pour rappel une classe est un plan de construction. Je ne connais pas au moment de la création de classe le nom des objets. Je ne peux donc pas utiliser ces noms dans la classe. 
         * Si j'ai besoin de faire référence à un objet de la classe User je vais faire appel à $this.
         */
        return $this->prenom;
     }

     public function getNom() {
        return $this->nom;
     }

     public function getAge() {
        return $this->age;
     }
     
     public function setPrenom($prenom) {
        if ( preg_match("/^[a-zA-Z]+$/", $prenom) ) {
            $this->prenom = $prenom;
        } else {
            echo "ERREUR : Le prénom ne doit contenir que des lettres !";
        }
        
    }
    
    public function setNom($nom) {
       if ( ctype_alpha($nom) ) {
        $this->nom= $nom;
       } else {
        echo "ERREUR le nom ne doit contenir que des lettres <br>";
       }
       
      
    }
    
    public function setAge($age) {
        if (is_numeric($age)) {
            $this->age = $age;
        } else {
            echo "ERREUR l'age doit être indiqué en chiffre ! <br>";
        }
        
     }
}

$user = new User();
$user->setPrenom("Christian");
$user->setNom("Reubrez");
$user->setAge(28);

echo $user->getPrenom();
echo $user->getNom();
echo $user->getAge();

