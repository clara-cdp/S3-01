<?php

require_once('Character.php');
require('Attack.php');

class Vampire extends Character implements Attack
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character Bites!";
    }
}
