<?php 
    // A session is a way to store information (in variables) to be used across multiple pages.
    // Check Bro Code PHP 3:05:00

    session_start();

    $username = "John123";
    $password = "Abcd123";

    $_SESSION["login_username"] = $username;
    $_SESSION["login_password"] = $password;
?>