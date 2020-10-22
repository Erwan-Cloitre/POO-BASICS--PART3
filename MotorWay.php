<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) //tout type de voiture
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}