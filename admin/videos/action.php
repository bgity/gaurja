<?php 
session_start();
require 'crud.php';



$obj = new crud();


extract($_POST);

if (isset($action) && $action=='login') 
{
	$obj->authentication($usenm,$passwrd);
}
else if (isset($_GET['action']) && $_GET['action']=='logout') 
{
	$obj->logoutfun();
}
else if(isset($_POST['action']) && $_POST['action']=='selectall')
{
	$data=$obj->selectall();
     echo $data;
}
else if(isset($_POST['action']) && $_POST['action']=='edit')
{
	$eid = $_POST['eid'];
	$data=$obj->editfun($eid);
    echo $data;
}
else if(isset($_POST['action']) && $_POST['action']=='editsubmit')
{
   if ($_FILES['videos_image']['size'] != 0) 
   {
   	$imge = $obj->uploadfile($_FILES['videos_image']);
   }
   else
   {

     $imge =  $_POST['preimag'];
   }
  
 
   extract($_POST);
   $sql = "UPDATE `tbl_youtube_videos` SET `video_title`='$videos_title',`video_content`='$videos_content',`video_author`='$videos_author',`youtube_link`='$videos_link',`video_image`='$imge' WHERE `id` = '$bid'";
   $result = $obj->exe_query($sql);
  
   if ($result) {

   	echo "Updeted";
   }
   else
   {
    
   }
}

else if(isset($_POST['action']) && $_POST['action']=='Insert')
{
   $dt = date('Y-m-d');


   	$imge = $obj->uploadfile($_FILES['videos_image']);
   extract($_POST);
   $sql = "INSERT INTO `tbl_youtube_videos`(`video_title`, `video_date`, `video_content`, `video_author`, `youtube_link`, `video_image`) VALUES ('$videos_title','$dt','$videos_content','$videos_author','$videos_link','$imge')";
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
   	echo "Inserted";
   }
}


else if(isset($_POST['action']) && $_POST['action']=='delete')
{
   $sid = $_POST['sid'];
    $sql = "DELETE FROM `tbl_youtube_videos` WHERE `id` = '$sid'"; 
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
    echo "Deleted";
   }
}




			
			


?>