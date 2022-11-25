<?php

/**
 * Dans sa BDD l'entreprise stock des informations de personnes : 
 *      Employés
 *      Clients
 *          Premium
 * 
 * Personne
 *      nom
 *      prenom
 *      age
 * 
 * Employe extends Personne
 *      service
 *      salaire
 * 
 * Client extends Personne
 *      email 
 *      adresse
 *      numeroClient
 * 
 * Premium extends Clients
 *      reduction
 */

class Personne
{
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function identite()
    {
        return "Nom : $this->nom <br>
                Prenom : $this->prenom <br>
                Age : $this->age <br>";
    }
}

class Employe extends Personne
{
    private $service;
    private $salaire;

    public function __construct($nom, $prenom, $age, $service, $salaire)
    {
        parent::__construct($nom, $prenom, $age);
        $this->service = $service;
        $this->salaire = $salaire;
    }

    public function identite()
    {
        // $this->identite(); // Méthode récursive 
        // parent::identite();
        return parent::identite() . "Service : $this->service <br>
                Salaire : $this->salaire <br>";
    }
}

class Client extends Personne
{

    protected $email;
    protected $adresse;
    protected $numeroClient;

    public function __construct($nom, $prenom, $age, $email, $adresse, $numeroClient)
    {

        parent::__construct($nom, $prenom, $age);
        $this->email = $email;
        $this->adresse = $adresse;
        $this->numeroClient = $numeroClient;
    }

    public function identite()
    {
        return parent::identite() . "Numéro Client : $this->numeroClient <br>
                                    Email : $this->email <br>
                                    Adresse : $this->adresse <br>";
    }
}

class Premium extends Client
{

    private $reduction;

    public function __construct($nom, $prenom, $age, $email, $adresse, $numeroClient, $reduction)
    {
        parent::__construct($nom, $prenom, $age, $email, $adresse, $numeroClient);
        $this->reduction = $reduction;
    }

    public function identite()
    {
        return parent::identite() . "Réduction : $this->reduction <br>";
    }
}



$employe = new Employe("Reubrez", "Christian", 28, 'informatique', 3000);

echo $employe->identite();

echo "<hr>";
$client = new Client("Ateur", "Nordine", 32, "nordine@gmail.com", "19 rue des lilas", "123");

echo $client->identite();
echo "<hr>";

$clientPremium = new Premium("Tine", "Clément", 26, "tine@gmail.com", "34 blv des tulipes", "102", "15%");
echo $clientPremium->identite();
