<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{

   $video_title=$_POST['video_title'];
   $video_date=$_POST['video_date'];
   $youtube_link=$_POST['youtube_link'];
   $video_content=$_POST['video_content'];
 
   $date=date("Ymdhis");


  $file = $_FILES['video_image'];
  $file_name = $_FILES['video_image']['name'];
  $file_tmp_name = $_FILES['video_image']['tmp_name'];

 if($file_name)
 {
 $video_image_name=$date.$file_name;
 $save_image='assets/images/video/';
 $video_image =$save_image.$video_image_name; 
 }
else
{ 
  $video_image_name=$file_name;
  $video_image= $file_name;
}


          $sql="INSERT INTO tbl_youtube_videos(video_title,video_date,youtube_link,video_content,video_image,cdate)VALUES('".$video_title."','".$video_date."','".$youtube_link."','".$video_content."','".$video_image."','".$date."')";

          $stmt=$conn->query($sql);

           if($stmt)
            {


              echo '<script language="javascript" type="text/javascript"> 
              alert("Video added successfully");
              window.location = "daily_videos_list.php";
              </script>';

              $path = "../assets/images/video/$video_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add video");
             // window.location = "daily_videos_list.php";
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
					<h5 class="txt-dark">Add Youtube Video</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="daily_videos_list.php"><span>Youtube Video List</span></a></li>
						<li class="active"><span>Add Youtube Video</span></li>
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
										
										<h6 class="panel-title txt-dark ">Add Youtube Video</h6>
										
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
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Video Title*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="video_title" placeholder="Enter Video Title" required="">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputEmail_4" class="col-sm-3 control-label">Video Date*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="date" class="form-control" name="video_date" placeholder="Enter Date" required="">
																	<div class="input-group-addon"><i class=""></i></div>
																</div>
															</div>
														</div>
														
														<div class="form-group">
															<label for="exampleInputpwd_5" class="col-sm-3 control-label">Youtube Video Link*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="youtube_link" placeholder="Enter Youtube Video Link">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Video Content*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	
																	<textarea rows="10" cols="30" class="ckeditor" id="editor1" name="video_content" class="requiredField" required ></textarea> 
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Video Pic*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="file" class="dropify" name="video_image" required="">
																	<div class="input-group-addon"><i class=""></i></div>
																</div>
															</div>
														</div>
													
														
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" name="submit" class="btn btn-info ">Submit</button>
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

 

	<script type="text/javascript">
      document.getElementById("image").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("videos_image").src = e.target.result;
      };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script> 		



		<?php include 'footer.php'; ?>			
