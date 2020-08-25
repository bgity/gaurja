<?php
include "header.php";
include "include/config.php";
?>
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
        <div class="row">

            <?php
            $id = $_GET['id'];
            $sql4 = "select * from tbl_testimonials where id = '$id' ";
            $stmt4 = $conn->query($sql4);
            $users4 = $stmt4->fetchAll();
            foreach ($users4 as $row4) { ?>
            <div class="col-sm-6">
                <img src="admin/<?php echo $row4['testimonials_image']; ?>"
                    style="width:455px;height:355px;border-radius: 50%;">
                <div class="pricing-column">
                </div>
            </div>
            <?php } ?>
            <div class="col-sm-6">
                <div class="pricing-column">
                    <a href="" class="theme-btn btn-style-one" style="100%"><?php echo $row4['name']; ?></a>
                </div>
                <p><?php echo $row4['content']; ?></p>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="sec-title">
    </div>
    <!-- <h2 class="vision">Testimonials</h2> -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card-div thumbnail">
                <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg"
                    alt="Nature" class="img-raised" style="max-width:160px; border-radius: 50%;margin-top: -75px;
">
                <h1 class="testamonial-text">N. Shrinivasu Rao</h1>
                <p class="testamonial-text">I was diagnosed with RCC by TATA Cancer Hospital Kharghar, without taking
                    any
                    Chemo, Radiation or Medicine, I took Gau Urja Natural Treatment, Now, I'm free from RCC, I feel
                    thankful to myself for taking a decision of going for Gau Urja treatment, otherwise it wasn't be
                    possible? Now, I'm living energetic happy life with family! </p>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>