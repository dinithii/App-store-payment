<?php

echo "<link rel='stylesheet'  href='IWT/src/styles/stylesDev.css'>";

require "config.php";

$id=$_GET['updateid'];
$sql="select * from `developer` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['fullname'];
$email=$row['email'];
$bday=$row['bday'];
$address=$row['address'];
$phone=$row['phone'];

if(isset($_POST['submit'])){ 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $bday=$_POST['bday'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

	//Update app developer information into the database
	//$sql = "UPDATE `developer` SET `id`='".$id."',`fullname`='".$name."',`email`='".$email."',`bday`='".$date."', `address`='".$address."',`phone`='".$phone."' WHERE `id` = '".$id."'";
    $sql = "UPDATE `developer` SET fullname='$name',email='$email',bday='$bday',address='$address',phone='$phone' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "updated successfully";
       header('location:/crud/devDetail.php');
    }
    else{
        die(mysqli_error($conn)); 
    }
}

?>
    


<!DOCTYPE html>
<html>
<head>
	<title>card payment page</title>
	<link rel="stylesheet" href="IWT/src/styles/styles.css">
	<script src="/crud/IWT/src/js/update_devDetails.js"></script>
</head>
<body>
<link href="https://fonts.cdnfonts.com/css/circular-std" rel="stylesheet">
        <style>
            @import url('https://fonts.cdnfonts.com/css/circular-std');
        </style>
        
        <div id="naviBar">
            <table class="tbl1">
                <tr>
                    <th><h2>Pixelmarket</h2></th>
                    <th><a href="index.html">Home</a></th>
                    <th><a href="pages/allApps.html">Explore</a></th>
                    <th><a href="pages/contactUs.html">Contact Us</a></th>
                    <th><a href="index.html">Settings</a></th>
                    <th id="login"><a href="index.html">Login | Register</a></th>  
                </tr>
            </table>
        </div>
        
        
        <div class="appBanner">
            <div class="appBannerChild">
                <h2>Pixelmarket Online App Store</h2>
            </div>
        </div><br>
    <center>
	<h3>Update developer information</h3><br>
    </center>
	<div class="form1">

	<form id="upForm" name="upForm" onsubmit="return validateForm(event)" method="POST">
	
	<label for="name">Name</label><br>
	<input type="text" id="name" name="name" placeholder="Enter your full name" 
    value="<?php echo $name;?>"><br><br>
	
	<label for="email">Email</label><br>
	<input type="text" id="email" name="email" placeholder="Enter your email address" 
    value="<?php echo $email;?>"><br><br>
	
	<label for="bday">Birth of Date</label><br>
	<input type="text" id="bday" name="bday" placeholder="DD/MM/YY"
    value="<?php echo $bday;?>"><br><br>
	
	<label for="address">Address</label><br>
	<input type="text" id="address" name="address" placeholder="address" 
    value="<?php echo $address;?>"><br><br>
	
    <label for="phone">Contact Number</label><br>
	<input type="text" id="phone" name="phone" placeholder="phone" 
    value="<?php echo $phone;?>"><br><br><br>
    
    <input type="submit" name="submit" value="Update">
	
	</form>
	</div>
    
<footer>
                    <th><h3 >Pixelmarket</h3></th> 
                   
        </footer>
	</body>
</html>



