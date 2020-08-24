<?php
$db="vishwaman_ayurveda";
$user="vishwama_ngal";
$pass="Q*SG9+gRTRyO";



$conn = new PDO('mysql:host=localhost;dbname=vishwaman_ayurveda;', $user, $pass);
$conn -> exec("set names utf8");



// if($conn)
// {
// 	echo "success";
	
// }
// else{
	
// 	echo "failed";
// }
?>
