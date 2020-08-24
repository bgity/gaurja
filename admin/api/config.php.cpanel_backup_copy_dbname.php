<?php
$db="vishwama_ayurveda";
$user="vishwama_ngal";
$pass="Q*SG9+gRTRyO";



$conn = new PDO('mysql:host=localhost;dbname=vishwama_ayurveda;', $user, $pass);
$conn -> exec("set names utf8");



// if($conn)
// {
// 	echo "success";
	
// }
// else{
	
// 	echo "failed";
// }
?>
