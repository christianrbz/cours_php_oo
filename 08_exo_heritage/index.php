<?php 
// 1- Créez 4 fichiers 
// - Animal.php
// - Elephant.php 
// - Chat.php 
// - index.php

// 2- Dans Animal.php 
// - Déclarez une classe Animal 
// - Déclarez une méthode public manger()
//     Elle retourne la phrase "je mange chaque jour"

// 3- Dans Elephant.php 
// - Déclarez une class Elephant qui étend la classe Animal
// - Déclarez une méthode public quiSuisJe()
//     Elle retourne la phrase "Je suis un elephant"

// 4- Dans Chat.php 
// - Déclarez une class Chat qui étend la classe Animal
// - Déclarez une méthode public quiSuisJe()
//     Elle retourne la phrase "Je suis un chat"

// 5- Dans Animal.php
// Déclarez une méthode protected deplacement()
//     Elle retourne la phrase "Je me déplace"

// 6- Dans Elephant.php   
// Modifiez la méthode quiSuisJe() 
// Elle doit maintenant retourner "Je suis un elephant et je me déplace" 
//     Vous devez utiliser la méthode protected.

// 7- Dans index.php
// Déclarez un objet elephant 
// Afficher le message de la méthode manger()
// Afficher le message de la méthode quiSuisJe()

// Déclarez un objet chat 
// Afficher le message de la méthode manger()
// Afficher le message de la méthode quiSuisJe()

// 8- Dans Chat.php  
// Je souhaite afficher dans la méthode manger "je mange chaque jour des croquettes" !
// Utilisez ici la surcharge

require_once "Animal.php";
require_once "Elephant.php";
require_once "Chat.php";

$elephant = new Elephant();

echo $elephant->manger();
echo "<br>";
echo $elephant->quiSuisJe();
echo "<hr>";

$chat = new Chat();

echo $chat->manger();
echo "<br>";
echo $chat->quiSuisJe();
echo "<hr>";

echo $chat->phrase();