<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE  FROM `payment` WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:/crud/Payment_admin.php');

    }
    else{
        die(mysqli_error($conn));
    }
}
?>