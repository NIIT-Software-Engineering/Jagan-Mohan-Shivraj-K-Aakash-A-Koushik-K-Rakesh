<?php
session_start();
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("gosafe_db");
$username = $_POST['username'];
$password = $_POST['password'];

// echo "gceiufhi";
// echo $password;

if(isset($password) && isset($username))
{
	$query = "select * from gosafe_db.gs_users where gs_users.user_name = '$username' and gs_users.password = '$password'";
	$output = mysql_query($query);
	$rows = mysql_num_rows($output);
	if($rows == 0)
	{
		$message = "Incorrect Details!! Login Again";
		echo "<script type='text/javascript'>";
		echo "alert('$message');";
		echo "window.location.href = 'index.php'";
		echo "</script>";
	}
	else
	{
		$_SESSION["username"] = $username;
		echo "<script type='text/javascript'>";
		echo "window.location.href = 'dashboard.php'";
		echo "</script>";
		//print_r($_SESSION);
	}
}

?>