<?php
include "header.php";
include "include/config.php";
?>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
    <div class="auto-container">
        <h1>Products</h1>
        <!--Bread Crumb -->
        <div class="breadcrumb-column">
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active">Products</li>
            </ul>
        </div>
    </div>
</section>
<section class="service-style-3">
    <div class="auto-container">
        <div class="sec-title">
            <h2 style="font-size:24px;text-align:center">We are providing Chemical free Gau Urja & agriculture
                products
                obtained from Gau mata’s grazing medicinal grasses, plants, herbs in open grazing land.</h2>
        </div>
        <div class="row">
            <?php
            $id = $_GET['id'];
            $sql4 = "select * from products where id = '$id' ";
            $stmt4 = $conn->query($sql4);
            $users4 = $stmt4->fetchAll();
            foreach ($users4 as $row4) { ?>
            <div class="card-main-div col-md-12 col-sm-12 col-xs-12">
                <div class="box-shadow-custom thumbnail">
                    <img src="admin/<?php echo $row4['product_image']; ?>" alt="Nature" class="circletag">
                    <h1 class="testamonial-text"><?php echo $row4['product_name']; ?></h1>
                    <p class="testamonial-description"><?php echo $row4['product_details']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>