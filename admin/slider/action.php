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
   if ($_FILES['product_image']['size'] != 0) 
   {
   	$imge = $obj->uploadfile($_FILES['product_image']);
   }
   else
   {

     $imge =  $_POST['preimag'];
   }
 

 
   extract($_POST);
   $sql = "UPDATE `tbl_slider` SET `title`='$product_name',`slider_image`='$imge' WHERE `id`= '$proid'";
   $result = $obj->exe_query($sql);
  
   if ($result) {

   	echo "Updeted";
   }
}

else if(isset($_POST['action']) && $_POST['action']=='Insert')
{
   
   	$imge = $obj->uploadfile($_FILES['product_image']);
   extract($_POST);
   $sql = "INSERT INTO `tbl_slider`(`title`, `slider_image`) VALUES ('$product_name','$imge')";
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
   	echo "Inserted";
   }
}

else if(isset($_POST['action']) && $_POST['action']=='delete')
{
   $sid = $_POST['sid'];
    $sql = "DELETE FROM `tbl_slider` WHERE `id` = '$sid'"; 
   $result = $obj->exe_query($sql);
  
   if ($result) {
   
    echo "Deleted";
   }
}



			
			


?>