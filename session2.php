<?php
    session_start();


    if(isset($_SESSION["login_username"]) && isset($_SESSION["login_password"])){
        echo "username is: " . $_SESSION["login_username"] . " and password is: " . $_SESSION["login_password"];
    }else{
        echo "Session closed, you are logged out";
    }
?>