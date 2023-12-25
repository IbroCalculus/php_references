<?php

    // Constructor with private access modifiers.
    // With private access modifiers, we use getters and setters methods.

    //NOTE: To be able to access this class file, or create its object(s) in a different file, within the file, use required_once('Car.php');
    //      CHECK CarObject.php

    class Car3{
        private $color;
        private $wheels;
        private $isElectric;
        private $model;

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

        // Getters and Setters
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        
        public function getmode(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }
        
        public function getWheels(){
            return $this->wheels;
        }

        public function setWheels($wheels){
            $this->wheels = $wheels;
        }
    }

//   $bmw3 = new Car3("Orange", "T67", 6, false);
//   $bmw3->setColor("Pink");  
//   echo $bmw3->getColor() . "<br>";
//   $bmw3->info();



?>