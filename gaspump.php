<?php 

class gasPump{
    public $fuelType;

    public $gallonValue;

    public $fuelLeft;

    public $value;

    public function __construct(){
        $this->fuelType = "Gasoline";
        $this->gallonValue = 3.3;
        $this->fuelLeft = 600;
    }

    public function fuelbyPrice($value){
        $bill = $value / $this->gallonValue;
        if ($bill <= $this->fuelLeft) {
            $this->fuelLeft -= $bill;
            echo "Gallons used were: $bill. Total: $value\n";
        } else {
            echo "There's not enough fuel on the pump.\n";
        }
    }

    public function fuelbyGallons($gallons){
        $bill = $gallons / $this->gallonValue;
        if ($gallons <= $this->fuelLeft) {
            $this->fuelLeft -= $gallons;
            echo "Gallons used were: $gallons. Total: $bill\n";
        } else {
            echo "There's not enough fuel on the pump.\n";
        }
    }

    public function changeGasPrice($newvalue){
        $this->gallonValue = $newvalue;
    }

    public function changeFuel($newfuel){
        $this->fuelType = $newfuel;
    }

    public function changeFuelLeft($newvalue){
        $this->fuelLeft = $newvalue;
    }
}