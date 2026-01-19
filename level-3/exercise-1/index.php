<?php


require('classes/Ghost.php');
require('classes/Vampire.php');


function doCombat(Vampire $character)
{
    $character->move();
    $character->attack();
}

function move(Character $character)
{
    $character->move();
}

$enemy = new Ghost();
$enemy2 = new Vampire();

doCombat($enemy2);
echo PHP_EOL;
move($enemy);
