<?php
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("gosafe_db");
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
if(isset($email))
{
	$query = "SELECT count(*) as count FROM gosafe_db.gs_users WHERE gs_users.user_name = '$email'";
	$output = mysql_query($query);
	$result = mysql_result($output, 0);
	//echo $result;
	if($result == 1)
	{
		$message = "You have already registered! Please Login";
		echo "<script type='text/javascript'>";
		echo "alert('$message');";
		echo "window.location.href = 'index.php'";
		echo "</script>";
		//header('Location: http://localhost/gosafe/index.php');
	}
	else
	{
		$query1 = "INSERT INTO `gosafe_db`.`gs_users` (`user_name`, `full_name`, `password`, `phone_number`) VALUES ('$email', '$fullname', '$password', $contact);";
		$insert = mysql_query($query1);
		if($insert)
		{
			$message = "You have Sucessfully registered! Please Login";
			echo "<script type='text/javascript'>";
			echo "alert('$message');";
			echo "window.location.href = 'index.php'";
			echo "</script>";
		}
		else
		{
			$message = "Server Not able to understand";
			echo "<script type='text/javascript'>";
			echo "alert('$message');";
			echo "window.location.href = 'index.php'";
			echo "</script>";
		}
	}
}
else
	{
		//header('Location: http://localhost/gosafe/index.php');
	}
?>