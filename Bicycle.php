<?php

require_once 'Vehicle.php';


class Bicycle extends Vehicle
{
    // Affiche les valeurs
    public function dump()
    {
        var_dump($this);
    }

    public function switchOn()
    {
        $speed =$this->getCurrentSpeed();
        if ($speed>10) {
            echo "Bike : Light on".PHP_EOL;
            return true;
        }
    }

    public function switchOff()
    {
        echo "Bike : Light off".PHP_EOL;
        return false;
    }
}