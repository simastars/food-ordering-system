<?php
session_start();
require_once("./conn.php");
if(isset($_SESSION['username'])==false){
   	  header("Location:signin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/admin panel.css">
<title>User panel</title>
</head>

<body>
<div id="nav">
   <div id="wrap">
   <ul>
     <li><a href="#">All the request of yours are here</a></li><li>
         <a href="../index.html">Home</a></li> 
        
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
        <th>Delete</th>
        
    </tr>

    <tr>

    	<?php 
		   
	      $u=$_SESSION['username'];
	      $p=$_SESSION['pass'];
	

           

           $query="select * from book where email in(select email from 
		                                users where username='{$u}' and password='{$p}')";
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
         	 "user delete.php?udel=<?php echo $id; ?>">
         	Delete</a></td>
    </tr>

    <?php } ?>
</table> 
 
 
 <h1 align='center'>All the Accepted Requests</h1>

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
         
        
    </tr>

    <tr>

    	<?php 



                      $query="select * from accept where email in(select email from 
		                                users where username='{$u}' and password='{$p}')";
           $run=$connection->query($query);

           while($row=$run->fetch_assoc()){
           	   $id=$row[0];
			  $name=$row[1];
           	  $country=$row[2];
			  $contact=$row[3];
			  $email=$row[4];
              $hotelname=$row[5];
              $roomtype=$row[6];
              $price=$row[7];
			  $bank=$row[8];
             
             

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
         
 
    </tr>

    <?php } ?>
</table>

 <h1 align='center'>All the Approved Requests</h1>

<table width='1140' align='center' border='5'>
	<tr bgcolor= '#DCDCDC'>
		<th>Name</th>
		<th>Country</th>
		<th>Contact NO</th>
		<th>Email</th>
        <th>Hotel Name</th>
        <th>Room Type</th>
        <th>Price</th>
        <th>Bank Acc</th>
         
        
    </tr>

    <tr>

    	<?php 

 				

                      $query="select * from approved where email in(select email from 
		                                users where username='{$u}' and password='{$p}')";
           $run=$connection->query($query);

           while($row=$run->fetch_assoc()){
           	   $id=$row['id'];
			  $name=$row["name"];
           	  $country=$row["country"];
			  $contact=$row["contact"];
			  $email=$row["email"];
              $hotelname="Kitabu Hotel";
              $roomtype=$row["roomtype"];
              $price=$row["price"];
			  $bank=$row["bank"];
             
             

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
         
 
    </tr>

    <?php } ?>
</table>
 
 <?php 
 
 $sql = "SELECT * FROM dishes WHERE available='yes'";

    $result = $connection->query($sql);

    if($result->num_rows>0){
        ?>
     <h1 align='center'>Available Dishes</h1>
        <table width='1140' align='center' border='5'>
            <th >
                <tr bgcolor= '#DCDCDC'>
                    <td>Dish name</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>image</td>
                    <td>Book</td>
                </tr>
    </th>
        <?php
        while($row = $result->fetch_assoc()){
            $name = $row['dishname'];
        ?>
        <tr align='center'>
        <td><?php echo $row['dishname'];?></td>
        <td><?php echo $row['category'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><img src="<?php echo $row['path'];?>" heigh="50px", width="300px"/></td>
        <td><a href="./book.php?id=<?php echo $row['id'];?>">Book</a></td>
        </tr>
        <?php
        }
        ?>
        </select>
        <?php
    }else{
        echo "no rooms available";
    }
 
 ?>
 
</body>
</html>
