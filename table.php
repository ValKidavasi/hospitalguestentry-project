<?php
session_start();
include("database.php");
include("functions.php");
$user_data= check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Wellness Hospital Kenya</title>
        <meta name="description" content="Wellness hospital provides standards of care that are unparalleled with amazing service and keen attention to detail, we will do our best to restore your health.">
        <meta name="keywords" content="hospital, health, healthcare, Kenya">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oxygen">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">
    </head>
    <body>
        <header>
            <h1>Visitor Register</h1>
            <br>
            <h2>Welcome, <?php echo $user_data['name'];?>
            <a href="logout.php">Log Out</a> <br><br> </h2>
            <br><br>
                
        </header><br><br>
        <article>
            <h2>List of Visitors and Patients:</h2>
   
            <table class="visitor">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Patient's Name</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
     
                <tbody>
                    <?php
                        if(is_array($fetchData)){      
                        $sn=1;
                        foreach($fetchData as $data){
                    ?>
                    <tr>
                        <td><?php echo $data['name']??''; ?></td>
                        <td><?php echo $data['email']??''; ?></td>
                        <td><?php echo $data['patientsname']??''; ?></td>
                        <td><?php echo $data['date']??''; ?></td>
                        <td><?php echo $data['time']??''; ?></td>
                    </tr>
                    <?php
                    $sn++;}}else{ ?>
                    <tr>
                        <td colspan="8">
                    <?php echo $fetchData; ?>
                </td>
                    <tr>
                    <?php
                    }?>
                </tbody>
            </table>
        </article>  
    </body>

</html>