<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>

<h1>This is a basic HTML in h1 tag within a .php file <br/></h1>
<h3>
    <?php
        echo "This is a PHP script embedded in HTML h3 tag";
    ?>
</h3>
    

<?php
    echo "<em> This is an emphasized text with php </em> <br/>";
?>

<?php
    $my_name = "Ibrahim Suleiman";
?>

<p>My name is <?php echo $my_name ?></p>

</body>
</html>


<!-- PHP SCRIPT -->

<?php

    echo "This is a basic PHP output script outside the html tag";

?>


