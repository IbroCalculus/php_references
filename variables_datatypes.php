<?php

// CHECK ALSO; get_post.php variables.

// PHP also uses access modifiers; public

    $fName = "Ibrahim";
    $sName = "Suleiman";
    $age = 78;
    $value = 19.67;
    $isAvailable = true;

    // GET DATA TYPE
    echo "<br/>The datatype is: " . gettype($sName) . "<br/>";
    echo "The datatype is: " . gettype($value) . "<br/><br/>";

    // CONSTANT
    define("PI", 3.142);
    // define("PI", 3.142, true);               // true -> constant's name should be case-insensitive. False by default.
    echo "The value of pi = ". PI ."<br>";
    
    echo "Your fullName is: {$fName} with a {$sName}<br>";
    
    $fNum = 45;
    $sNum = 3;

    $prod = $fNum * $sNum;
    echo "The product of {$fNum} and {$sNum} = {$prod}";


?>