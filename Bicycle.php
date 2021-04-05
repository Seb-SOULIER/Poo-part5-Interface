<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    // Affiche les valeurs
    public function dump()
    {
        var_dump($this);
    }
}