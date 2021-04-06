<?php

abstract class HighWay
{
    protected array $currentVehicle;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    public function getCurrentVehicle(): array
    {   
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): self
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}