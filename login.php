<?php 

session_start();

include("wellnessconfig.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email=$_POST['email'];
    $password=$_POST['password'];


    if(!empty($email) && !empty($password))
    {
        $query="select * from wellnessadminregister where email = '$email' limit 1";

        $result=mysqli_query($con, $query);

        if($result)
        {
            if ($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);

                if( $user_data['password']===$password)
                {

                    $_SESSION['id']=$user_data['id'];
                    header("Location:table.php");
                    die;

                }
            }
        }
        echo '<script type="text/javascript">
         alert("Invalid email or password. Please try again.")
          </script>' ;
          header("Location:login.php");
        
    }else
    {
        echo '<script type="text/javascript">
        alert("Invalid email or password. Please try again.")
         </script> ';
           }
}
?>



<!DOCTYPE html>
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

    
    <div class="container" >
        <section id="content">
            <form action="login.php" method="post">
                <h1>Wellness Hospital Log In</h1>
                <div>
                    <input type="email" name= "email" placeholder="Email" required="" id="email" />
                </div>
                <div>
                    <input type="password" name= "password" placeholder="Password" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="/project/register.php">Register</a>
                </div>
            </form>
            
        </section>
    </div>

    </body>
</html>