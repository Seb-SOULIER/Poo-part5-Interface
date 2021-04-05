<?php 

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car == true) {
            $vehicle.array_push($currentVehicles);
        } else {
            return 'You cannot ride with ' . $vehicle .' on this way type';
        }
    }
}