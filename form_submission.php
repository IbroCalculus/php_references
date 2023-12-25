<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission and Handling</title>
</head>
<body>

<!-- CHECKING FORM SUBMISSION -->
<!-- NOTE ALSO Sanitize(filter) and validate within the php code below -->
<!-- // action="" implies, submit this form to this same file. For method, "GET" is the default. -->

    <h1>Login Form</h1>
    <form action="" method="POST">                                      
        <label for="username">Username</label>
        <input type="text" name="username" id="" /><br />
        <label for="password">Password</label>
        <input type="password" name="password" id="" /><br /><br />
        <input type="submit" name="btn_login" value="Login Account" />
    </form>

    <p> 
        <?php
            if(isset($_POST["btn_login"])){
                var_dump($_POST);

                $username = $_POST["username"];
                $password = $_POST["password"];
                echo "<br/>Username: " . $username . "<br/>Password: " . $password;
                
                // SANITIZE USER INPUT BY ADDING FILTER. E.g:
                // $username = filter_input(INPUT_POST, $username, FILTER_SANITIZE_SPECIAL_CHARS);  To remove any special characters
                // $email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_NUMBER_INT);   Filter away other characters except numbers
                // $email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_EMAIL);
                // url = filter_input(INPUT_POST, $x, FILTER_SANITIZE_URL);
                
                // VALIDATING USER INPUT.
                // If input does not pass validation, it returns an empty string.

                /*
                   $age = filter_input(INPUT_POST, $age, FILTER_VALIDATE_INT);  If input is not a number, it returns an empty string
                   if(empty($age)){
                        echo "The input is not a number";
                   }else echo "Input is a valid number";
                   
                   $email = filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL);
                   if(empty($email)){
                        echo "Not a valid email format";
                   }else echo "Valid email format";

                 */
    }
        ?>
        
    </p>
    
    <h1>Signup Form</h1>
    <form action="" method="POST">
        <label for="username_signup">Username</label>
        <input type="text" name="username_signup" id="" /><br />
        <label for="password_signup">Password</label>
        <input type="password" name="password_signup" id="" /><br /><br />
        <input type="submit" name="btn_signup" value="Login Account" />
    </form>
    
    <p> 
        <?php
            if(isset($_POST["btn_signup"])){            # If the POST button with name "btn_signup" is clicked   
                var_dump($_POST);

                $username_signup = $_POST["username_signup"];
                $password_signup = $_POST["password_signup"];
                echo "<br/>Username_signup: ". $username_signup. "<br/>Password_signup: ". $password_signup;
            }
        ?>        
    </p>
    
</body>
</html>
