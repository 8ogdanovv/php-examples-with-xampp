<?php

class Dog
{
    protected $name;
    protected $sound;
    protected $canHunt;

    public function __construct($name, $sound, $canHunt)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->canHunt = $canHunt;
    }

    public function makeSound()
    {
        return $this->sound;
    }

    public function hunt()
    {
        if ($this->canHunt) {
            return "{$this->name} is hunting!";
        } else {
            return "{$this->name} cannot hunt.";
        }
    }
}

?>