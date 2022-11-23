<?php

/** 
 *  Pour déclarer une classe PHP on utilise le mot clé "class".
 *  Ce mot clé est suivi du nom que l'on souhaite donner à la classe. Ce nom doit OBLIGATOIREMENT être en majuscule. Le reste doit être écrit en camelCase.
 * !!!!! ATTENTION TRES IMPORTANT !!!!! Le nom du fichier doit obligatoirement être identique au nom de la classe 
 * 
 */
class Panier
{

    /**
     * Les variables présentent à l'intérieur d'une classe sont appelées des 'propriétés'.
     * Les fonctions présentent à l'intérieur d'une classe sont appelées des 'méthodes'. 
     * 
     * On est obligé en Orienté Objet de définir la portée d'une propriété et d'une méthode.
     * Pour définir la portée nous avons 3 mots clés :
     *      - public => accessible partout dans mon code (dans la classe et en dehors de celle-ci)
     *      - private => accessible uniquement dans la classe où la propriété/ la méthode a été déclarée 
     *      - protected => accessible dans la classe où elle a été déclarée mais également dans les classes héritières. 
     */

    public $nbProduits; // Cette propriété est accessible partout dans mon code 

    public function ajouterArticle()
    {
        return "L'article a été ajouté <br>";
    }

    private function retirerArticle()
    {
        return "L'article a été retiré <br>";
    }
}

$panier = new Panier(); // On instancie un objet de la classe Panier grâce au mot clé "new"
// $panier devient un objet de la classe Panier()
// On peut donc maintenant utiliser les propriétés et les méthodes de la classe Panier() via l'objet $panier 

echo "<pre>";
var_dump($panier);
echo "</pre>";

// Pour accéder à une propriété ou une méthode d'un objet on utilise '->'
$panier->nbProduits = 5; // Je définie ici le nombre de produit.

echo "<pre>";
var_dump($panier);
echo "</pre>";

echo "Le panier n°1 possède $panier->nbProduits produit <br>"; // On accède à la propriété nbProduits, qui a une portée 'public' à l'intérieur de ma classe Panier 

echo "Ajout d'un article au panier : " . $panier->ajouterArticle(); // On accède de la même manière à une méthode 
// Attention lorsque l'on affiche le résultat d'une méthode, on est obligé de faire de la concaténation. 

// echo "Je supprime un article : " .$panier->retirerArticle(); // ERREUR on ne peut pas accéder à une méthode private à l'extérieur de la classe.
