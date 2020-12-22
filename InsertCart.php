<?php

$PID = $_GET['PID'];
$PName = $_GET['PName'];
$PPrice = $_GET['PPrice'];
$PQuantity = $_GET['PQuantity'];


session_start();

$_SESSION['Cart'][$PID] = array("PID" => $PID, "PName" => $PName, "PPrice" => $PPrice, "PQuantity" => $PQuantity);

var_dump($_SESSION['Cart'][$PID]);

header("Location:ProductsPage.php");
?>