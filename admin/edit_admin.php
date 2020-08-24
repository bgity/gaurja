<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
 $id = $_POST['id'];
 $username=$_POST['username'];
 $mobile_number=$_POST['mobile_number'];
 $email=$_POST['email'];
 $role_id=$_POST['role_id'];

 $date=date("Ymdhis");



  $result1 ="UPDATE tbl_admin SET username='$username',email='$email',mobile_number='$mobile_number',role_id='$role_id',udate='$date' WHERE id='$id'" ;
  $stmt=$conn->query($result1);

   if($stmt)
          {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Admin details updated successfully");
              window.location = "admin_list.php";
              </script>';
            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Admin details failed to update");
                           // window.location = "add_user.php";
              </script>';
            }

}
 ?>

<?php

$id = $_GET['id'];
$result ="SELECT * FROM tbl_admin WHERE id='$id' ";
$stmt1=$conn->query($result);

       while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
         {
          $ids=$res['id'];
          $username=$res['username'];
          $mobile_number = $res['mobile_number'];
          $email = $res['email'];
          $role_id = $res['role_id'];
        }
          

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
					<h5 class="txt-dark">Edit Admin</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="admin_list.php"><span>Admin List</span></a></li>
						<li class="active"><span>Edit Admin</span></li>
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
								<h6 class="panel-title txt-dark">Edit Admin</h6>
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
																<input type="text" id="Username" class="form-control" name="username" value="<?php echo $username;?>" placeholder="Enter Username"  readonly="">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Email</label>
																<input type="text" id="Email" class="form-control" name="email" value="<?php echo $email;?>" placeholder="Enter Email Id">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->
													<div class="row">
														
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Mobile Number</label>
																<input type="number" id="Mobile" class="form-control" name="mobile_number" value="<?php echo $mobile_number;?>" placeholder="Enter Mobile Number">
																<!-- <span class="help-block"> This is inline help </span>  -->
															</div>
														</div>
														<!--/span-->
															<div class="col-md-6">
															<div class="form-group">
																 <label>Role</label>
											        <?php
								                    $position_sql = "SELECT role_id, role FROM tbl_roles";
								                    $stmt1=$conn->query($position_sql);
								                    echo '<select name="role_id" class="form-control">';

								                    while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC))
								                    {
								                        
								                        if($role_id  == $row1['role_id'])
								                            echo "<option selected='selected' value='" . $row1['role_id'] . "'>" . $row1['role'] . "</option>";
								                        else
								                            echo "<option value='" . $row1['role_id'] . "'>" . $row1['role'] . "</option>";
								                    }
								                   echo "</select>";

								                    ?>  
															</div>
														</div>
													</div>
													
												</div>
												<div class="form-actions mt-10">
													<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
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
							<p>2018 &copy; snehalniti Developed by <a href="creativejuices.in"> CreativeJuices </a></p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
			
			</div>		


		<?php include 'footer.php'; ?>			
