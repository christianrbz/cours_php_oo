<?php 

class Elephant extends Animal {

    public function quiSuisJe() {
        return  "Je suis un éléphant et " . $this->deplacement(). "<br>";
    }


}