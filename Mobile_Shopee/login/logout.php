<?php

session_start();

if(isset($_SESSION['random_id']))
{
	unset($_SESSION['random_id']);

}

header("Location: login.php");
die;