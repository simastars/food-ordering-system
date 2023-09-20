<?php 
$accept_id="";
require_once("./conn.php"); 



$accept_id=$_GET['acc'];
if(isset($accept_id)){
 $que="delete from book where id='$accept_id'";
 $query="INSERT INTO accept select * from book where id='$accept_id'";

if($connection->query($query)){
	echo "<script>window.open('adminPending.php?deleted=request been accepted!!!','_self')</script>";
// if(mysql_query($que))
// 	echo "<script>window.open('admin pending.php?deleted=request been accepted!!!','_self')</script>";	
	
}else{
	echo $connection->error;
}
}
 ?>