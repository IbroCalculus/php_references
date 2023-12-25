<?php
    // Key-value pair of data

    $capitals = array(
        "USA"=> "Washington D.C",
        "Japan" => "Kyoto",
        "South korean" => "Seoul",
        "India" => "New Delhi"
    );

    // Count the number of key-values pairs (ie 4)
    $count = count($capitals);
    echo "{$count} <hr>";

    // Accessing a value
    echo $capitals["USA"] . "<hr>";

    // Changing the value / Adding a new key-value pair
    $capitals["USA"] = "Las Vegas";

    // Looping through
    foreach($capitals as $key => $value){       //$key, $value can be renamed anything.
        echo "{$key} --> {$value} <br>";
    }
    echo "<hr>";

    // Accessing all keys
    $keys = array_keys($capitals);
    foreach($keys as $key){
        echo "{$key} .<br>";
    }
    echo "<hr>";

    // Accessign all values
    $values = array_values($capitals);
    foreach($values as $value){
        echo "{$value} .<br>";
    }
    echo "<hr>";


    // Removing the last element
    array_pop($capitals);

    // Remove the first element
    array_shift($capitals);

    // Flip an associative_array (keys become values, and vice versa)
    $flip_capitals = array_flip($capitals);
    foreach($flip_capitals as $key => $value){
        echo "{$key} --> {$value} <br>";
    }

    // Reverse the other of arrangement. ie top to bottom, becomes bottom to top
    $reversed_capitals = array_reverse($capitals);







?>