<?php
    // Cookie is information about a user, stored in a user's web browser
    // It is the reason for receiving targeted advertisements, some platforms like youtube know your browsing preferences,
    // and for storing other non-sensitive information.

    // To create a cookie, use the setcookie() function
    // cookies are stored as associative arrays.

    // setcookie("fav_food", "Pizza", time() + (86400 * 1), "/");
    setcookie("fav_drink", "Cocacola", time() + (86400 * 2), "/");
    // setcookie("fav_planet", "Earth", time() + (86400 * 3), "/");
    setcookie("fav_color", "blue", time() + (86400 * 4), "/");
    /*
        time() + (86400 * 2) -> Expiration time for the cookie in seconds. ie 2 days from now
        / -> location of the cookie, ie default location in this case.

        To view cookie on chrome; inspect -> application -> Cookies
     */

    //  To delete cookie, set time to - 0
    setcookie("fav_planet", "Earth", - 0, "/");

    // Accessing cookies
    foreach($_COOKIE as $key => $val){
        echo "{$key} = {$val} <br/>";
    }echo "<hr/>";

    if(isset($_COOKIE["fav_food"])){
        echo "We are advertising {$_COOKIE["fav_food"]}" . "<br>";
    }else{
        echo "Cookie does not know your favorite food." . "<br/>";
    }

?>