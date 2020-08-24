<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
  $id=$_POST['id'];
  $title=$_POST['title'];

 $date=date("Ymdhis");

  $file = $_FILES['image1'];
  $file_name = $_FILES['image1']['name'];
  $file_tmp_name = $_FILES['image1']['tmp_name'];


 if($file_name)
 {

 $slider_image_name=$date.$file_name;
 $save_image='slider_images/';
 $slider_image =$save_image.$slider_image_name; 

   $result7 ="UPDATE tbl_slider_images SET title='$title',slider_image ='$slider_image',udate='$date' WHERE id='$id' " ;
   $stmt7=$conn->query($result7);

   if($stmt7)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Slider Image details updated successfully");
              window.location = "slider_image_list.php";
              </script>';

              $path = "upload/slider_images/$slider_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to update slider image");
             // window.location = "slider_image_list.php";
              </script>';
            }
 }
else
{ 
  $slider_image_name=$file_name;
  $slider_image= $file_name;

   $result8 ="UPDATE tbl_slider_images SET title='$title',udate='$date' WHERE id='$id' " ;
   $stmt8=$conn->query($result8);


   		    if($stmt8)
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("Slider Image details updated successfully");
              window.location = "slider_image_list.php";
              </script>';
            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to update slider image");
              //window.location = "slider_image_list.php";
              </script>';
            }
}


}
 ?>


<?php

$id = $_GET['id'];
$result ="SELECT * FROM tbl_slider_images WHERE id='$id' ";
$stmt1=$conn->query($result);

       while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
         {
          $ids=$res['id'];
          $title=$res['title'];
          $slider_image = $res['slider_image'];
          
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
					<h5 class="txt-dark">Edit Slider Image</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="slider_image_list.php"><span>Slider Image List</span></a></li>
						<li class="active"><span>Edit Slider Image</span></li>
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
								<h6 class="panel-title txt-dark">Edit Slider Image</h6>
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
													<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Slider Image Info</h6>
													<hr class="light-grey-hr"/>
													<div class="row">
														
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Title</label>
																<input type="text" id="Title" class="form-control" name="title"
																value="<?php echo $title;?>"  placeholder="Enter Videos Title" required="">
																
															</div>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->
													<div class="row">
														
														<!--/span-->
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Select Slider Image</label>
																<input type="file" id="image" class="dropify" name="image1" value="<?php echo $slider_image;?>" >

															</div>
														</div>
                                                          <div class="col-md-6">
															<div class="form-group">
																  <img class="zoom" id="videos_image"  src="upload/<?php echo $slider_image;?>" height="150" width="150" />
																
															</div>
														    </div>
														</div>
														<!--/span-->
												
												
													</div>

													</div>

													</div>
													
													
												</div>
												<div class="form-actions mt-10">
													<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
													<button type="submit" name="submit" 
												 class="btn btn-success  mr-10">Update</button>
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
        document.getElementById("videos_image").src = e.target.result;
      };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script> 	


<?php include 'footer.php'; ?>	

