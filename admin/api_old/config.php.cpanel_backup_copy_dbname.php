<?php
/*$db="vishwama_ayurveda";
$user="vishwama_ngal";
$pass="Q*SG9+gRTRyO";*/

$db="vishwamangal";
$user="root";
$pass="";

$conn = new PDO('mysql:host=localhost;dbname=vishwamangal;', $user, $pass);
$conn -> exec("set names utf8");



// if($conn)
// {
// 	echo "success";
	
// }
// else{
	
// 	echo "failed";
// }
?>
