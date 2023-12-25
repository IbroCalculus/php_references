<?php

    $serverName = "localhost";
    $username = "root";
    $password = "Admin123";
    $dbName = "testdatabase";

    $conn = new mysqli($serverName, $username, $password, $dbName);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


// ------------------------------------

    // INSERT DATA QUERY
    
    $name = "Barnabas";
    $email = "bnabas@yahoo.com";
    $password = "64ty5ef";

    $sqlQueryInsertData = "INSERT INTO user (NAME, EMAIL, PASSWORD) VALUE ('$name', '$email', '$password')";

    // if($conn->query($sqlQueryInsertData) == true){
    //     echo "Entry inserted!";
    // }else{
    //     echo "Error occurred!" .$conn->error;
    // }

    // RETRIEVE DATA QUERY
    $sqlQueryRetrieveData = "SELECT * FROM user";

    $result = $conn->query($sqlQueryRetrieveData);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: " . $row['ID'] . ", Name: " .$row['NAME'] . ", EMAIL: " . $row['EMAIL'] . ", PASSWORD: " . $row['PASSWORD'] . "<br>";
        }
    }
?>