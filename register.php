<?php 
session_start();

include("wellnessconfig.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed=password_hash($password, PASSWORD_DEFAULT);
    $confirm=$_POST['confirm_password'];

    if(!empty($email) && !empty($name) && !is_numeric($name) && !empty($password) && $password==$confirm)
    {
        $query="insert into wellnessadminregister (name,email,password) values ('$name','$email','$hashed')";

        mysqli_query($con, $query);
        header("Location:login.php");
        die;
    }else
    {
        echo "Please enter some valid information or confirm your password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<!--Head section-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Wellness Hospital Kenya</title>
        <meta name="description" content="Wellness hospital rovides standards of care that are unparalleled with amazing service and keen attention to detail, we will do our best to restore you.">
        <meta name="keywords" content="hospital, health, healthcare, Kenya">
      
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body >
        <div class="container">
            <section id="content">
                <form method="post" target="_blank">
                    <h1>Wellness Hospital Registration</h1>
                    <div>
                        <input type="text" id="name" name="name" placeholder="Enter Your Name" required><br>
                        <input type="email" id="email" name="email" placeholder="someone@somewhere.com" required><br>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required><br>
                        <input type="password" id="confirm password" name="confirm password" placeholder="Confirm Password" required><br><br>
                        <input type="submit" value="Submit">
                    </div>
                </form>
                
            </section>
        </div>

        
    </body>
</html>
