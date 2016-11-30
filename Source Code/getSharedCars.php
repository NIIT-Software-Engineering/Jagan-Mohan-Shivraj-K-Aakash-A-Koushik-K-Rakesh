<?php
$con = new mysqli("localhost", "root", "", "gosafe_db");

$query = "select * from gosafe_db.gs_book_rides 
					left outer join gosafe_db.gs_cars
					on gs_book_rides.car_number = gs_cars.car_number
					where gs_book_rides.flag = 1";
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