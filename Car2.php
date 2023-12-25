<?php

    // Constructors with public access modifiers
    
    //NOTE: To be able to access this class file, or create its object(s) in a different file, within the file, use required_once('Car.php');
    //      CHECK CarObject.php
    
    class Car2{
        public $color;
        public $wheels;
        public $isElectric;
        public $model;

        public function __construct($color, $model, $wheels, $isElectric)
        {
            echo "Object created!!!!! <br>";
            $this -> color = $color;
            $this -> model = $model;
            $this -> wheels = $wheels;
            $this -> isElectric = $isElectric;
        }

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


    $bmw2 = new Car2("Red", "z45", 4, true);
    echo $bmw2 -> color . "<br>";
    $bmw2 -> color = "Purple";
    $bmw2->info();

?>