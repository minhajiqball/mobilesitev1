<?php

function check_login($con)
{

	if(isset($_SESSION['random_id']))
	{

		$random_id = $_SESSION['random_id'];
		$query = "select * from user where random_id = '$random_id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: ../Mobile_Shopee/login/login.php ");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 2)
	{
		$length = 2;
	}

	$len = rand(1,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}