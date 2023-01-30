<?php
    require_once ("src/ClassCar.php");

    $objCar = new Car("Ford", "Grey", "Focus", 1500);

    $objCar->setAirbag(true);
    $objCar->getPrice();

    echo $objCar->getVehicleInfo();

    echo "Chassis Number: " . Car::setChassisNumber();

    echo $objCar->setOwner("David");
    echo $objCar->setCarRegistration()

?>