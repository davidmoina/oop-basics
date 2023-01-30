<?php

require_once ("ClassVehicle.php");
require_once ("VehicleInterface.php");

class Car extends Vehicle implements newVehicles {
    private $blAirbag = false;
    private $intChassisNum;

    public function __construct(string $brand, string $color, string $model, float $price) {
        parent::__construct($brand, $color, $model, $price);
    }
    
    public static function setChassisNumber() {
        return rand();
    }

    public function setAirbag(bool $airbag) {
        $this->blAirbag = $airbag;
    }

    public function getPrice() {
        if($this->blAirbag) {
            $this->fltPrice = $this->fltPrice + 300;
            return $this->fltPrice;
        }
        return $this->fltPrice;
    }

    public function getVehicleInfo() {
        $data = "
                <h2>Vehicle Info</h2>
                Brand: {$this->strBrand}<br>
                Model: {$this->strModel}<br>
                Color: {$this->strColor}<br>
                Price: {$this->fltPrice}<br>
                Airbag: {$this->blAirbag}<br>
            ";

            return $data;
    }

    public function setCarRegistration() {
        return "<br> Car Registration Number: " . rand();
    }

    public function setOwner(string $name) {
        return "<br> The owner of the car " . $this->strBrand . " is " . $name;
    }
}