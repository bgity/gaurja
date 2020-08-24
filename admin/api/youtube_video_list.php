<?php
 include "config.php";
 date_default_timezone_set('Asia/Kolkata');

  //$session_id=$_POST['session_id'];
  $count=$_POST['count'];


 $date=date("Y-m-d");



		   $sql1="SELECT id,video_title,video_date,video_content,youtube_link,video_image FROM tbl_youtube_videos order by id desc LIMIT $count,10 ";
		  $stmt1=$conn->query($sql1); 
		  $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);



		  if($result1)
		  {
		  
		  	$returnArr['error'] = "1";
            $returnArr['error_message'] = "Youtube video list";
            $returnArr['data']= $result1;
           

		  }

		  else
		  {
		  	$returnArr['error'] = "0";
            $returnArr['error_message'] = 'No video available';
		  }
  

    echo json_encode($returnArr);


  ?>