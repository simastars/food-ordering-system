<?php
session_start();
require_once("./conn.php");
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/admin panel.css">
<title>Admin pending</title>
</head>

<body>
<div id="nav">
   <div id="wrap">
   <ul>
   <li><a href="adddishe.php">Register Dishes</a></li>
      <li><a href="adminPending.php">Pending</a></li><li>
       <a href="adminAccepted.php">Accepted</a></li><li>
        <a href="adminApproved.php">Approved</a></li><li>
        <a href="ad_signout.php">Sign Out</a></li>
    </ul>
   </div>
</div>

<h1 align='center'>All the Pending Requests</h1>
<p align='center'>.<?php echo @$_GET['deleted']; ?> </p>

<table width='1140' align='center' border='5'>
	<tr bgcolor= '#DCDCDC'>
		<th>Name</th>
		<th>Country</th>
		<th>Contact NO</th>
		<th>Email</th>
        <th>Dish Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Bank Acc</th>
        <th>Accept</th>
        <th>Delete</th>
        
    </tr>

    <tr>

    	<?php 

           
           $query="select * from book";
           $run=$connection->query($query);

           while($row=$run->fetch_assoc()){
            $id=$row['id'];
            $name=$row['name'];
               $country=$row['country'];
            $contact=$row['contact'];
            $email=$row['email'];
            $hotelname=$row['hotelname'];
            $roomtype=$row['roomtype'];
            $price=$row['price'];
            $bank=$row['bank'];
             
             

         ?>
          <tr align='center'>
         <td> <?php  echo $name ?> </td>	
         <td> <?php  echo $country ?> </td>	
         <td> <?php  echo $contact ?> </td>	
         <td> <?php  echo $email ?> </td>
         <td> <?php  echo $hotelname ?> </td>
         <td> <?php  echo $roomtype ?> </td>
         <td> <?php  echo $price ?> </td>
         <td> <?php  echo $bank ?> </td>	
         
         <td><a href=
         	 "accept.php?acc=<?php echo $id; ?>">
         	Accept</a></td>
         <td><a href=
         	 "delete.php?del=<?php echo $id; ?>">
         	Delete</a></td>
    </tr>

    <?php } ?>
</table>

</body>
</html>
