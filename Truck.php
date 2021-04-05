<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
        private string $capacity;
        private int $charge = 0;
        private string $energy; 

        public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        ];
        public const ALLOWED_CAPACITY = [
        'full',
        'in filling',
         ];
    

// Do not modify the rest of the file


    public function __construct(string $color, int $nbSeats, string $energy, string $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }
  
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setCapacity($capacity): Truck
    {
        if (in_array($capacity, self::ALLOWED_CAPACITY)) {
            $this->capacity = $capacity;
        }
        return $this;
    }

        /**
         * Get the value of charge
         */ 
    public function getCharge():int
    {
        return $this->charge;
    }

        /**
         * Get the value of capacity
         */ 
        public function getCapacity():string
        {
                return $this->capacity;
        }
}