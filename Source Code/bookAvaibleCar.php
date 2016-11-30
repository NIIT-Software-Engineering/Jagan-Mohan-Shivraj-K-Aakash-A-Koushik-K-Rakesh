<?php
session_start();
$con = new mysqli("localhost", "root", "", "gosafe_db");
$username =  $_SESSION["username"];
//$username = $_POST['username'];
$carid = $_POST['carid'];
$wdate = $_POST['wdate'];
$wtime = $_POST['wtime'];
$share = $_POST['share'];
$seats = $_POST['seats'];
$flocation = $_POST['flocation'];
$tlocation = $_POST['tlocation'];

$query = "select car_number from gosafe_db.gs_cars where carid = '$carid'";
$result = mysqli_query($con, $query);
$resultrow = mysqli_fetch_row($result);
$carnumber =  $resultrow[0];


if(isset($username))
{
	$query = "INSERT INTO `gosafe_db`.`gs_book_rides` (`car_number`, `user_name`, `from_date`, `from_time`, `from_location`, `to_location`, `max_number`, `flag`) VALUES ('$carnumber', '$username', '$wdate', '$wtime', '$flocation', '$tlocation', $seats, $share);";
	$result = mysqli_query($con, $query);
	if($result)
	{
		echo "booked ".$carnumber."on".$wdate;
	}
	else
	{
		echo "notbooked";
	}
}
else
{
	echo "server";
}
?>