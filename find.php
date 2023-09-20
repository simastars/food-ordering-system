<?php
session_start();
require_once("./php/conn.php");

if(isset($_POST['rtype'], $_POST['numofpeople']) && !empty($_POST['rtype'])){
    
    $rtype = $_POST['rtype'];
    $numofpeople = $_POST['numofpeople'];
    $_SESSION['type']=$rtype;

    $sql = "SELECT * FROM rooms WHERE roomtype='$rtype' AND available='yes'";

    $result = $connection->query($sql);

    if($result->num_rows>0){
        echo "okay";
    }else{
        echo "no rooms available";
    }
}

?>