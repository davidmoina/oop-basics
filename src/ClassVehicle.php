<?php

abstract class Vehicle {
    protected $strBrand;
    protected $strColor;
    protected $strModel;
    protected $fltPrice;

    public function __construct(string $brand, string $color, string $model, float $price) {
        $this->strBrand = $brand;
        $this->strColor = $color;
        $this->strModel = $model;
        $this->fltPrice = $price;
    }

    public function __destruct()
    {
        echo "<br><br>Car " . $this->strBrand . " has been successfully deleted!";
    }

    protected function getVehicleInfo() {
        $data = "
                <h2>Vehicle Info</h2>
                Brand: {$this->strBrand}<br>
                Model: {$this->strModel}<br>
                Color: {$this->strColor}<br>
                Price: {$this->fltPrice}<br>
            ";

            return $data;
    }

    protected function setBrand(string $brand) {
        $this->strBrand = $brand;
    }

    protected function setColor(string $color) {
        $this->strColor = $color;
    }

    protected function setPrice(float $price) {
        $this->fltPrice = $price;
    }

    protected function setModel(string $model) {
        $this->strModel = $model;
    }

    protected function getBrand() {
        return $this->strBrand;
    }

    protected function getColor() {
        return $this->strColor;
    }

    protected function getModel() {
        return $this->strModel;
    }

    protected function getPrice() {
        return $this->fltPrice;
    }
}