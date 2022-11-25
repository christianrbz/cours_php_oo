<?php 

class Maison {

    public $couleurMurs = "Blanc"; // Appartient à l'objet 
    private $nbPortes = 10; // Appartient à l'objet

    // Une constante par convention s'écrira TOUJOURS en majuscule. Attention il n'y a pas de '$' au moment de la déclaration
    // L'intérêt d'une constante est que sa valeur ne changera jamais. 
    const HAUTEUR = "4m"; // Appartient à la classe 

    public static $terrain = "300m2"; // Appartient à la classe 

    private static $nbPieces = 3; // Appartient à la classe 

    /**
     * Get the value of nbPortes
     */ 
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * Set the value of nbPortes
     *
     * @return  self
     */ 
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    /**
     * Get the value of nbPieces
     */ 
    public static function getNbPieces()
    {
        return Maison::$nbPieces;
    }

    /**
     * Set the value of nbPieces
     */ 
    public static function setNbPieces($nbPieces)
    {
        Maison::$nbPieces = $nbPieces;
    }
}

$maison = new Maison();

echo "Couleurs des murs : ". $maison->couleurMurs;
echo "<hr>"; 

echo "Nombre de portes : ". $maison->getNbPortes();
echo "<hr>";

$villa = new Maison();
$villa->couleurMurs = "Rouge";

echo "Couleurs des murs de la villa: ". $villa->couleurMurs;
echo "<hr>"; 

echo "Nombre de portes de la villa: ". $villa->getNbPortes();
echo "<hr>";

/**
 * Ici on essaye d'accéder à la constante 'HAUTEUR' 
 * On a définit plus haut qu'une constante appartenait à la classe. 
 * On ne peut donc pas accéder à la constante via un objet, on doit passer obligatoirement par la classe. 
 * L'opérateur '->' est utilisé pour accéder à un objet. Ici on passe par la classe, on doit donc utiliser l'opérateur '::'
 * 
 * C'est ce que l'on utilisait lors de la connexion à la BDD : 
 *          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
 */

echo "Hauteur du premier étage de la villa : " . Maison::HAUTEUR;
echo "<hr>";

echo "Taille du terrain : " . Maison::$terrain;
echo "<hr>";

echo "Nombre de pièces : " . $maison->getNbPieces();
echo "<hr>";

/**
 * Tous les objets ont les mêmes propriétés (couleurMurs, nbPortes, terrain ...) mais leurs valeurs peuvent changer. On peut définir la couleurMurs en fonction de notre objet. 
 * Dans certains cas nous avons besoin de définir des valeurs qui doivent être identique pour tout nos objets.
 * Pour faire cela, nous avons 2 options : 
 *          - Définition d'une constante. Une constante appartient à la classe, tous les objets auront la même valeur. La limite de la constante est que cette valeur ne pourra jamais changer.
 * 
 *          - Définition de propriétés 'static'. Ce type de propriété appartient à la classe, tous les objets auront la même valeur. L'intérêt de déclarer des propriétés static est que, contrairement à la constante, je pourrais changer sa valeur. Lorsque je change la valeur d'une propriété static, tous les objets sont impactés.
 */

$appartement = new Maison();
echo "Terrain Maison : " . Maison::$terrain;
echo "<hr>";

$appartement::$terrain = '70m2';
echo "Terrain Appartement : " . $appartement::$terrain;
echo "<hr>";

echo "Terrain Villa : " . $villa::$terrain;
echo "<hr>";

/**
 * Il existe des exceptions pour accéder aux propriétés 'static'
 *      - Je peux accéder à une propriété static depuis un objet en utilisant l'opérateur '::'
 *      - Je peux utiliser les méthodes static de manière 'normal' via l'objet. 
 */

 echo "Nombre de pièces de ma villa : " . $villa->getNbPieces();