<?php

class Vehicle {
    public $strBrand;
    public $strColor;
    public $strModel;
    public $fltPrice;

    public function __construct(string $brand, string $color, string $model, float $price) {
        $this->strBrand = $brand;
        $this->strColor = $color;
        $this->strModel = $model;
        $this->fltPrice = $price;
    }

    public function getVehicleInfo() {
        $data = "
                <h2>Vehicle Info</h2>
                Brand: {$this->strBrand}<br>
                Model: {$this->strModel}<br>
                Color: {$this->strColor}<br>
                Price: {$this->fltPrice}<br>
            ";

            return $data;
    }

    public function setBrand(string $brand) {
        $this->strBrand = $brand;
    }

    public function setColor(string $color) {
        $this->strColor = $color;
    }

    public function setPrice(float $price) {
        $this->fltPrice = $price;
    }

    public function setModel(string $model) {
        $this->strModel = $model;
    }

    public function getBrand() {
        return $this->strBrand;
    }

    public function getColor() {
        return $this->strColor;
    }

    public function getModel() {
        return $this->strModel;
    }

    public function getPrice() {
        return $this->fltPrice;
    }
}