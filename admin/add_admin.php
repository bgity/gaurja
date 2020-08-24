<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
 $username=$_POST['username'];
 $mobile_number=$_POST['mobile_number'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $role_id=$_POST['role_id'];
 $date=date("Ymdhis");

 	      $sql2="SELECT * FROM tbl_admin WHERE username = '".$username."' ";
		  $stmt2=$conn->query($sql2); 
		  $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

		if($result2 > 1)
		{
			echo '<script language="javascript" type="text/javascript"> 
              alert("Username is allready exist!!please enter another username.");
              window.location = "admin_list.php";
              </script>'; 
         }
         else
         {
              $sql="INSERT INTO tbl_admin(username,mobile_number,email,password,role_id,cdate)VALUES('".$username."','".$mobile_number."','".$email."',MD5('".$password."'),'".$role_id."','".$date."')";
            // die;
             $stmt=$conn->query($sql);


           if($stmt)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Form successfully submitted");
              window.location = "admin_list.php";
              </script>';
            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Form failed to submitted");
             // window.location = "admin_list.php";
              </script>';
            }
         }   


}
 ?>

<?php 
include 'include/config.php';
//include 'auth.php';

$sql1="SELECT * FROM tbl_roles";
$stmt1=$conn->query($sql1);
?>


	<!DOCTYPE html>
	<html lang="en">

	<?php 
	include 'header.php';
	include 'sidebar.php';
	?>			

	<!-- Main Content -->
	<div class="page-wrapper">
		<div class="container-fluid">

			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Add Admin</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="admin_list.php"><span>Admin List</span></a></li>
						<li class="active"><span>Add Admin</span></li>
					</ol>
				</div>
				<!-- /Breadcrumb -->

			</div>
			<!-- /Title -->

			<!-- Row -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Add Admin</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<form action="" method="post">
												<div class="form-body">
													<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Admin Info</h6>
													<hr class="light-grey-hr"/>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Username</label>
																<input type="text" id="Username" class="form-control" name="username" placeholder="Enter Username">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Password</label>
																<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
																<!-- <span class="help-block"> This field has error. </span>  -->
															</div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Email</label>
																<input type="text" id="Email" class="form-control" name="email" placeholder="Enter Email Id">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Mobile Number</label>
																<input type="number" id="Mobile" class="form-control" name="mobile_number" placeholder="Enter Mobile Number">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																 <label>Role</label>
										                   <?php
										                  echo '<select name="role_id" class="form-control" required>'; 
										                  echo '<option value="">Select</option>';
										                  while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
										                   echo '<option value="'.$row['role_id'].'">'.$row['role'].'</option>';
										                 }
										                 echo '</select>';?>
															</div>
														</div>
														
													</div>

													
													<!-- /Row -->
													
												</div>
												<div class="form-actions mt-10">
													<button type="submit" name="submit" 
												 class="btn btn-success  mr-10"> Submit</button>
													<button type="button" class="btn btn-default">Cancel</button>
												</div>
											</form>
										</div>
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
