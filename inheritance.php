<?php
    // The class file for this reference is Animal.php and Dog.php
    
    //NOTE: To be able to access this class file, or create its object(s), or inherit it within a different file, within the file, 
    // use required_once('inheritance.php');
    //      CHECK CarObject.php


    require_once("Animal.php");     // Accessing or inheriting a class from the php script file Animal.php.


    $myAnimal = new Dog();

?>