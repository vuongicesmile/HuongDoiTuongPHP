<?php

class Car {
    function MoveWheels() {
            echo "wheels move";
    }
}
    
    // if (method_exists("Car","MoveWheels")) {
    //     echo "display";
    // } else{
    //     echo "Noo";
    // }

    $bmw = new Car();
    $merces_benz = new Car();

    $bmw -> MoveWheels();




