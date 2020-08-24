<?php
 include "../include/config.php";
 date_default_timezone_set('Asia/Kolkata');

  $session_id=$_POST['session_id'];
  $user_id=$_POST['user_id'];
  
  $video_id=$_POST['video_id'];

 $date=date("Y-m-d");

          $sql1="SELECT * FROM tbl_users WHERE session_id = '".$session_id."' AND id = '".$user_id."' ";
		  $stmt1=$conn->query($sql1); 
		  $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);
		  $month_payment = $result1['month_payment'];


		if($result1 > 1)
		{

			$sql3="SELECT * FROM tbl_premium_videos WHERE id = '".$video_id."' ";
		    $stmt3=$conn->query($sql3); 
		    $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);
		    $subscription_month = $result3['subscription_month'];

		    if($month_payment >= $subscription_month)
		    {
		    		$sql5="SELECT * FROM tbl_video_playcount WHERE video_id = '".$video_id."' AND  user_id = '".$user_id."' ";
		            $stmt5=$conn->query($sql5); 
		            $result5 = $stmt5->fetch(PDO::FETCH_ASSOC);
		            $count = $result5['count'];


		            if($result5 > 1)
		            {
		            	$video_count= $count + 1 ;

		            	$result6="UPDATE tbl_video_playcount SET count='$video_count',udate='$date' WHERE video_id = '$video_id' AND  user_id = '$user_id' ";
                        $stmt6=$conn->query($result6);


		            	$returnArr['error'] = "1";
			            $returnArr['error_message'] = "Play";
			            //$returnArr['data']= $result3;

		            }
		            else
		            {
		            	$sql="INSERT INTO tbl_video_playcount(user_id,video_id,count,cdate)VALUES('".$user_id."','".$video_id."','1','".$date."')";
            
                        $stmt=$conn->query($sql);

		            	$returnArr['error'] = "1";
			            $returnArr['error_message'] = "Play";
			            //$returnArr['data']= $result3;

		            }
	  
					  	
			          
					  
			}
			else
			{
					  	$returnArr['error'] = "0";
			            $returnArr['error_message'] = "This video play for $subscription_month month premium user";
			}		  
  		}
  		else
		{
		  		$returnArr['error'] = "2";
		        $returnArr['error_message'] = 'Login registered device or mobile number';
		}	  

    echo json_encode($returnArr);


  ?>