<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{

  $title=$_POST['title'];

 $date=date("Ymdhis");

  $file = $_FILES['image1'];
  $file_name = $_FILES['image1']['name'];
  $file_tmp_name = $_FILES['image1']['tmp_name'];


 if($file_name)
 {
 $slider_image_name=$date.$file_name;
 $save_image='assets/images/images_slider/';
 $slider_image =$save_image.$slider_image_name; 
 }
else
{ 
  $slider_image_name=$file_name;
  $slider_image= $file_name;
}


   $sql="INSERT INTO tbl_slider(title,slider_image,cdate)VALUES('".$title."','".$slider_image."','".$date."')";
  $stmt=$conn->query($sql);

  
           if($stmt)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Slider image added successfully");
              window.location = "slider_image_list.php";
              </script>';

              $path = "../assets/images/images_slider/$slider_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add image");
             // window.location = "slider_image_list.php";
              </script>';
            }

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
					<h5 class="txt-dark">Add Slider Image</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="slider_image_list.php"><span>Slider Image List</span></a></li>
						<li class="active"><span>Add Slider Image</span></li>
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
								<h6 class="panel-title txt-dark">Add Slider Image</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="form-wrap">
											<form enctype="multipart/form-data"  method="post">
												<div class="form-body">
													<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Video Info</h6>
													<hr class="light-grey-hr"/>
													<div class="row">
														
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Title</label>
																<input type="text" id="Title" class="form-control" name="title" placeholder="Enter Image Title" required="">
																
															</div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->
													
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Select Slider Image</label>
																<input type="file" id="image" class="dropify" name="image1">

															</div>
														</div>
                                                          <div class="col-md-6">
															<div class="form-group">

																 <img id="slider_image" height="200" width="250" />
																
															</div>
														    </div>
														</div>
														<!--/span-->
													
												
													</div>

													</div>

													</div>
													
													
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

		

	<script type="text/javascript">
      document.getElementById("image").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("slider_image").src = e.target.result;
      };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script> 		



		<?php include 'footer.php'; ?>			
