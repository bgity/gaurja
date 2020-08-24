<?php
 include"header.php";
 include "include/config.php";
 ?>

	 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>Videos</h1>
            
            <!--Bread Crumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Videos</li>
                </ul>
            </div>
            
        </div>
    </section>	
	    
    <!--service-style-3-->
    <section class="service-style-3">
    	<div class="auto-container">
				<div class="sec-title">
					<h2 style="font-size:24px;text-align:center">We are providing Chemical free Gau Urja & agriculture products  obtained from Gau mata’s grazing medicinal grasses, plants, herbs in open grazing land.</h2>
				</div>
        	<div class="row">

                        <?php 
                        $sql4="select * from tbl_youtube_videos order by id desc";
                        $stmt4=$conn->query($sql4);
                        $users4 = $stmt4->fetchAll();
                        foreach ($users4 as $row4)
                        { ?> 
                        <div class="col-sm-6">
                            
                        <iframe  height="300" width="100%" src="https://www.youtube.com/embed/<?php echo $row4['youtube_link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="pricing-column">
                        <a href="#" class="theme-btn btn-style-one" style="width:100%"><?php echo $row4['video_title']; ?></a>
                    </div>
                        </div>
                    <?php }?>
                        <!-- <div class="col-sm-6">
                            
                                <iframe height="300" width="100%" src="https://www.youtube.com/embed/fcv9AN8GEqw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="pricing-column">
                        <a href="#" class="theme-btn btn-style-one" style="width:100%">Indian Desi Cow Breed Khillar</a>
                    </div>
                        </div> -->
                    </div>
        </div>
    </section>

    <?php include "footer.php";?>