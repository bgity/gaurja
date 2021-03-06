<?php
include('auth.php');
include('include/config.php');

date_default_timezone_set('Asia/Kolkata');

if (isset($_POST['submit'])) {

	$title = $_POST['title'];
	$description = $_POST['description'];

	$date = date("Ymdhis");

	$file = $_FILES['mission_image'];
	$file_name = $_FILES['mission_image']['name'];
	$file_tmp_name = $_FILES['mission_image']['tmp_name'];
	if ($file_name) {
		$mission_image_name = $date . $file_name;
		$save_image = 'missionvision/images/';
		$missiom_image = $save_image . $mission_image_name;
	} else {
		$mission_image_name = $file_name;
		$missiom_image = $file_name;
	}

	$sql = "INSERT INTO tbl_vision_mission(title,description,mission_images)VALUES('" . $title . "','" . $description . "','" . $missiom_image . "')";
	$stmt = $conn->query($sql);

	if ($stmt) {

		echo '<script language="javascript" type="text/javascript"> 
              alert("Mission/vision added successfully");
              window.location = "mission_vision_list.php";
			  </script>';
		$path = "missionvision/images/$mission_image_name";
		move_uploaded_file($file_tmp_name, $path);
	} else {
		echo '<script language="javascript" type="text/javascript"> 
              alert("failed to add service");
             // window.location = "free_videos_list.php";
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
                <h5 class="txt-dark">Add Mission/Vision</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="mission_vision_list.php"><span>Mission/Vision List</span></a></li>
                    <li class="active"><span>Add Mission/Vision</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->

        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark ">Add Mission/Vision</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-wrap">
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputuname_4" class="col-sm-3 control-label"
                                                    style="">Title*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Title" required="">
                                                        <div class="input-group-addon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputpwd_6"
                                                    class="col-sm-3 control-label">Description*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <!-- <textarea class="summernote"  name="post_content" placeholder="Enter Video Description" rows="5" cols="50" required=""> </textarea> -->
                                                        <textarea rows="10" cols="30" class="ckeditor" id="editor1"
                                                            name="description" class="requiredField"
                                                            required></textarea>
                                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputpwd_6"
                                                    class="col-sm-3 control-label">Image*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="file" class="dropify" name="mission_image"
                                                            required="">
                                                        <div class="input-group-addon"><i class=""></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-info ">Submit</button>
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
    document.getElementById("image").onchange = function() {
        var reader = new FileReader();

        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("service_image").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    </script>
    <?php include 'footer.php'; ?>