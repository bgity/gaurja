<?php
session_start();
if(!isset($_SESSION["username"]))
{
	echo $_SESSION["username"];
	header("Location: login.php");
	exit(); 
}
//echo $_SESSION["username"];