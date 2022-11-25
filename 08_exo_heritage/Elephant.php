<?php 

class Elephant extends Animal {

    public function quiSuisJe() {
        return  "Je suis un éléphant et " . parent::deplacement(). "<br>";
    }


}