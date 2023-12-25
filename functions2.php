<?php declare(strict_types = 1);        // Include this


    function mult_both(int $a, int $b){
        $prod = $a * $b;
        echo "The product = $prod <br>";
    }

    function div_both($a, $b): float{       //This will force the return type to be a float
        return $a/$b;
    }

  // ----------------With default arguments -------------
  function times($fNum=2, $sNum=3){
    $prod = $fNum*$sNum;
    echo "The product of $fNum and $sNum = $prod <br>";
  }
  times(10);


    mult_both(3,4);
    $div_result = div_both( 45, 6);
    echo "The div result = " . $div_result;


?>