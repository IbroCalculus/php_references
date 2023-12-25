<?php

    // For constructors, check Car2.php
    // For private access modifiers, check Car3.php

    //NOTE: To be able to access this class file, or create its object(s) in a different file, within the file, use required_once('Car.php');
    //      CHECK CarObject.php

    class Car{
        public $color;
        public $wheels;
        public $isElectric;
        public $model;

        public function turnON(){
            echo "Engine turned on <br>";
        }

        public function info(){
            echo "The info are ---> Model: " . $this->model .", Color: ". $this->color . ", Number of wheels: " . $this->wheels .  "<br> ";
        }

        public function drive(){
            echo "Driving... <br>";
        }
    }

    $bmw = new Car();
    $bmw-> color = "black";
    $bmw-> model = 'e36';
    $bmw-> wheels = 4;
    $bmw -> isElectric = false; 

    echo $bmw->color . "<br>";
    echo $bmw->model . "<br>";
    echo $bmw->isElectric . "<br>";
    echo $bmw->wheels . "<br>";
    $bmw->turnON();
    $bmw->drive();
    $bmw->info();
   
?>