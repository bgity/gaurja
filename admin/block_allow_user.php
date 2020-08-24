<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
   $user_id=$_POST['id'];
   $status=$_POST['status'];
   $month_payment=$_POST['month_payment'];
   $amount=$_POST['amount'];
   $balance_amount=$_POST['balance_amount'];
   $name=$_POST['name'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];

   $total_amount = $amount + $balance_amount;

   $date=date("Ymdhis");


 		 $result7 ="UPDATE tbl_users SET name='$name',email='$email',mobile='$mobile',status='$status',month_payment='$month_payment',amount='$total_amount',udate='$date' WHERE id='$user_id' " ;
        $stmt7=$conn->query($result7);



        if($stmt7)
            {

            	if($amount == "")
            	{
            	echo '<script language="javascript" type="text/javascript"> 
	              alert("User status and subscription details updated successfully");
	              window.location = "user_list.php";
	              </script>';

            	}
            	else
            	{

            	$sql="INSERT INTO tbl_payment_transaction(user_id,amount,month_payment,payment_type,payment_date,cdate)VALUES('".$user_id."','".$amount."','".$month_payment."','offline','".$date."','".$date."')";
            
                $stmt=$conn->query($sql);

                $title='Snehalniti 10X MBA';
                $notification_message='आता तुम्ही अ‍ॅप मधील प्रिमीयम व्हिडीओ बघू शकता.';

					                 #API access key from Google API's Console
					    define( 'API_ACCESS_KEY','AAAA8JONrVQ:APA91bFxFm1Vhx7qnY5xQp9oJ7cDjWBgWBs_0D_UwE8bCaJBzve0YiWZTClYF35ew7iuh0AtPMlhBGSDlGxGceCTqB13EdYVZoH2ecehGTye82Ore3DcZqMmFwUZpnRXvvUO63KHn2c7');
					   // $registrationIds = 'cyKl4JTo5sI:APA91bH8MAf5y8mLJZ6I_LRzU5iJhaxkvj3WjEiBhX7hAwKpQf6pi4ohk4rVM0LgYVFKwhZ1FymMpSfegL-FJs7bgJjBvKm8WVx2Xeb_a12dH7zhWuRNKMR0sr3KwBu7nhq9ixZAljSC';
					#prep the bundle

					      $sql2="SELECT * FROM tbl_users where id ='$user_id' ";
					      $stmt2=$conn->query($sql2); 
					      $result2 = $stmt2->fetchAll();
					     // print_r($result2);


					    foreach ($result2 as $row)
					    {

					         $registrationIds = $row['token_id'];
					        //die;
					          $msg = array
					          (
					              'body'  => $notification_message,
					              'title' => $title,
					              'icon'  => 'snehallogoicon',/*Default Icon*/
					              'sound' => 'notification'/*Default sound*/
					          );
					      $fields = array
					      (
					        'to'    => $registrationIds,
					        'notification'  => $msg
					      );
					  
					  
					  $headers = array
					      (
					        'Authorization: key=' . API_ACCESS_KEY,
					        'Content-Type: application/json'
					      );
					#Send Reponse To FireBase Server  
					    $ch = curl_init();
					    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
					    curl_setopt( $ch,CURLOPT_POST, true );
					    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
					    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
					    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
					    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
					    $result = curl_exec($ch );
					    curl_close( $ch );
					#Echo Result Of FireBase Server
					//echo $result;
				//	die;


	              echo '<script language="javascript" type="text/javascript"> 
	              alert("User status and subscription updated successfully");
	              window.location = "user_list.php";
	              </script>';
	               }
             }

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Failed to update user status and subscription");
             // window.location = "user_list.php";
              </script>';
            }


}      

 ?>

 <?php

$id = $_GET['id'];
$result ="SELECT * FROM tbl_users WHERE id='$id' ";
$stmt1=$conn->query($result);

    while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
    {
        $ids=$res['id'];
        $status=$res['status'];
        $month_payment=$res['month_payment']; 
        $amount=$res['amount'];  
        $name=$res['name'];
        $email=$res['email'];
        $mobile=$res['mobile'];    
    }

$sql2="SELECT * FROM tbl_subscription_month";
$stmt2=$conn->query($sql2);
?>




	<!DOCTYPE html>
	<html lang="en">

	<?php 
	include 'header.php';
	include 'sidebar.php';
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.zoom {
  transition: transform .2s;
  width: 100px;
  height: 100px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(3.5); /* IE 9 */
  -webkit-transform: scale(3.5); /* Safari 3-8 */
  transform: scale(3.5); 
}
</style>		
			

	<!-- Main Content -->
	<div class="page-wrapper">
		<div class="container-fluid">

			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Edit User Details</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="user_list.php"><span>User List</span></a></li>
						<li class="active"><span>Edit User Details</span></li>
					</ol>
				</div>
				<!-- /Breadcrumb -->

			</div>
			<!-- /Title -->

			<!-- Row -->
			<div class="row" >
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										
										<h6 class="panel-title txt-dark ">Edit User Details</h6>
										
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form class="form-horizontal" method="POST" enctype="multipart/form-data" >

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">User Name</label>
															<div class="col-sm-6">
																<div class="input-group">
																	<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter Name">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Email</label>
															<div class="col-sm-6">
																<div class="input-group">
																	<input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter Email">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Mobile</label>
															<div class="col-sm-6">
																<div class="input-group">
																	<input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" placeholder="Enter mobile number">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">User Status </label>
															<div class="col-sm-6">
																<div class="input-group">

														<select name="status"class="form-control">
														<?php
									                        
									                        if($status == 0)
									                        {
									                            echo "<option selected='selected' value='0'>" .'Allow'. "</option>";
									                            echo "<option value='1'>" .'Block'. "</option>";
									                        }
									                        else
									                        {
									                            echo "<option selected='selected' value='1'>" .'Block'. "</option>";
									                            echo "<option value='0'>" .'Allow'. "</option>";
									                        }
									                 
									                    ?>  
								                     </select>
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Balance Amount</label>
															<div class="col-sm-6">
																<div class="input-group">
																	<input type="number" class="form-control" name="balance_amount" value="<?php echo $amount; ?>">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Add Amount</label>
															<div class="col-sm-6">
																<div class="input-group">
																	<input type="number" class="form-control" name="amount" placeholder="Enter Amount">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>

														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Subscription Month </label>
															<div class="col-sm-6">
																<div class="input-group">

													<select name="month_payment" class="form-control">
													<?php
								                    $position_sql6 = "SELECT id,month FROM tbl_subscription_month";
								                    $stmt6=$conn->query($position_sql6);
								                    
								                    echo '<option value="0">Select</option>';
								                    while($row6 = $stmt6->fetch(PDO::FETCH_ASSOC))
								                    {
								                        
								                        if($month_payment  == $row6['id'])
								                            echo "<option selected='selected' value='" . $row6['id'] . "'>" . $row6['month'] .'  Month Subscription '. "</option>";
								                     
								                        else
								                            echo "<option value='" . $row6['id'] . "'>" . $row6['month'] .' Month Subscription '. "</option>";
								                    }
								                  

								                    ?>  
								                     </select>
								                                 <div class="input-group-addon"></div>
																</div>
															</div>
														</div>
														
														
														
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
																<button type="submit" name="submit" class="btn btn-info ">Update</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</center>
					</div>
			<!-- /Row -->
		</div>

 


		<?php include 'footer.php'; ?>			
