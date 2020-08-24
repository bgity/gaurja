<?php
 include"header.php";
 include "include/config.php";
 ?>

 <style>
img {
  border-radius: 50%;
}
</style>

	 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>Testimonials</h1>
            
            <!--Bread Crumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Testimonials</li>
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
                        $id = $_GET['id'];
                        $sql4="select * from tbl_testimonials where id = '$id' ";
                        $stmt4=$conn->query($sql4);
                        $users4 = $stmt4->fetchAll();
                        foreach ($users4 as $row4)
                        { ?> 
                        <div class="col-sm-6">
                            
                         <img src="admin/<?php echo $row4['testimonials_image']; ?>">  
                            <div class="pricing-column">
                         
                    </div>
                        </div>
                    <?php }?>
                        <div class="col-sm-6">

                        <div class="pricing-column">
                            <a href="" class="theme-btn btn-style-one" style="width:100%"><?php echo $row4['name']; ?></a>
                            </div>
                        <p><?php echo $row4['content']; ?></p>
                          
                        </div>
                    </div>
        </div>
    </section>

    <?php include "footer.php";?>