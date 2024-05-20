<?php

require "config.php";

echo "<link rel='stylesheet'  href='IWT/src/styles/styles.css'>";

?>


<!DOCTYPE html>

<html lang="en">
  <head>
  <style>

</style>
    <meta charset="UTF-8">
    <title>Display developer</title>
  </head>

  <body class="bdyAdmnpg">
<link href="https://fonts.cdnfonts.com/css/circular-std" rel="stylesheet">
        <style>
            @import url('https://fonts.cdnfonts.com/css/circular-std');
        </style>
        
        <div id="naviBar">
            <table class="tbl1">
                <tr>
                    <th><h2>Pixelmarket</h2></th>
                    <th id="login"><a href="index.html">Login | Register</a></th> 
                </tr>
            </table>
        </div>
        
        
        <div class="appBanner">
            <div class="appBannerChild">
                <h2>Pixelmarket Online App Store</h2>
            </div>
        </div><br>
    <center><h1>Data from developer table</h1></center>

    <center><table class='styled-table'>
        <thead>
            <tr class='tr2'>
                <th class='th2'>ID</th>
                <th class='th2'>NAME</th>
                <th class='th2'>EMAIL</th>
                <th class='th2'>DATE OF BIRTH</th>
                <th class='th2'>ADDRESS</th>
                <th class='th2'>CONTACT NUMBER</th>
            </tr>
        </thead>


<?php
$sql = "SELECT `id`, `fullname`, `email`, `bday` ,`address`,`phone` FROM `developer`";
$result = mysqli_query($conn,$sql);

if ($result){
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $name=$row['fullname'];
        $email=$row['email'];
        $date=$row['bday'];
        $address=$row['address'];
        $phone=$row['phone'];
        
       

        echo "<tbody><tr>
        <th scope='row'>".$id."</th>
        <td class='td2'>".$name."</td>
        <td class='td2'>". $email."</td>
        <td class='td2'>".$date."</td>
        <td class='td2'>".$address."</td>
        <td class='td2'>".$phone."</td>

        <td class='td2'><button class='update'><a href='/crud/update_devDetail.php?updateid=".$id."'>Update</a></button></td>
       
        
        </tr>
    </tbody>";
    }    
}
?>




</body>
</html>


