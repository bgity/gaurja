<?php
  session_start();
  //echo session_id();

  include('include/config.php');

    if (isset($_POST['submit']))
    {
    
    $username = $_POST['username']; 
    $password = $_POST['password'];
  
    $query = "SELECT * FROM `tbl_admin` WHERE username='$username' and password=md5('$password') ";
    $result=$conn->query($query);
    $rows =$result->fetchAll();
  // print_r($rows);
    // echo count($rows);
   // die;

  

        if(count($rows) > 0)
        {
             $_SESSION['role_id'] = $rows[0]['role_id'];
             $_SESSION['username'] = $rows[0]['username'];
             //die();

           echo '<script language="javascript" type="text/javascript"> 
                alert("Login Successfully.");
                window.location = "index.php";
                </script>';
            
        }
        else
        {
       echo '<script language="javascript" type="text/javascript"> 
                alert("Incorrect username and password");
                window.location = "login.php";
        </script>';
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from hencework.com/theme/grandin-demo/full-width-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 07:58:08 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Gau Urja</title>
		<meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="login.php">
						<img class="brand-img mr-10" src="logo.png" alt="brand"/>
						<span class="brand-text">Gau Urja</span>
					</a>
				</div>
				<!-- <div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-primary  btn-rounded" href="signup.html">Sign Up</a>
				</div> -->
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to Gau Urja</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
													<input type="text" name="username" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter Username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													
													<div class="clearfix"></div>
													<input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter pwd">
												</div>
												
												
												<div class="form-group text-center">
													<button type="submit" name="submit" class="btn btn-primary  btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>

<!-- Mirrored from hencework.com/theme/grandin-demo/full-width-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 07:58:08 GMT -->
</html>
