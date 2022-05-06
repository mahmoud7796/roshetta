<?php 
if(isset($_SESSION['user'])){
    header('location:patient_profile.php');die;
}