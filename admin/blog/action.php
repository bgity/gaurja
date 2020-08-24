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
   if ($_FILES['blog_image']['size'] != 0) 
   {
   	$imge = $obj->uploadfile($_FILES['blog_image']);
   }
   else
   {

     $imge =  $_POST['preimag'];
   }
  
 
   extract($_POST);
   $sql = "UPDATE `blog` SET `blog_title`='$blog_title',`blog_content`='$blog_content',`blog_image`='$imge' WHERE `id`= '$bid'";
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
   
   	$imge = $obj->uploadfile($_FILES['blog_image']);
   extract($_POST);
   $sql = "INSERT INTO `blog`(`blog_title`, `blog_content`, `blog_image`) VALUES ('$blog_title','$blog_content','$imge')";
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
   	echo "Inserted";
   }
}


else if(isset($_POST['action']) && $_POST['action']=='delete')
{
   $sid = $_POST['sid'];
    $sql = "DELETE FROM `blog` WHERE `id` = '$sid'"; 
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
    echo "Deleted";
   }
}




			
			


?>