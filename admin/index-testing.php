<?php 
include "auth.php";
include "include/config.php";
include "header.php";
include "sidebar.php";

date_default_timezone_set('Asia/Kolkata');
$date =date("Y-m-d");

$sql1="SELECT count(id) FROM tbl_users ";
$stmt1=$conn->query($sql1);

while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
    {
   $user_count=$res['count(id)'];
    }

$sql2="SELECT count(id) FROM tbl_premium_videos ";
$stmt2=$conn->query($sql2);

while($res2 = $stmt2->fetch(PDO::FETCH_ASSOC))
    {
   $premium_video_count=$res2['count(id)'];
    }

$sql3="SELECT count(id) FROM tbl_upcoming_seminar where seminar_date >= '$date' ";
$stmt3=$conn->query($sql3);


while($res3 = $stmt3->fetch(PDO::FETCH_ASSOC))
    {
   $upcoming_seminar=$res3['count(id)'];
    }

$sql4="SELECT count(id) FROM tbl_users where cdate >= '$date' ";
$stmt4=$conn->query($sql4);


while($res4 = $stmt4->fetch(PDO::FETCH_ASSOC))
    {
   $today_register=$res4['count(id)'];
    }

$sql5="SELECT count(id) FROM tbl_payment_transaction where payment_type = 'online' ";
$stmt5=$conn->query($sql5);


while($res5 = $stmt5->fetch(PDO::FETCH_ASSOC))
    {
   $online_payment=$res5['count(id)'];
    }

$sql6="SELECT count(id) FROM tbl_feedback where status = '0' ";
$stmt6=$conn->query($sql6);


while($res6 = $stmt6->fetch(PDO::FETCH_ASSOC))
    {
   $feedback=$res6['count(id)'];
    }


$sql7="SELECT count(id) FROM tbl_users where month_payment ='0' ";
$stmt7=$conn->query($sql7);


while($res7 = $stmt7->fetch(PDO::FETCH_ASSOC))
    {
   $unpaid_users=$res7['count(id)'];
    }


$sql8="SELECT SUM(amount) AS totalsum FROM tbl_users";
$stmt8=$conn->query($sql8);


while($res8 = $stmt8->fetch(PDO::FETCH_ASSOC))
    {
   $total_collection=$res8['totalsum'];

    }

$sql10="SELECT count(id) FROM tbl_free_home_consulting ";
$stmt10=$conn->query($sql10);

while($res10 = $stmt10->fetch(PDO::FETCH_ASSOC))
    {
     $consulting=$res10['count(id)'];
    }



 ?>

<style type="text/css">
.blinking{
	animation:blinkingText 1.9s infinite;
}
@keyframes blinkingText{
	0%{		color: #000;	}
	49%{	color: transparent;	}
	50%{	color: transparent;	}
	99%{	color:transparent;	}
	100%{	color: #000;	}
}
</style>
					
<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $user_count;?></span></span>
													<a href="user_list.php"><span class="weight-500 uppercase-font block font-13 txt-light">Total Users</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-people  data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient1">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $premium_video_count;?></span></span>
													<a href="premium_videos_list.php"><span class="weight-500 uppercase-font block txt-light">Premium Videos</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-caret-square-o-right data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient2">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">
													<span class="blinking" style="font-size: 25px"><?php echo $today_register;?></span>
													<a href="user_list.php"><span class="weight-500 uppercase-font block">Today Register </span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class="icon-book-open data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient3">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $upcoming_seminar;?></span></span>
													<a href="upcoming_seminar_list.php"><span class="weight-500 uppercase-font block txt-light">Upcoming Seminars</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<i class="fa fa-spin fa-spinner data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $online_payment;?></span></span>
													<a href="online_payment_list.php"><span class="weight-500 uppercase-font block font-13 txt-light">Online Payment</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-money  data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient2">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">
													<span class="txt-light block counter"><?php echo $unpaid_users;?></span>
													<a href="unpaid_user_list.php"><span class="weight-500 uppercase-font block font-13 txt-light">Unpaid Users </span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class="icon-people data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient1">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<a href="feedback_list.php"><span class="txt-light block counter"><span class="counter-anim"><?php echo $feedback;?></span></span>
													<span class="weight-500 uppercase-font block txt-light">Remaining Feedback</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right"> 	
													<i class="icon-book-open data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient3">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $total_collection;?></span></span>
													<span class="weight-500 uppercase-font block txt-light">Total Collection</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<i class="fa fa-money data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $consulting;?></span></span>
													<a href="free_home_consultation_list.php"><span class="weight-500 uppercase-font block font-13 txt-light">Free Consulting</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-book-open data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient2">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 txt-light data-wrap-left">
													<span class="txt-light block counter"><?php echo $unpaid_users;?></span>
													<a href="unpaid_user_list.php"><span class="weight-500 uppercase-font block font-13 txt-light">Unpaid Users </span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 txt-light data-wrap-right">
													<i class="icon-people data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient1">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<a href="feedback_list.php"><span class="txt-light block counter"><span class="counter-anim"><?php echo $feedback;?></span></span>
													<span class="weight-500 uppercase-font block txt-light">Remaining Feedback</span></a>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right"> 	
													<i class="icon-book-open data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0 bg-gradient3">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $total_collection;?></span></span>
													<span class="weight-500 uppercase-font block txt-light">Total Collection</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<i class="fa fa-money data-right-rep-icon txt-light"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				<!-- /Row -->
				
				
			
			</div>
			<!-- Footer -->
			
<?php include "footer.php"?>
