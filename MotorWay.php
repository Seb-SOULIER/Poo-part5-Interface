<?php 

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130); 
    }

    public function addVehicle(Vehicle $vehicle):string
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicule[] = $vehicle;
            return "Un nouveau vehicule est entrée sur la voie MotorWay. <br>";
        } else {
            return "Vous n'etes pas autorisé a rouler avec :" . strtolower(get_class($vehicle)) ." sur la route MotorWay. <br>";
        }
    }
}