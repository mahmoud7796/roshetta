<?php
$servername = "localhost";
$dbname = "roshetta";
$username = "root";
$password = "";

    $con = new mysqli('localhost','root','','roshetta');
    if(!$con){
        die(mysqli_error($con));
    }
?>