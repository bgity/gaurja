<?php 
include 'auth.php';
include 'include/config.php';

$sql1="select tu.*,vp.*,pv.video_title from tbl_users as tu left join tbl_video_playcount as vp on (tu.id = vp.user_id) left join tbl_premium_videos as pv on (vp.video_id = pv.id) where vp.status='0' order by vp.id desc";
$stmt1=$conn->query($sql1);
$users = $stmt1->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<?php 
include 'header.php';
?>
<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-pink">
    	<?php 
    	include 'sidebar.php';?>
    	
    	?>

   		
		<button id="setting_panel_btn" class="btn btn-primary btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
		<!-- /Right Setting Menu -->
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">View and Like List</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><span>View and Like List</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>#</th>
														<th>User Name</th>
														<th>Mobile</th>
														<th>Email</th>
														<th>Location</th>
														<th>Subscription Amount</th>
														<th>Subscription Month</th>
														<th>Video Title</th>
														<th>View</th>
														<th>Like</th>
														<th>Created</th> 
													</tr>
												</thead>
												
												<tbody>
													
											<?php
									             $count_id = '1';
									                  foreach ($users as $row)
									                  {  ?>
									                    <tr>
									                    <td> <?php echo $count_id++; ?></td>
									                    <td> <?php echo $row['name']; ?></td>
									                     <td><?php echo $row['mobile']; ?> </td>
									                    <td> <?php echo $row['email']; ?></td>
									                    <td><?php echo $row['location']; ?></td>
									                    <td><?php echo $row['amount']; ?></td>
									                    <td><?php echo $row['month_payment']; ?> Month Subscription</td>
									                    <td><?php echo $row['video_title']; ?> </td>
									                    <td> <?php echo $row['count']; ?></td>
									                    <td><?php echo $row['like_count']; ?> </td>
									                     <td><?php echo $row['udate']; ?> </td>
									                   
									                   <!--  <td><a href="edit_admin.php?id=<?php //echo $row['id'];?>"><i class='fa fa-pencil'></i></a></td> -->
									 
									                    </tr>

									            <?php }
									            ?> 
												</tbody>
											
												<!-- <tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</tfoot> -->
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			</div>

			<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; Snehalniti Developed by <a href="http://creativejuices.in/"> CreativeJuices </a></p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
			
			</div>		

			
	<?php include 'footer.php'; ?>
