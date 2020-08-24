<?php
include ('auth.php');
include("include/config.php");


//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result ="DELETE FROM products WHERE id='$id'";
$stmt=$conn->query($result);


//redirecting to the display page (index.php in our case)
header("Location:product_list.php");
?>