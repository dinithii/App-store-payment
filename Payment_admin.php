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
    <title>Display payment details</title>
  </head>

  <body class="bdyAdmnpg">
    <center><h1>Data from MYSQL table</h1></center>

    <center><table class='styled-table'>
        <thead>
            <tr class='tr2'>
                <th class='th2'>ID</th>
                <th class='th2'>CARD NUMBER</th>
                <th class='th2'>CARDHOLDER'S NAME</th>
                <th class='th2'>EXPIRY DATE</th>
                <th class='th2'>CVV</th>
            </tr>
        </thead>

<?php

$sql = "SELECT `id`, `number`, `name`, `date` ,`cvv` FROM `payment`";
$result = mysqli_query($conn,$sql);

if ($result){
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $number=$row['number'];
        $name=$row['name'];
        $date=$row['date'];
        $cvv=$row['cvv'];

        echo "<tbody><tr>
        <th scope='row'>".$id."</th>
        <td class='td2'>".$number."</td>
        <td class='td2'>". $name."</td>
        <td class='td2'>".$date."</td>
        <td class='td2'>".$cvv."</td>

        <td class='td2'><button class='delbtn'><a href='/crud/deleteDin.php?deleteid=".$id."'>Delete</a></button></td>

        </tr>
    </tbody>";
    }    
}


?>


</body>
</html>

