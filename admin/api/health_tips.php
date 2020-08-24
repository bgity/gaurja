<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

 $date=date("Y-m-d");


				$sql2="SELECT title FROM tbl_quotes order by id desc limit 100";
			    $stmt2=$conn->query($sql2); 
			    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);


					  if($result2)
					  {
					  
					  	$returnArr['error'] = "1";
			            $returnArr['error_message'] = "Health tips";
			            $returnArr['data']= $result2;
			           

					  }

					  else
					  {
					  	$returnArr['error'] = "0";
			            $returnArr['error_message'] = 'No health tips available';
					  }
  		
  		

    echo json_encode($returnArr);


  ?>