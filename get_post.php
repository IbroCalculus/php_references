<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Get and Post</title>
</head>
<body>

<h3 style="text-align:center">Using GET method</h3>

    <form action="get_post.php" method="post">
        <label>username:</label>
        <input type="text" name="username" placeholder="Enter your username"><br><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" value="Log in">
    </form>
    <br>
    <hr>

</body>
</html>

<?php
/*
$_GET, $_POST =  Special variables used to collect data from an HTML form.
                Data is sent to the file in the action attribute of <form>
                There are both associative arrays, meaning they return an array of key/value pairs
                <form action="some_file.php" method="get">

$_GET = Data is appended to the url
        NOT secure
        char limit
        Bookmark is possible with values
        GET requests can be cached
        Better for a search page

$_POST = Data is packaged inside the body of the HTTP request
         MORE SECURE
         No data limit
         Cannot bookmark
         GET requests are not cached
         Better for submitting credentials.
*/

// ============================= GET METHOD ====================
// echo $_GET["username"];
// echo "<br>";
// echo $_GET["password"];


// ============================= POST METHOD ====================
echo "Username: {$_POST["username"]} <br>" ;
echo "Password: {$_POST["password"]} <br>";

?>