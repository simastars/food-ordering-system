 

<?php 
$delete_id="";
 
require("./conn.php");

$delete_id=$_GET['del'];
if(isset($delete_id)){
 
$query="delete from book where id='$delete_id'";
if($connection->query($query))
	echo "<script>window.open('adminPending.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>