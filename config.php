<?php

//create connection
$conn=new mysqli('localhost','root','','crudoperation');

//check connection
if(!$conn){
    die("Conncetion failed: ".mysqli_connect_error());
}

?>