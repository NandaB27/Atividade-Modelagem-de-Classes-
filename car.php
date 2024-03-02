<?php 

class Car {

    public $mpg;

    public $fuelLeft;

    public function __construct() {
        $this->mpg = 50;
        $this->fuelLeft = 0;
    }

    public function Drive($miles){
        $FuelNeeded = $miles / $this->mpg;

        if ($FuelNeeded <= $this->fuelLeft) {
            $this->fuelLeft -= $FuelNeeded;
            echo "Car drove {$miles} miles. Fuel left: {$this->fuelLeft}.\n";
        } else {
            echo "There's no fuel available for this ride.\n";
        }
    }

    public function GetFuel(){
        echo "Fuel left in the tank:$this->fuelLeft";
    }

    public function GoFuel($gallons){
        $this->fuelLeft += $gallons;
        echo "Fueled {$gallons} gallons of gasoline. New fuel level: {$this->fuelLeft}.\n";
    }
}