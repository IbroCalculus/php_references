<?php
// =========== INCLUDE and REQUIRE ----------------------------------------------------------------

    // RE-LEARN FROM Bro PHP course; 2:55:00

    // Include and require enables us logically import the contents of another file into the particular file.
    // There's also require_once.

    // The difference between using require and include is that;
    // - require will produce a fatal error if you try to import a file that does not exist, while
    // - include will only produce a warning and the script will continue.

    // include 'include2.php';  OR include("header.html");  Can be a html file
    require './include2.php';

    $fullName = $fName ." " . $sName;
    echo "Welcome " . $fullName . "<br>";
    echo "The salted value is: $salt_key, and username is: $username, with password being: $password";    

?>