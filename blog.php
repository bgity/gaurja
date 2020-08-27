<?php
include "header.php";
include "include/config.php";
?>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
    <div class="auto-container">
        <h1>Blog</h1>
        <!--Bread Crumb -->
        <div class="breadcrumb-column">
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="sec-title">
        <h2 style="font-size:24px;text-align:center">We are providing Chemical free Gau Urja & agriculture products
            obtained from Gau mata’s grazing medicinal grasses, plants, herbs in open grazing land.</h2>
    </div>
    <div></div>
    <!-- <h2 class="vision">Blogs</h2> -->
    <div class="row">
        <?php
        $sql4 = "select * from blog";
        $stmt4 = $conn->query($sql4);
        $users4 = $stmt4->fetchAll();
        foreach ($users4 as $row4) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card-div thumbnail">
                <a href="blog_details.php?id=<?php echo $row4['id']; ?>">
                    <img src="<?php echo $row4['blog_image']; ?>" alt="Nature" style="width:300px;height: 200px;">
                    <p></p>
                    <h4 class="thumbnail-text"><?php echo $row4['blog_title']; ?></h4>
                    <p></p>
                    <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php include "footer.php"; ?>