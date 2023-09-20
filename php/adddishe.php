 
 <?php
require("./conn.php");

?>

<?php


$error_message="";

if (isset($_POST['submit'])) {  

   $name = $_POST['name'];
   $price = $_POST['price'];
   $available = $_POST['available'];
   $category = $_POST['category'];
   
   $image = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
   $dir = "../dishes/".$image;
   if (empty($name)|| empty($price) || empty($available)) {
        $error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!!!</h5>";
    }else{
        move_uploaded_file($tmp_name, $dir);
        $check_email="select * from dishes where dishname='{$name}'";
        $run=$connection->query($check_email);
        if ($run->num_rows>0) {
            $error_message="<h5 style=\"color:red; font-weight:lighter\">This Dish already exists!!!please try another one</h5>";
        }else{
            $query="INSERT INTO dishes VALUES('','{$name}','{$available}','{$category}','{$price}','{$dir}')";
            if($connection->query($query)){
                echo"<script>alert('Dish has been added successfully')</script>";
                echo "<script>window.open('adddishe.php','_self')</script>";
            }else{
                echo $connection->error;
            }
        }
        
        
    }
 mysqli_close($connection);
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<link rel="stylesheet" href="../css/sign up.css">
   <title>add dish</title>
     
     
  

</head>

<body>
     
<div id="wrap">
     
	<div id="headldiv">
 		 <h1 id="loghead">Add Food Dish</h1>
    </div>
    <div id="gettitle">
        <div class="sign1">
            <h3 class="logheadline">Register Food</h3>
        </div>
        <div class="sign1">
             <h4 class="logheadline">Go Back <a href="../index.html">HOME</a> </h4>
        </div>
	</div><!--div id gettitle ends here-->
    
    <div id="form">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> " enctype="multipart/form-data">
 

         
            <label> Dish Name:</label><br/>
          
            <input type="text" name="name" placeholder="name"><br/>
        
    
            <label>Price:</label><br/>
          
            <input type="text" name='price' placeholder='Price'><br/>
   
        
        
          	<label>Available ?:</label><br/>
          
            <input type='text' name='available' placeholder='Yes or No'><br/>
   
        
            <label>Category of the Dish :</label><br/><br/>
            <select name="category">
                <option value="african">African</option>
                <option value="western">Western</option>
                <option value="asian">Asian</option>
                <option value="universal">Universal</option>
                <option value="unappealing">Unappealing</option>
            </select><br/><br/>
            <input type="file" name="image"/>
            <input type='submit' name='submit' value='Add Dish'>
    	</form>
        
    </div><!--form ends here-->
  
 
  <center>
  <h3> <?php echo "".$error_message; ?> </h3>
  <p>
    
    <font color='#00008B' size='5'>Go back to panel?</font>
 <a href="./adminpanel.php">Click here</a>
</p>
</center>

 </div>  <!-- wrap ends here -->   
     
     
</body>
</html>


 
 
 
