<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
  $id=$_POST['id'];
  $video_title=$_POST['video_title'];
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

   $result7 ="UPDATE tbl_youtube_videos SET video_title='$video_title',youtube_link='$youtube_link',video_image ='$video_image',video_content = '$video_content',udate='$date' WHERE id='$id' " ;
   $stmt7=$conn->query($result7);

   if($stmt7)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Video details updated successfully");
              window.location = "daily_videos_list.php";
              </script>';

              $path = "../assets/images/video/$video_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to update video details11");
             // window.location = "daily_videos_list.php";
              </script>';
            }
 }
else
{ 
  $video_image_name=$file_name;
  $video_image= $file_name;

 $result8 ="UPDATE tbl_youtube_videos SET video_title='$video_title',youtube_link='$youtube_link',video_content = '$video_content',udate='$date' WHERE id='$id' " ;
   $stmt8=$conn->query($result8);
   //die;

   		    if($stmt8)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Video details updated successfully");
              window.location = "daily_videos_list.php";
              </script>';
            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to update video details12");
              //window.location = "daily_videos_list.php";
              </script>';
            }
}


}
 ?>


<?php

$ids = $_GET['id'];
$result ="SELECT * FROM tbl_youtube_videos WHERE id='$ids' ";
$stmt1=$conn->query($result);

       while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
         {
          $ids=$res['id'];
          $video_title = $res['video_title'];
          $video_date = $res['video_date'];
          $video_content=$res['video_content'];
          $youtube_link = $res['youtube_link'];
          $video_image = $res['video_image'];

         }

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
					<h5 class="txt-dark">Edit Youtube Videos</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="daily_videos_list.php"><span>Youtube Videos List</span></a></li>
						<li class="active"><span>Edit Youtube Videos</span></li>
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
										
										<h6 class="panel-title txt-dark ">Edit Youtube Video</h6>
										
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
																	<input type="text" class="form-control" name="video_title" value="<?php echo $video_title;?>" placeholder="Enter Video Title" required="">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>
														
														
														<div class="form-group">
															<label for="exampleInputpwd_5" class="col-sm-3 control-label">Youtube Video Link*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="youtube_link" value="<?php echo $youtube_link;?>" placeholder="Enter Youtube Video Link">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Video Content*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	
																	<textarea rows="10" cols="30" class="ckeditor" id="editor1" name="video_content" value="<?php echo $video_content;?>" class="requiredField" required ><?php echo $video_content;?></textarea> 
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Video Pic*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="file" class="dropify" id="image" name="video_image" value="<?php echo $video_image;?>">
																	<div class="input-group-addon"><i class=""></i></div>
																</div>
																<br>
																	 <img class="zoom" id="video_image"  src="../<?php echo $video_image;?>" height="150" width="150" />
															</div>
														</div>
													
														
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
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

		

	<script type="text/javascript">
      document.getElementById("image").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("video_image").src = e.target.result;
      };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script> 	


<?php include 'footer.php'; ?>	

