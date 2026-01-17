<?php

require('Drums.php');
require('Guitar.php');
require('Piano.php');

$rogerTaylor = new Drums;
$brianMay = new Guitar;
$freddy = new Piano;

echo $rogerTaylor->play() . "<br>";
echo $brianMay->play() . "<br>";;
echo $freddy->play() . "<br>";;
