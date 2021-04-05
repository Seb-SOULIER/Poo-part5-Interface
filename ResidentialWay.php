<?php 

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        $vehicle.array_push($currentVehicles);
    }
}