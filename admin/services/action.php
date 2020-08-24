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
   if ($_FILES['service_image']['size'] != 0) 
   {
   	$imge = $obj->uploadfile($_FILES['service_image']);
   }
   else
   {

     $imge =  $_POST['preimag'];
   }
  
 
   extract($_POST);
   $sql = "UPDATE `services` SET `service_name`='$service_name',`service_details`='$service_details',`service_image`='$imge' WHERE `id`= '$proid'";
   $result = $obj->exe_query($sql);
  
   if ($result) {

   	echo "Updeted";
   }
   else
   {
      echo $sql;
   }
}

else if(isset($_POST['action']) && $_POST['action']=='Insert')
{
   
   	$imge = $obj->uploadfile($_FILES['service_image']);
   extract($_POST);
   $sql = "INSERT INTO `services`(`service_name`, `service_details`, `service_image`) VALUES ('$service_name','$service_details','$imge')";
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
   	echo "Inserted";
   }
}


else if(isset($_POST['action']) && $_POST['action']=='delete')
{
   $sid = $_POST['sid'];
    $sql = "DELETE FROM `services` WHERE `id` = '$sid'"; 
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
    echo "Deleted";
   }
}




			
			


?>