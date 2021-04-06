<?php 

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50); 
    }

    public function addVehicle(Vehicle $vehicle):string
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicule[] = $vehicle;
            return "Un nouveau vehicule est entrée sur la voie ResidentialWay. <br>";
        } else {
            return "Vous n'etes pas autorisé a rouler avec :" . strtolower(get_class($vehicle)) ." sur la route ResidentialWay. <br>";
        }
    }
}