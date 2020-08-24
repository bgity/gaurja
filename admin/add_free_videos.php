<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{

  $category_id=$_POST['category_id'];
  $title=$_POST['title'];
  $youtube_link=$_POST['youtube_link'];
  $description=$_POST['description'];
  $video_author=$_POST['video_author'];
  $video_date=$_POST['video_date'];


 $date=date("Ymdhis");

  $file = $_FILES['videos_image'];
  $file_name = $_FILES['videos_image']['name'];
  $file_tmp_name = $_FILES['videos_image']['tmp_name'];


 if($file_name)
 {
 $videos_image_name=$date.$file_name;
 $save_image='free_videos_image/';
 $videos_image =$save_image.$videos_image_name; 
 }
else
{ 
  $videos_image_name=$file_name;
  $videos_image= $file_name;
}



   $sql="INSERT INTO tbl_free_videos(category_id,title,youtube_link,videos_image,description,video_author,video_date,cdate)VALUES('".$category_id."','".$title."','".$youtube_link."','".$videos_image."','".$description."','".$video_author."','".$video_date."','".$date."')";
  $stmt=$conn->query($sql);
  
  
           if($stmt)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Video added successfully");
              window.location = "free_videos_list.php";
              </script>';

              $path = "upload/free_videos_image/$videos_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add video details");
             // window.location = "free_videos_list.php";
              </script>';
            }


}
 ?>


<?php 
include 'include/config.php';
//include 'auth.php';

$sql1="SELECT * FROM tbl_videos_category";
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
					<h5 class="txt-dark">Add Free videos</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="free_videos_list.php"><span>Free Videos List</span></a></li>
						<li class="active"><span>Add Free videos</span></li>
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
										
										<h6 class="panel-title txt-dark ">Add Daily Video</h6>
										
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
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Select Video Category*</label>
															<div class="col-sm-9">
																<div class="input-group">
																<select name="category_id" class="form-control" required>'; 
											                  <option value="">--Select--</option>
														    <?php
											                 
											                  while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
											                   echo '<option value="'.$row['id'].'">'.$row['category_name'].'</option>';
											                 }
											                
											                 ?>
											                  </select>
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Video Title*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="title" placeholder="Enter Video Title" required="">
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
															<label for="exampleInputweb_41" class="col-sm-3 control-label">Author</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="video_author" value="SNEHAL KAMBLE" readonly="">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
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
																	
																	<textarea rows="10" cols="30" class="ckeditor" id="editor1" name="description" class="requiredField" required ></textarea> 
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Video Pic*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="file" class="dropify" name="videos_image" required="">
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
