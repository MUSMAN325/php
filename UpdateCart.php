<?php

session_start();


$PID = $_GET['PID'];
//print_r($PID);
$PName = $_GET['PName'];
//print_r($PName);
$PPrice = $_GET['PPrice'];
$PQuantity = $_GET['PQuantity'];

// exit;
if(isset($_GET['delete'])){
    unset($_SESSION['Cart'][$PID]);
    header("Location:ViewCart.php");
 }else{ 
$_SESSION['Cart'][$PID] = array("PID" => $PID, "PName" => $PName, "PPrice" => $PPrice, "PQuantity" => $PQuantity);
//var_dump($_SESSION['Cart'][$PID]);
header("Location:ViewCart.php");
 }

?>