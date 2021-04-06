<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$bike = new Bicycle('Brown',1);
$bike->setColor('blue');

// Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow',1);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black',1);
// $tornado->forward();

// $tornado->dump();

// Car
$car1 = new Car('Red',5,'fuel');
$car2=new Car('Jaune',4,'electric');
// var_dump($car1);
// var_dump($car2);
// var_dump(Car::ALLOWED_ENERGIES);

// // Moving car
// $car1->setCurrentSpeed(0);
// $car2->setCurrentSpeed(0);

// Moving Car 1
// echo $car1->forward();
// echo '<br> Vitesse de la voiture '.$car1->getColor().' : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car1->brake();
// echo '<br> Vitesse du voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car1->brake(). '<br>';

// // Moving Car 2
// echo $car2->forward();
// echo '<br> Vitesse de la voiture '.$car2->getColor().' : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car2->brake();
// echo '<br> Vitesse du voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car2->brake(). '<br>';

// Caracteristique Car 1
// echo "La voiture a :" . $car1->getNbSeats(). ' places <br>' ;
// echo "La voiture est :" .$car1->getEnergy(). '<br>' ;
// echo 'la voiture est : '.$car1->getColor(). '<br>' ;
// echo 'La voiture roule a : ' . $car1->getCurrentSpeed(). 'km/h <br>' ;
// echo 'Le vehicule a :'.$car1->getNbWheels(). ' roues <br><br>' ;

// Caracteristique Car 2
// echo "La voiture a :" . $car2->getNbSeats(). ' places <br>' ;
// echo "La voiture est :" .$car2->getEnergy(). '<br>' ;
// echo 'la voiture est : '.$car2->getColor(). '<br>' ;
// echo 'La voiture roule a : ' . $car2->getCurrentSpeed(). 'km/h <br>' ;
// echo 'La voiture a :'.$car2->getNbWheels(). ' roues <br><br>' ;

// Creation d'un camion
$truck1 = new Truck('Green',2,'fuel','full');
// echo "Le vehicule a :" . $truck1->getNbSeats(). ' places <br>' ;
// echo "Le vehicule est :" .$truck1->getEnergy(). '<br>' ;
// echo 'Le vehicule est : '.$truck1->getColor(). '<br>' ;
// echo 'Le vehicule roule a : ' . $truck1->getCurrentSpeed(). 'km/h <br>' ;
// echo 'Le vehicule a :'.$truck1->getNbWheels(). ' roues <br>' ;
// echo 'Le vehicule est : ' . $truck1->getCapacity(). '<br>' ;
// echo 'Le vehicule est chargé de :'.$truck1->getCharge(). 'kg <br><br>' ;
// echo $truck1->forward();
// echo '<br> Vitesse du camion '.$car1->getColor().' : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
// echo $truck1->brake();
// echo '<br> Vitesse du camion : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
// echo $truck1->brake(). '<br>';

$truck2= new Vehicle('black',2,'fuel');


$motorWay = new MotorWay;
$pedestrianWay=new PedestrianWay;
$residentialWay=new ResidentialWay;

//Add new vehicles
echo $motorWay->addVehicle($car1);
echo $motorWay->addVehicle($bike);
echo $motorWay->addVehicle($truck2)."<br>";

echo $pedestrianWay->addVehicle($car1);
echo $pedestrianWay->addVehicle($bike);
echo $pedestrianWay->addVehicle($truck2)."<br>";

echo $residentialWay->addVehicle($car1);
echo $residentialWay->addVehicle($bike);
echo $residentialWay->addVehicle($truck2)."<br>";

