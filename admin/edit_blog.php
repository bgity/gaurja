<?php
include ('auth.php');
include ('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit']))
{
   $id=$_POST['id'];
   $blog_title=$_POST['blog_title'];
   $blog_link=$_POST['blog_link'];
   $blog_content=$_POST['blog_content'];
 
 $date=date("Ymdhis");


  $file = $_FILES['blog_image'];
  $file_name = $_FILES['blog_image']['name'];
  $file_tmp_name = $_FILES['blog_image']['tmp_name'];

 if($file_name)
 {
 $blog_image_name=$date.$file_name;
 $save_image='assets/images/blog_images/';
 $blog_image =$save_image.$blog_image_name; 

 		 $result7 ="UPDATE blog SET blog_title='$blog_title',blog_link='$blog_link',blog_content ='$blog_content',blog_image = '$blog_image' WHERE id='$id' " ;
        $stmt7=$conn->query($result7);

        if($stmt7)
            {


              echo '<script language="javascript" type="text/javascript"> 
              alert("Blog updated successfully");
              window.location = "blog_list.php";
              </script>';

              $path = "../assets/images/blog_images/$blog_image_name"; 
              move_uploaded_file($file_tmp_name,$path);

            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add blog1");
             // window.location = "blog_list.php";
              </script>';
            }

 }
else
{ 
  $blog_image_name=$file_name;
  $blog_image= $file_name;

         $result8 ="UPDATE blog SET blog_title='$blog_title',blog_link='$blog_link',blog_content ='$blog_content' WHERE id='$id' " ;
        $stmt8=$conn->query($result8);


        if($stmt8)
            {


              echo '<script language="javascript" type="text/javascript"> 
              alert("Blog updated successfully");
              window.location = "blog_list.php";
              </script>';

          
            }

            else
            {
              echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add blog");
             // window.location = "blog_list.php";
              </script>';
            }
}      


}
 ?>

 <?php

$id = $_GET['id'];
$result ="SELECT * FROM blog WHERE id='$id' ";
$stmt1=$conn->query($result);

       while($res = $stmt1->fetch(PDO::FETCH_ASSOC))
         {
          $id=$res['id'];
          $blog_title=$res['blog_title'];
          $blog_content=$res['blog_content'];
          $blog_link = $res['blog_link'];
          $blog_image = $res['blog_image'];

          
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
					<h5 class="txt-dark">Edit Blog</h5>
				</div>

				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li><a href="blog_list.php"><span>Blog List</span></a></li>
						<li class="active"><span>Edit Blog</span></li>
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
										
										<h6 class="panel-title txt-dark ">Edit Blog</h6>
										
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
															<label for="exampleInputuname_4" class="col-sm-3 control-label" style="">Blog Title*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="blog_title" value="<?php echo $blog_title;?>" placeholder="Blog Title" required="">
																	<div class="input-group-addon"></div>
																</div>
															</div>
														</div>
														
														
														<div class="form-group">
															<label for="exampleInputpwd_5" class="col-sm-3 control-label">Blog Page Link*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="text" class="form-control" name="blog_link" value="<?php echo $blog_link;?>"  placeholder="Enter Blog Link">
																	<div class="input-group-addon"><i class="icon-globe"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Blog Content*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<!-- <textarea class="summernote"  name="post_content" placeholder="Enter Video Description" rows="5" cols="50" required=""> </textarea> -->
																	<textarea rows="10" cols="30" class="ckeditor" id="editor1" name="blog_content" value="<?php echo $blog_content;?>"  class="requiredField" required ><?php echo $blog_content;?></textarea> 
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label  for="exampleInputpwd_6" class="col-sm-3 control-label">Blog Pic*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<input type="file" id="image" class="dropify" name="blog_image" value="<?php echo $blog_image;?>">
																	<div class="input-group-addon"><i class=""></i></div>
																</div>
																<br>
																	 <img class="zoom" id="blog_image"  src="../<?php echo $blog_image;?>" height="150" width="150" />
															</div>
														</div>
													
														
														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
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
        document.getElementById("blog_image").src = e.target.result;
      };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  };
</script> 		



		<?php include 'footer.php'; ?>			
