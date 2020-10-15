<?php

require_once 'Car.php';

$car = new Car("blue night",6,"essence");

echo $car . '<br>';
echo $car->start() . '<br>';
echo $car->froward();
echo '<br> Mon plein d essence est fait j ai ' .$car->getEnergyLevel() ."% dans mon reservoir.";
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->brake();
