<?php
    echo "This is a sample code using echo";
    echo("<br/>This is another way of using the echo<br/>");

    print "<br/>This is a sample code using print<br/>";
    print("This is another way of using print<br/>");

    


    # DIFFERENCES BTW echo & print:
    // 1. echo does not have a return value, while print has a return value of 1, hence print can be used in expressions.
    // 2. echo can take multiple arguments, while print can take only one argument.
    // 3. echo is faster than print.
?>

<!-- Alternatively -->
<?php $msg = "Congratulations on your graduation"; ?>
<?= "The above message reads; $msg" ?>