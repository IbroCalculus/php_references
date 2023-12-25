<?php
    // DATE and TIME

    // date(format, timestamp). Where timestamp is optional


    // ======================== DATE ========================
    echo "<hr/> <h1>DATE</h1>";
    // Current day of the week. ie Saturday.
    $date = date("l");
    echo "Today is " . $date . "<br/>";
    
    // Date day of the month. ie 23
    $date = date("d");
    echo "Today's date is ". $date. "<br/>";

    // Month of the year. ie "05 (which is month of May)".
    $date = date("m");
    echo "Month is ". $date. "<br/>";

    // Year. ie "2023".
    $date = date("Y");
    echo "Year is ". $date. "<br/>";

    $todayDate = "Today's date is ". date("l, d-m-Y")."<br/>";
    echo $todayDate;

    // Add automatic copyright year. Check date2.php




    // ======================== TIME ========================
    echo "<hr/> <h1>TIME</h1>";
    // H (Hour in 24 hour format), h (Hour in 12 hour format), i (minutes ie 09), s (seconds ie 34), a (AM or PM)

    date_default_timezone_set("Africa/Lagos");  // set default timezone to "Africa/Lagos"

    echo "Current hour time in 24 hour format: " .date("h") . "<br/>";
    echo "The time is " . date("h:i a") . "<br/>";


    // ======================== CREATE DATE FROM STRING USING strtotime ==================
    // strtotime(stringTime, now)    Where now is current time, OPTIONAL

    $d = strtotime("10:30pm April 15 2015");
    echo "The date and time from the string is: " . date("l, d-m-Y h:i a", $d);   // Omitting ,$d will return current date and time instead.







?>