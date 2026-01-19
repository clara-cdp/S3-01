<?php

require_once('PowerMachine.php');
require_once('Heater.php');

class ElectricHeater implements PowerMachine, Heater
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
}
