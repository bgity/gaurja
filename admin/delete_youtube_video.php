<?php
include ('auth.php');
include("include/config.php");


//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result ="DELETE FROM tbl_youtube_videos WHERE id='$id'";
$stmt=$conn->query($result);


//redirecting to the display page (index.php in our case)
header("Location:daily_videos_list.php");
?>