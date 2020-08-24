<?php 
include 'auth.php';
include 'include/config.php';

$sql1='select fd.*,vc.category_name from tbl_videos_category as vc left join tbl_free_videos as fd on (vc.id = fd.category_id) where fd.status = 0 order by fd.id desc';
$stmt1=$conn->query($sql1);
$users = $stmt1->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">


<?php 
include 'header.php';
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

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-pink">
    	<?php 
    	include 'sidebar.php';?>
    	
    	?>

   		
		<button id="setting_panel_btn" class="btn btn-primary btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
		<!-- /Right Setting Menu -->
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Free Video List</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><span>Free Video List</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div style="text-align:right; width:100%; padding:0;">
                                   <a href="add_free_videos.php" class="btn btn-info">+Add Free Video </a>
                                </div>
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>#</th>
														<th>Category Name</th>
														<th>Title</th>
														<th>Youtube Link</th>
														<th>Description</th>
														<th>Image</th>
														<th>Action</th>
													</tr>
												</thead>
												
												<tbody>
													
											<?php
									             $count_id = '1';
									                  foreach ($users as $row)
									                  {  ?>
									                    <tr>
									                    <td> <?php echo $count_id++; ?></td>
									                    <td> <?php echo $row['category_name']; ?></td>
									                    <td><?php echo $row['title']; ?> </td>
									                    <td> <?php echo $row['youtube_link']; ?></td>
									                    <td><?php echo $row['description']; ?> </td>
									                     <td><img  src=upload/<?php echo $row['videos_image']; ?> alt='products image' width='80px' height='80px'></td>
									                   
									                    <td><a href="edit_free_videos.php?id=<?php echo $row['id'];?>"><i class='fa fa-pencil'></i>  | <a href="delete_free_videos.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')"><i class='fa fa-trash'></i></a></a></td>
									 
									                    </tr>

									            <?php }
									            ?> 
												</tbody>
											
												<!-- <tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</tfoot> -->
											</table>
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