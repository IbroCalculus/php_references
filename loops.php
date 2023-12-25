<?php
    // FOR LOOP
    echo "=============== FOR LOOP ===============";
    for($i=0; $i<=5; $i++){
        echo "Iteration {$i}<br>";
    }
    echo "<hr>";

    
    // WHILE LOOP
    echo "=============== WHILE LOOP ===============";
    $counter = 0;
    while($counter <=10){
        echo "<br>Count {$counter}";
        $counter++;
    }
    echo "<hr>";

    // DO WHILE LOOP
    echo "=============== DO WHILE LOOP ===============";
    $x = 1;
    do{
        echo "<br>The number is {$x}";
        $x++;
    } while($x < 10);

    // FOR-EACH LOOP: Check Arrays.php
?>