<?php

require_once 'Truck.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


//TEST AVEC LA CLASSE MOTORWAY
$motorWay = new MotorWay();

echo $motorWay->getNbLane()."<br/>";
echo $motorWay->getMaxSpeed()."<br/>";

$car = new Car("blue", 4, 'fuel');
$camion = new Truck(1000, "blue","2", "fuel");

$motorWay->addVehicle($car)."<br/>";
$motorWay->addVehicle($camion)."<br/>";

var_dump($car instanceof Car);
echo "<br/>";
var_dump($camion instanceof Vehicle);
echo "<br/>";

