<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $quantity*$price;

    echo "You have ordered {$quantity} quantity of pizza(s) <br>";
    echo "Your total is: \${$total}";

?>