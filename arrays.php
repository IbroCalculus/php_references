<?php

    // CHECK ALSO; associative_arrays (similar to python's dictionary, OR Java's HashMap);
    // NOTE: To split a string into an array or convert an array to a string, check implode and explode in string.php

    $foods = array("apple","orange","banana","coconut");

    // Accessing an element in an array
    // echo $foods[2];

    // Change element in an array
    $foods[0] = "Pineapple";

    // Number of elements in an array
    echo count($foods) . "<br>";

    // Adding element to the end of an array using push method
    array_push($foods, "Pineapple","Strawberry");

    // Remove last element in an array using pop method
    array_pop($foods);

    // Remove first element in an array using shift method
    array_shift($foods);

    // Remove element from an index
    unset($foods[0]);

    // Reverse an array
    $foods = array_reverse($foods);

    // Sorting an array
    $numbers = array(5,6,3,10,9,45,8);
    asort($numbers);                        // Sort in ascending order.
    print_r($numbers);
    echo "<br>";

    arsort($numbers);                       // Sort in descending order.
    print_r($numbers);
    echo "<br>";

    // Looping through an array (FOR-EACH LOOP)
    foreach($foods as $food){
        echo "Food: {$food}<br>";
    }

    // Print elements of an array.  
    echo var_dump($foods);   // Used mainly for debugging purposes.
    echo "<br>";
    print_r($foods);

    
?>