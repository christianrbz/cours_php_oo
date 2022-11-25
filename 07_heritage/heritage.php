<?php

class A
{

    public function test1()
    {
        return "Function test1 class A <br>";
    }

    protected function testProtected()
    {
        return "Fonction en portée Protected <br>";
    }
}

class B extends A
{

    public function test2()
    {
        return "Function test2 class B <br>";
    }
}

$b = new B(); // J'instancie un objet de la classe B 
echo $b->test2();
echo $b->test1();

class C extends B
{

    public function test3()
    {
        return "Function test3 class C <br>" . $this->testProtected();
    }
}

// Par effet de transivité, l'objet 'c' peut accéder aux méthodes de la classe A car la classe C étends B et B étend A 
$c = new C();
echo $c->test3();
echo $c->test2();
echo $c->test1();

// echo $b->test3(); // b n'a pas accès aux méthodes de ses enfants.

/**
 * Une classe ne peut pas hériter directement de 2 classes différentes 
 *      ex: class C extends B, A => interdit 
 * 
 * Non réflexives : Une classe ne peut pas hériter d'elle même 
 *      ex : class A extends A {} 
 * 
 * Non Symétrique 
 *      ex : class F extends E {}
 *           class E extends F {}
 *         => interdit. Si F hérite de E, alors E ne peut pas hériter de F
 */

//  echo $c->testProtected(); // Erreur je ne peux pas accéder à une méthode protected à l'extérieur de ma classe. Je peux donc y accéder uniquement dans la classe A ou dans les classes qui héritent de A directement ou indirectement. 
