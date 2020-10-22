<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;
    /**
     * @var int
     */
    private $charge = 0;

    public function __construct(int $storageCapacity,string $color, int $nbSeats, string $energy)
    {
        $this->storageCapacity = $storageCapacity;
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function addCharge(){
        while ($this->charge < $this->storageCapacity){
            $this->charge++;
        }
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function fullOrNOt(): string
    {
        $sentence = "";
        if ($this->charge < $this->storageCapacity) {
            $sentence .= "in filling"."<br/>";
        }else{
            $sentence .= "FULL !"."<br/>";
        }
        return $sentence;
    }
}