<?php

class Chat extends Animal
{

    public function quiSuisJe()
    {
        return "Je suis un chat <br>";
    }

    public function phrase()
    {
        return parent::manger() . " des croquettes <br>";
    }
}
