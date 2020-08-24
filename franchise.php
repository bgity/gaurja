<?php
 include"header.php";
 include "include/config.php";
 ?>

	 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>Franchise</h1>
            
            <!--Bread Crumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Franchise</li>
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
        	<div class="row clearfix">
            	<!--Service Block-->
                <?php 

                        //$id = $_GET['id'];
                        $sql4="select * from tbl_franchise order by id asc ";
                        $stmt4=$conn->query($sql4);
                        $users4 = $stmt4->fetchAll();
                        foreach ($users4 as $row4)
                        { ?> 
            	<div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box text-center">
  
                        <img src="admin/<?php echo $row4['store_image']; ?>">    
                            
                        <div class="lower-box">
                            <h2><?php echo $row4['store_name']; ?></h2>
                            <h6><?php echo $row4['store_location']; ?></h6>
                            <div class="text"> <br><br>
                            <a href="franchise_details.php?id=<?php echo $row4['id']; ?>" class="btn btn-primary">Read More</a>
							</div>
                        </div>
                    </div>
                </div>
            <?php }?>
                
                
            </div>
        </div>
    </section>


        <?php include "footer.php";?>