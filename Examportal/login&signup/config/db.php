<?php


$db_connect = mysqli_connect('localhost','ecell_neo','4epl2L5^','portal_data');

$tablename = 'user_login_data';
		if (!$db_connect) {
			echo 'Connection error' . mysqli_connect_error();

			echo "Something Went Wrong!";
		}

 ?>
