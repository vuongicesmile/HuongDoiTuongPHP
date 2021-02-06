<?php

class Car {

    static $wheels = 4;
    var  $hood = 1;
    var $engine =1;
    var $doors = 4;


    function MoveWheels() {
            // echo "wheels move";
            // $this ->wheels = 10;
    }
}
    
    // if (method_exists("Car","MoveWheels")) {
    //     echo "display";
    // } else{
    //     echo "Noo";
    // }

    $bmw = new Car();
    echo Car::$wheels;
    $bmw -> MoveWheels();
    // $bmw ->wheels = 8;
    // echo $bmw ->wheels;

    // $merces_benz = new Car();

    // $bmw -> MoveWheels();

class plane extends Car {


}
$jet = new Plane();
// $jet ->wheels;



