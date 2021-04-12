<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{   
    private bool $hasParkBrake=true;
    private string $energy;
    public int $currentspeed = 15;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
  
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


     //Set the value of hasParkBrake

    public function setHasParkBrake()
    {   if ($this->hasParkBrake ===true) {$this->hasParkBrake =false;}
        else {$this->hasParkBrake ===true;}
        return $this;
    }

    public function start()
    {              
        if ($this-> hasParkBrake === true) {
        throw new Exception("Frein a main actif <br>");
        }

        if($this->currentSpeed === 0){
            return "Vroom!";
        } else {
            return "La voiture roule déjà!";
        }
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake():bool
    {   
        return $this->hasParkBrake;
    }
}