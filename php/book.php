<?php
require("./conn.php");


?>
<?php


$error_message="";

if (isset($_POST['submit'])) {  

   $name = $_POST['name'];
   $country =$_POST['country'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $hotelname = $_POST['dishname'];
   $category = $_POST['category'];
   $price = $_POST['price'];
   $bank = $_POST['bank'];

if (empty($name)|| empty($country) || empty($contact) || empty($email) || empty($hotelname) || empty($category) || empty($price) || empty($bank)
	) {
    $error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!!!</h5>";
     }

else{

$query="INSERT INTO book VALUES('','{$name}','{$country}','{$contact}','{$email}','{$hotelname}','{$category}','{$price}','{$bank}')";
if($connection->query($query)){
  /*echo "Registration is successful!"; */
  echo"<script>alert('Order is successfully placed')</script>";
  echo "<script>window.open('./userpanel.php','_self')</script>";

}else{
  echo $connection->error;
}
}
}
$sql = "SELECT * FROM dishes WHERE available='yes'";

    $result = $connection->query($sql);

    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $name = $row['dishname'];
        $category = $row['category'];
        $price = $row['price'];
        // $category = $row['category'];
         
      }
    }else{
        echo "no rooms available";
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/book form.css">
<title>Book here</title>
</head>

<body>
<div id="wrap">
  <div id="headldiv">
    <h1 id="loghead">Book Here</h1>
  </div>
  <div id="logdiv">
        <div id="logformhead" style="float:left;padding:0;height:50px;">
          <h3 id="logheadline">Booking Form</h3>
        </div>
    <div style="float:right;width:40%;">
      <h3 id="goback">Go Back Home?<a href="../index.html">Click here</a></h3>
    </div>
  </div>
  <div id="logrest">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
      <table style="auto">
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="name"></td>
          <td>Country:</td>
          <td><input type='text'name='country' placeholder='eg:  Bangladesh'></td>
        </tr>
        <tr>
          <td>Contact No:</td>
          <td><input type="text" name='contact' placeholder='eg: +8801738214430'></td>
          <td>Email:</td>
          <td><input type='email' name='email' placeholder="Enter the email used for signed up" ></td>
        </tr>
        <tr>
          <td>Dish Name:</td>
          <td><input type='text'name='dishname' value='<?php echo $name;?>'></td>
          <!-- <td>Check Out:</td>
          <td><input type='date'name='checkout' placeholder='DD/MM/YYYY'></td> -->
        </tr>
        <tr>
          <!-- <td>Hotel Name:</td>
          <td><input type='text'name='hotelname' placeholder='eg: Grand Orient'></td> -->
          <td>Dish Category:</td>
          <td><input type='text'name='category' value='<?php echo $category;?>'></td>
        <tr>
          <td>Price:</td>
          <td><input type='text'name='price' value='<?php echo $price;?>'></td>
          <!-- <td>Total Room:</td>
          <td><input type='text'name='troom' placeholder='eg: 3'></td> -->
        <tr>
          <!-- <td>Total Price:</td>
          <td><input type='text'name='tprice' placeholder='eg: $750'></td> -->
          <td>Bank AccNo:</td>
          <td><input type='text'name='bank' placeholder='eg: DBBL mobile banking'></td>
        </tr>
        <tr>
          <td colspan='5' align='center'><input type='submit' 
              name='submit'
                     value='Book'></td>
        </tr>
      </table>
    </form>
  </div>
  <center>
    <h3> <?php echo "".$error_message; ?> </h3>
  </center>
</div>
<!-- wrap ends here -->

</body>
</html>
