<?php

require_once 'Dog.php'; // Include the Dog class file

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testMakeSound()
    {
        $shibaInu = new Dog("Shiba Inu", "woof! woof!", true);
        $pug = new Dog("Pug", "woof!", false);

        $this->assertEquals("woof! woof!", $shibaInu->makeSound());
        $this->assertEquals("woof!", $pug->makeSound());
    }

    public function testHunt()
    {
        $shibaInu = new Dog("Shiba Inu", "woof! woof!", true);
        $pug = new Dog("Pug", "woof!", false);

        $this->assertEquals("Shiba Inu is hunting!", $shibaInu->hunt());
        $this->assertEquals("Pug cannot hunt.", $pug->hunt());
    }
}

?>
