<?php
session_start();
$con = new mysqli("localhost", "root", "", "gosafe_db");
//$username =  $_SESSION["username"];
$carid = $_POST['carid'];


	$query = "select car_number from gosafe_db.gs_cars where carid = '$carid'";
	$result = mysqli_query($con, $query);
	$resultrow = mysqli_fetch_row($result);
	$carnumber =  $resultrow[0];
	echo $carnumber;
// if(isset($username)){

// }
?>