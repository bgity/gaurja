<?php
include ('auth.php');
include("include/config.php");

$id = $_GET['id'];

//deleting the row from table
$result ="DELETE FROM tbl_free_videos WHERE id='$id'";
$stmt=$conn->query($result);


//redirecting to the display page (index.php in our case)
header("Location:free_videos_list.php");
?>