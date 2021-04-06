<?php 

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10); 
    }

    public function addVehicle(Vehicle $vehicle):string
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicule[] = $vehicle;
            return "Un nouveau vehicule est entrée sur la voie PedestrianWay. <br>";
        } else {
            return "Vous n'etes pas autorisé a rouler avec :" . strtolower(get_class($vehicle)) ." sur la route PedestrianWay. <br>";
        }
    }
}