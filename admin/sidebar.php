<?php
include('auth.php');
include('include/config.php');

$_SESSION['role_id'];
$_SESSION['username'];

if ($_SESSION['role_id'] == 1) {

	$full_name = $_SERVER['PHP_SELF'];
	$name_array = explode('/', $full_name);
	$count = count($name_array);
	$page_name = $name_array[$count - 1];

?>

<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">

        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'index.php') ? 'active' : ''; ?>" href="index.php"
                data-toggle="collapse" data-target="#dashboard_dr">
                <div class="pull-left"><i class="pe-7s-home mr-20"></i><span class="right-nav-text">Dashboard</span>
                </div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">

            </ul>
        </li>

        <li>
            <a class="<?php echo ($page_name == 'admin_list.php') || ($page_name == 'edit_admin.php') || ($page_name == 'add_admin.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                <div class="pull-left"><i class="pe-7s-users mr-20"></i><span class="right-nav-text">Admin
                        Details</span></div>
                <div class="pull-right"><span class="label label-success"></span></div>
                <div class="clearfix"></div>
            </a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a class=" <?php echo ($page_name == 'admin_list.php') ? 'active-page' : ''; ?>"
                        href="admin_list.php">Admin List</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'add_admin.php') ? 'active-page' : ''; ?>"
                        href="add_admin.php">Add Admin</a>
                </li>


            </ul>
        </li>

        <!-- <li>
					<a class="<?php echo ($page_name == 'user_list.php') || ($page_name == 'search.php') || ($page_name == 'mobile_search.php') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="fa fa-users mr-20"></i><span class="right-nav-text">User Details</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a class="<?php echo ($page_name == 'user_list.php') ? 'active-page' : ''; ?>" href="user_list.php">User List</a>
						</li>

						<li>
							<a class="<?php echo ($page_name == 'search.php') ? 'active-page' : ''; ?>" href="search.php">Search User</a>
						</li>		

						<li>
							<a class="<?php echo ($page_name == 'mobile_search.php') ? 'active-page' : ''; ?>" href="mobile_search.php">Mobile Wise Search</a>
						</li>						
				
			         </ul>
			     </li> -->

        <li class="navigation-header">
            <span>Product Details</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'service_list.php') || ($page_name == 'edit_service.php') || ($page_name == 'add_service.php') || ($page_name == 'add_subcategory.php') || ($page_name == 'subcategory_list.php') || ($page_name == 'edit_subcategory.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">
                <div class="pull-left"><i class="fa fa-plus-square mr-20"></i><span
                        class="right-nav-text">Services</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class=" <?php echo ($page_name == 'add_service.php') ? 'active-page' : ''; ?>"
                        href="add_service.php">Add Service</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'service_list.php') ? 'active-page' : ''; ?>"
                        href="service_list.php">Service List</a>
                </li>

                <!-- <li>
							<a class=" <?php echo ($page_name == 'add_subcategory.php') ? 'active-page' : ''; ?>" href="add_subcategory.php">Add Sub Category</a>
						</li>
						<li>
							<a class=" <?php echo ($page_name == 'subcategory_list.php') ? 'active-page' : ''; ?>" href="subcategory_list.php">Sub Category List</a>
						</li> -->

            </ul>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'add_product.php') || ($page_name == 'product_list.php') || ($page_name == 'edit_product.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#qoute_dr">
                <div class="pull-left"><i class="fa fa-film mr-20"></i><span class="right-nav-text">Product Details
                    </span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="qoute_dr" class="collapse collapse-level-1">
                <li>
                    <a class="<?php echo ($page_name == 'add_product.php') ? 'active-page' : ''; ?>"
                        href="add_product.php">Add Product</a>
                </li>
                <li>
                    <a class="<?php echo ($page_name == 'product_list.php') ? 'active-page' : ''; ?>"
                        href="product_list.php">Product List</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'add_blog.php') || ($page_name == 'blog_list.php') || ($page_name == 'edit_blog.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr">
                <div class="pull-left"><i class="fa fa-film mr-20"></i><span class="right-nav-text">Blog Details</span>
                </div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class=" <?php echo ($page_name == 'add_blog.php') ? 'active-page' : ''; ?>"
                        href="add_blog.php">Add Blog</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'blog_list.php') ? 'active-page' : ''; ?>"
                        href="blog_list.php">Blog List</a>
                </li>

            </ul>
        </li>

        <li>
            <a class="<?php echo ($page_name == 'add_daily_videos.php') || ($page_name == 'daily_videos_list.php') || ($page_name == 'edit_daily_videos.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr">
                <div class="pull-left"><i class="fa fa-film mr-20"></i><span class="right-nav-text">Youtube Videos
                    </span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class=" <?php echo ($page_name == 'add_daily_videos.php') ? 'active-page' : ''; ?>"
                        href="add_daily_videos.php">Add Youtube Video</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'daily_videos_list.php') ? 'active-page' : ''; ?>"
                        href="daily_videos_list.php">Youtube Video List</a>
                </li>

            </ul>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'add_slider_image.php') || ($page_name == 'slider_image_list.php') || ($page_name == 'edit_slider_image.php') || ($page_name == 'add_gallery_image.php') || ($page_name == 'gallery_image_list.php') || ($page_name == 'edit_gallery_image.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr">
                <div class="pull-left"><i class="pe-7s-photo mr-20"></i><span class="right-nav-text">Slider Image</span>
                </div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="table_dr" class="collapse collapse-level-1 two-col-list">
                <li>
                    <a class=" <?php echo ($page_name == 'add_slider_image.php') ? 'active-page' : ''; ?>"
                        href="add_slider_image.php">Add Slider Image</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'slider_image_list.php') ? 'active-page' : ''; ?>"
                        href="slider_image_list.php">Slider Image List</a>
                </li>
                <!-- <li>
							<a class=" <?php echo ($page_name == 'add_gallery_image.php') ? 'active-page' : ''; ?>" href="add_gallery_image.php">Add Gallery Image</a>
						</li>
						<li>
							<a class=" <?php echo ($page_name == 'gallery_image_list.php') ? 'active-page' : ''; ?>" href="gallery_image_list.php">Gallery Image List</a>
						</li> -->

            </ul>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'add_testimonials.php') || ($page_name == 'testimonials_list.php') || ($page_name == 'edit_testimonials.php') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr">
                <div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span
                        class="right-nav-text">Testimonials</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="icon_dr" class="collapse collapse-level-1">
                <li>
                    <a class=" <?php echo ($page_name == 'add_testimonials.php') ? 'active-page' : ''; ?>"
                        href="add_testimonials.php">Add Testimonials</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'testimonials_list.php') ? 'active-page' : ''; ?>"
                        href="testimonials_list.php">Testimonials List</a>
                </li>

            </ul>
        </li>

        <li>
            <a class="<?php echo ($page_name == 'add_mission_vision.php') || ($page_name == 'mission_vision_list.php') || ($page_name == 'edit_mission_vision.php') || ($page_name == '') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#seminar_dr">
                <div class="pull-left"><i class="fa fa-square mr-20"></i><span
                        class="right-nav-text">Mission/Vision</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="seminar_dr" class="collapse collapse-level-1">
                <li>
                    <a class=" <?php echo ($page_name == 'add_mission_vision.php') ? 'active-page' : ''; ?>"
                        href="add_mission_vision.php">Add Mission Vision</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'mission_vision_list.php') ? 'active-page' : ''; ?>"
                        href="mission_vision_list.php">Mission Vision List</a>
                </li>


            </ul>
        </li>

        <li>
            <a class="<?php echo ($page_name == 'franchise_list.php') || ($page_name == 'add_franchise.php') || ($page_name == '') || ($page_name == '') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#like_dr">
                <div class="pull-left"><i class="fa fa-square mr-20"></i><span class="right-nav-text">Franchise
                        List</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="like_dr" class="collapse collapse-level-1">

                <li>
                    <a class=" <?php echo ($page_name == 'add_franchise.php') ? 'active-page' : ''; ?>"
                        href="add_franchise.php">Add Franchise</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'franchise_list.php') ? 'active-page' : ''; ?>"
                        href="franchise_list.php">Franchise List</a>
                </li>


            </ul>
        </li>
        <li>
            <a class="<?php echo ($page_name == 'upcomingproduct_list.php') || ($page_name == 'add_upcomingproduct.php') || ($page_name == '') || ($page_name == '') ? 'active' : ''; ?>"
                href="javascript:void(0);" data-toggle="collapse" data-target="#upcoming_dr">
                <div class="pull-left"><i class="fa fa-square mr-20"></i><span class="right-nav-text">upcomingproduct
                        List</span></div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="upcoming_dr" class="collapse collapse-level-1">

                <li>
                    <a class=" <?php echo ($page_name == 'add_upcomingproduct.php') ? 'active-page' : ''; ?>"
                        href="add_upcomingproduct.php">Add upcoming product</a>
                </li>
                <li>
                    <a class=" <?php echo ($page_name == 'upcomingproduct_list.php') ? 'active-page' : ''; ?>"
                        href="upcomingproduct_list.php">upcomingproduct List</a>
                </li>


            </ul>
        </li>

        <!-- <li>
					<a class="<?php echo ($page_name == 'free_home_consultation_list.php') || ($page_name == '') || ($page_name == '') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#free_dr"><div class="pull-left"><i class=" fa fa-comment mr-20"></i><span class="right-nav-text">Free Consultation </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="free_dr" class="collapse collapse-level-1">
						
						<li>
							<a class="<?php echo ($page_name == 'free_home_consultation_list.php') ? 'active-page' : ''; ?>" href="free_home_consultation_list.php">Free Consultation</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="<?php echo ($page_name == 'add_testimonials.php') || ($page_name == 'testimonials_list.php') || ($page_name == 'edit_testimonials.php') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#testimonials_dr"><div class="pull-left"><i class="fa fa-bookmark mr-20"></i><span class="right-nav-text">Testimonials</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="testimonials_dr" class="collapse collapse-level-1">
						<li>
							<a class=" <?php echo ($page_name == 'add_testimonials.php') ? 'active-page' : ''; ?>" href="add_testimonials.php">Add Testimonials</a>
						</li>
						<li>
							<a class=" <?php echo ($page_name == 'testimonials_list.php') ? 'active-page' : ''; ?>" href="testimonials_list.php">Testimonials List</a>
						</li>
						
					</ul>
				</li>

				<li>
					<a class="<?php echo ($page_name == 'add_quote.php') || ($page_name == 'quote_list.php') || ($page_name == 'edit_quote.php') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="ti-text mr-20"></i><span class="right-nav-text">Quotes</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="maps_dr" class="collapse collapse-level-1">
						<li>
							<a class=" <?php echo ($page_name == 'add_quote.php') ? 'active-page' : ''; ?>" href="add_quote.php">Add Quote</a>
						</li>
						<li>
							<a class=" <?php echo ($page_name == 'quote_list.php') ? 'active-page' : ''; ?>" href="quote_list.php">Quotes List</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="<?php echo ($page_name == 'add_about_mba.php') || ($page_name == 'about_mba_list.php') || ($page_name == 'edit_about_mba.php') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#mba_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">10x MBA Terms&Policies </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="mba_dr" class="collapse collapse-level-1">
						 <li>
							<a class="<?php echo ($page_name == 'add_about_mba.php') ? 'active-page' : ''; ?>" href="add_about_mba.php">Add 10x MBA</a>
						</li> 
						<li>
							<a class="<?php echo ($page_name == 'about_mba_list.php') ? 'active-page' : ''; ?>" href="about_mba_list.php">About 10x MBA List</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="<?php echo ($page_name == 'feedback_list.php') || ($page_name == 'revert_feedback.php') || ($page_name == '') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#feedback_dr"><div class="pull-left"><i class=" fa fa-comment mr-20"></i><span class="right-nav-text">Feedback </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="feedback_dr" class="collapse collapse-level-1">
						
						<li>
							<a class="<?php echo ($page_name == 'feedback_list.php') ? 'active-page' : ''; ?>" href="feedback_list.php">Feedback List</a>
						</li>
					</ul>
				</li>

				
				<li>
					<a class="<?php echo ($page_name == 'send_notification.php') || ($page_name == '') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#noti_dr"><div class="pull-left"><i class="fa fa-comment mr-20"></i><span class="right-nav-text"> Notification</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="noti_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a class="<?php echo ($page_name == 'send_notification.php') ? 'active-page' : ''; ?>" href="send_notification.php">Send Notification</a>
						</li>				
				
			         </ul>
			     </li>  -->

</div>
<?php } else { ?>


<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">

        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>

        <li>
            <a class="<?php echo ($page_name == 'index.php') ? 'active' : ''; ?>" href="index.php"
                data-toggle="collapse" data-target="#dashboard_dr">
                <div class="pull-left"><i class="pe-7s-home mr-20"></i><span class="right-nav-text">Dashboard</span>
                </div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">

            </ul>
        </li>

        <!-- <li>
					<a class="<?php echo ($page_name == 'feedback_list.php') || ($page_name == 'revert_feedback.php') || ($page_name == '') ? 'active' : ''; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#feedback_dr"><div class="pull-left"><i class=" fa fa-comment mr-20"></i><span class="right-nav-text">Feedback </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="feedback_dr" class="collapse collapse-level-1">
						
						<li>
							<a class="<?php echo ($page_name == 'feedback_list.php') ? 'active-page' : ''; ?>" href="feedback_list.php">Feedback List</a>
						</li>
					</ul>
				</li> -->



</div>

<?php } ?>