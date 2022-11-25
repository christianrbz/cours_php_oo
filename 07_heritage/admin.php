<?php

class Utilisateur
{
    private $id = 15;
    private $pseudo;
    private $password;

    public function __construct()
    {
        echo "Création d'un internaute <br>";
    }

    public function seConnecter()
    {
        /**
         * -- TRAITEMENT DES DONNEES
         * -- L'INSERTION DANS LA SESSION DE l'UTILISATEUR 
         */
        return "Je me connecte <br>";
    }

    public function modifierMonProfil()
    {
        /** 
         * -- TRAITEMENT DES DONNÉES 
         *  -- LA REQUÊTE UPDATE EN SQL 
         */
        return "Modification des données <br>";
    }
}

class Admin extends Utilisateur {

    public function accessBackOffice()
    {
        /**
         * -- VÉRIFICATION DU STATUT 
         * -- REDIRECTION VERS UNE PAGE ADMIN
         */
        return "Accès autorisé au Back Office <br>";
    }
}

$admin = new Admin();

echo $admin->seConnecter();
echo $admin->accessBackOffice();

$user = new Utilisateur();
// $user->accessBackOffice(); // Ici l'utilisateur ne peut pas accéder au BackOffice 

