<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

  $user_name=$_POST['user_name'];
  $phone=$_POST['phone'];
  // $subject=$_POST['subject'];
  // $user_email=$_POST['user_email'];
  $message=$_POST['message'];



 $date=date("Y-m-d");


                $sql="INSERT INTO contact_enquiry(user_name,phone,message,cdate)VALUES('".$user_name."','".$phone."','".$message."','".$date."')";
            
                $stmt=$conn->query($sql);
                
                //die;


		  if($stmt)
		  {
		  
		  	$returnArr['error'] = "1";
            $returnArr['error_message'] = "Thank you for supporting";
            
          
		  }

		  else
		  {
		  	$returnArr['error'] = "0";
            $returnArr['error_message'] = 'Please try again';
		  }
  

    echo json_encode($returnArr);


  ?>