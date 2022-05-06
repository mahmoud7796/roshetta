<?php 
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "delete from `patients` where id=$id";
        $rseult = mysqli_query($con,$sql);
        if($rseult){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }

?>