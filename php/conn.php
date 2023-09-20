<?php
$connection=new mysqli("localhost","root","", "user");
if (!$connection) {
 	die("database connection failed".mysqli_error());
 } 
?>