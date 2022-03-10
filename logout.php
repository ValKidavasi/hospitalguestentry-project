<?php

if(isset($_SESSION['id']))
    {
        unset($_SESSION['id']);
    }

    header("Location:landingpage.php");
    die;