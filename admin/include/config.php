<?php
$db="gau_urja";
$user="root";
$pass="";



$conn = new PDO('mysql:host=localhost;dbname=gau_urja;', $user, $pass);
$conn -> exec("set names utf8");



 // if($conn)
 // {
	// echo "success";
	
 // }
// else{
	
// 	echo "failed";
// }
?>
