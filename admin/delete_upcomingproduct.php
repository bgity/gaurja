<?php
include('auth.php');
include("include/config.php");


//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = "DELETE FROM upcoming_product WHERE id='$id'";
$stmt = $conn->query($result);


//redirecting to the display page (index.php in our case)
header("Location:upcomingproduct_list.php");