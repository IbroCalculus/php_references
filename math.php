<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions in PHP</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>y:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;
    // $total = abs($x);       // Absolute value
    // $total = round($x);     // Round up or down, depending on value.
    // $total = round($x);     // To 2 decimal places.
    // $total = floor($x);     // Round down value    
    // $total = ceil($x);      // Round up value
    // $total = pow($x, $y);   // x raised to the power of y.
    // $total = sqrt($x);      // Square root.
    // $total = max($x,$y,$z); // Maximun (likewise min)
    // $total = pi();          // PI value
    $total = rand();           // Random number
    $total = rand(1,6);        // Minimum, maximum value


    echo "<br>{$total}";

?>