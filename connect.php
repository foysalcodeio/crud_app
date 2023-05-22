<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "crudoperation";

$con  = new mysqli($host, $user, $password, $db_name);

if(!$con){
   die(mysqli_error($con));
}


?>