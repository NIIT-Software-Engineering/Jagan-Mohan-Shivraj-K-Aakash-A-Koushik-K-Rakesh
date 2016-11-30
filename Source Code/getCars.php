<?php
$con = new mysqli("localhost", "root", "", "gosafe_db");
$query = "select * from gosafe_db.gs_cars where flag_car = 1";
$result = mysqli_query($con, $query);
$result_array = array();
if(mysqli_num_rows($result))
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$result_array[] = $row;
			}
		}
		echo json_encode($result_array);

?>