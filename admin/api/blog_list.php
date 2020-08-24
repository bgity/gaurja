<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

  //$session_id=$_POST['session_id'];
  $count=$_POST['count'];


 $date=date("Y-m-d");



		  $sql1="SELECT * FROM blog order by id desc limit $count,10";
		  $stmt1=$conn->query($sql1); 
		  $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);


		//  SELECT * FROM `tbl_drivers` limit 30,10

		  if($result1)
		  {
		  
		  	$returnArr['error'] = "1";
            $returnArr['error_message'] = "Blog list";
            $returnArr['data']= $result1;
           

		  }

		  else
		  {
		  	$returnArr['error'] = "0";
            $returnArr['error_message'] = 'No blog available';
		  }
  

    echo json_encode($returnArr);


  ?>