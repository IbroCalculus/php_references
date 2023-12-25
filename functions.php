<?php
  
//   Functions are not case-sensitive.
//   CHECK function2.php

  function sayHello(){
    echo "This function says Hello <br/>";
  }
  sayHello();
  // -----------------------------------------------------------------------

  function sayHi($fName, $sName) {
    return "Good day $fName $sName <br/>";
}

$result = SayHi("John", "Doe");
echo $result;
// -----------------------------------------------------------------------

  $car = "BMW";
  function thecar(){
    global $car;                                // To access a global variable in a function.
    echo "The car's brand is $car <br>";
  }
  thecar();
  // -----------------------------------------------------------------------

  
//   This function can accept any datatype for $a and $b. CHECK functions2.php
  function addNumbers($a, $b){
    $result = $a + $b;
    echo "The sum of both numbers = $result <br>";
  }
  addNumbers(34,9);
  // -----------------------------------------------------------------------

  function multiplyNumbers($a, $b){
    return $a * $b;
  }

  $multResult = multiplyNumbers(3,5);
  echo "The product of both numbers = " . $multResult;
  // -----------------------------------------------------------------------


?>