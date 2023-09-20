 

<?php 
$delete_id="";
 
require("./conn.php");


$delete_id=$_GET['udel'];
if(isset($delete_id)){
 
$query="delete from book where id='$delete_id'";
if($connection->query($query))
	echo "<script>window.open('userpanel.php?deleted=request has been deleted!!!','_self')</script>";

}
 
 ?>