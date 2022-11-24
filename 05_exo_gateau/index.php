<?php 


// 1 - Créez l'arboresence de notre exercice. 
//     => 3 fichiers 
//         - Gateau.php (contiendra la classe Gateau )
//         - Ingredient.php (contiendra la classe Ingredient )
//         - index.php (nous servira à appeler les classes et faire les tests)

// 2 - Dans Gateau.php
//     2.1 - Créez la classe Gateau
//             => 3 propriétés (privées)
//                     $nom;
//                     $quantiteIngredient;
//                     $nombreDePart;
//     2.2 - Créez les getter et setter

//     2.3 - Déclarez un constructeur qui obligera a rentrer un nom et la quantité d'Ingredient necessaire pour réaliser le gateau (ex : 12) 

//     2.4 - Déclarez 2 méthodes couperGateau() et distribuerGateau()
//         => couperGateau() : attendra en paramètre le nombre de part que l'on souhaite avoir (integer). La méthode enregistrera le nombre de part dans la propriété prévue ($nombreDePart) et retournera la phrase suivante : 'Le gateau a été coupé en X parts'
//         => distribuerGateau() : attendra en paramètre le nombre de part à distribuer (integer). 
//         Si le gateau n'est pas coupé alors il retournera la phrase : 'Le gateau n'a pas encore été coupé !'
//         Sinon Si le nombre de part demandé est supèrieur au nombre de part que le gateau possède alors on retournera la phrase : 'Il n'y a pas assez de part pour tout le monde ! '
//         Sinon réduire le nombre de part au niveau de la propriété et retourner la phrase : ' X parts on été distribuées. Il en reste X'

// 3 - Dans index.php
//     3.1 - Instanciez un gateau que vous appelerez 'fraisier'
//     3.2 - Utilisez les méthodes couperGateau() et distribuerGateau()



// 4 - Dans Ingredient.php
//     4.1 - Créez la classe Ingredient
//             => 2 propriétés (privées)
//                     $nom;
//                     $stock;
//     4.2 - Créez les getter et setter
//     4.3 - Déclarez un constructeur qui obligera a rentrer un nom et le stock de l'ingredient (integer) 

//     4.4 - Déclarez une méthode reduireStock() qui prendra en paramètre la quantité à réduire. 
//     Cette méthode permettra de réduire le stock en fonction du chiffre passé en paramètre

// 5 - Dans Gateau.php 
//     5.1 - Créez une nouvelle méthode qui s'appellera cuisinerGateau() et qui attendra en paramètre un objet de la classe Ingredient
//         Dans cette méthode, 
//         Si le stock de l'ingredient est supèrieur ou égal à la quantité d'ingredient nécessaire pour faire le gateau ($quantiteIngredient) alors on réduit le stock en fonction de cette quantité. Et on retourne la phrase : 'Le gâteau est prêt ! Le stock de l'ingrédient X est maintenant de X ! '

//         Sinon je retourne la phrase : 'Il n'y a pas assez de <indiquer ici le nom de l'ingrédient> pour faire le gâteau <indiquer ici le nom du gateau>'

require_once "Gateau.php";

$gateau = new Gateau("fraisier");

echo "Le gateau est un : " . $gateau->getNom() . "<br>";

$gateau->couperGateau(4);
$gateau->distribuerGateau(1);

require_once "Ingredient.php";

$ingredient = new Ingredient("fraises", "15");

echo "L'ingrédient du gateau est : " . $ingredient->getNom() . " et le stock est : " . $ingredient->getStock() ."<br>";

$ingredient->reduireStock(4);









