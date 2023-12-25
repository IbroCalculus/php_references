<?php

// Either single or double quotes are allowed
    $fName = "Ibrahim";
    $sName = "Suleiman";

    // String concantenation
    echo "Your full name is: {$fName} with a {$sName} <br>";
    echo "The full name is: $fName with a $sName <br>";
    echo "Welcome " . $fName ." " . $sName . "<hr>";

    // Some string functions
    $sample_text = "SAMPLE text";
    $val = "123-45-67-89";

    echo strtolower($sample_text) . "<br>";     // Lowercase
    echo trim($sample_text) . "<br>";
    echo str_pad($sample_text, 40, "#", STR_PAD_BOTH) . "<br>";
    echo str_replace("-", "#", $val) . "<br>";
    echo strrev($sample_text) . "<br>";  // Reverse a string
    echo str_shuffle($val) . "<br>";
    echo strlen($sample_text) . "<br>"; // Length of the string
    echo strpos($sample_text, "M") . "<br>"; // Index position of the first string M
    echo substr($sample_text, 7, 3) . "<br>";   // 3 can be optional if till end index.
    
    $valArrays = explode("-", $val);    // Split a string into an array
    foreach($valArrays as $valArray){
        echo $valArray . " <-> ";
    }echo "<br>";

    $val2 = array("John", "Maxwell", "Doe");
    $val3 = implode(" ", $val2);        // Join array to string
    echo "welcome ". $val3 . "<br>";


    // Compares two strings. retuns 0 if they are equal, else 1.
    echo strcmp($sample_text, "SAMPLE") . "<br>"; 


?>