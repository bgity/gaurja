<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

 

 $date=date("Y-m-d");



		  $sql1="SELECT * FROM tbl_slider order by id desc limit 3 ";
		  $stmt1=$conn->query($sql1); 
		  $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);


		//  SELECT * FROM `tbl_drivers` limit 30,10

		  if($result1)
		  {
		  
		 //	$returnArr['error'] = "1";
            //$returnArr['error_message'] = "Slider image list";
            $returnArr = $result1;
           

		  }

		  else
		  {
		  	$returnArr['error'] = "0";
            $returnArr['error_message'] = 'No image available';
		  }
  

    echo json_encode($returnArr);


  ?>