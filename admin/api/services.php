<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

  //$session_id=$_POST['session_id'];
  //$count=$_POST['count'];


 $date=date("Y-m-d");



		  $sql1="SELECT * FROM services order by id Asc  ";
		  $stmt1=$conn->query($sql1); 
		  $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);


		//  SELECT * FROM `tbl_drivers` limit 30,10

		  if($result1)
		  {
		  
		  	$returnArr['error'] = "1";
            $returnArr['error_message'] = "Services list";
            $returnArr['data']= $result1;
           

		  }

		  else
		  {
		  	$returnArr['error'] = "0";
            $returnArr['error_message'] = 'No services available';
		  }
  

    echo json_encode($returnArr);


  ?>