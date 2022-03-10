<?php
    
$dbhost= "localhost";
$dbuser= "root";
$dbpassword="";
$dbname= "thewellnesshospital";
     
    /* Connection to MySQL database */
    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
     
    // Check connection
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>