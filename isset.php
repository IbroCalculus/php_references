<?php
    // isSet() -> Returns true if a variable is declared and not null. RETURNS 1 if true.
    // empty() -> Returns true if a variable is not declared, false, null, or an empty string


    // ============================ isSet() ===================================
    $username = "BroCode";
    $username = null;

    if(isSet($username)){
        echo "Username is set";
    }else{
        echo "NOT SET!";
    }
    echo "<hr>";

    
    // ============================ isEmpty() ===================================
    $admin;
    $admin = "";

    if(empty($admin)){
        echo "It is empty";
    }else{
        echo "It is not empty";
    }
?>