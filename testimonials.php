<?php
include "header.php";
include "include/config.php";
?>

<style>
/* img {
  border-radius: 50%;
} */
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
            <h2 style="font-size:24px;text-align:center">We are providing Chemical free Gau Urja & agriculture products
                obtained from Gau mata’s grazing medicinal grasses, plants, herbs in open grazing land.</h2>
        </div>
        <div class="row clearfix">
            <?php
            $sql4 = "select * from tbl_testimonials order by id asc ";
            $stmt4 = $conn->query($sql4);
            $users4 = $stmt4->fetchAll();
            foreach ($users4 as $row4) { ?>
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box text-center">
                    <img src="admin/<?php echo $row4['testimonials_image']; ?>">
                    <div class="lower-box">
                        <h2><?php echo $row4['name']; ?></h2>
                        <h6><?php echo $row4['country_name']; ?></h6>
                        <div class="text"> <br><br>
                            <a href="testimonials_details.php?id=<?php echo $row4['id']; ?>"
                                class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<div class="container">
    <h2>Image Gallery</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://www.w3schools.com/w3images/nature.jpg" target="_blank">
                    <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Nature" style="width:100%">
                    <h1 class="thumbnail-text">Rahul</h1>
                    <p class="thumbnail-text">India</p>
                    <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://www.w3schools.com/w3images/nature.jpg" target="_blank">
                    <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="https://www.w3schools.com/w3images/fjords.jpg" target="_blank">
                    <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>