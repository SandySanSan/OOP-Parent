<?php

require('Car.php');
require('Bicycle.php');
require('Truck.php');

$myFirstCar = new Car('red', 5, 'electric');
$myFirstCar->setEnergy(1200);
echo $myFirstCar->forward();
echo $myFirstCar->brake();


$bike = new Bicycle('red', 1);
$bike->setCurrentSpeed(35);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->brake();

$homerTruck = new Truck('blue', 6, 'fuel', 1500);
echo $homerTruck->forward();
echo $homerTruck->brake();
echo $homerTruck->setLoad(3000);
echo $homerTruck->getLoadStatus();
