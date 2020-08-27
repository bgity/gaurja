<?php include "header.php";
include "include/config.php"; ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
    <div class="auto-container">
        <h1>About us</h1>

        <!--Bread Crumb -->
        <div class="breadcrumb-column">
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>

    </div>
</section>

<!--about-section-->
<section class="about-section">
    <figure class="floated-image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
        <img src="images/resource/about-us-1.jpg" alt="" />
    </figure>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <br>
                    <figure class="image-box wow slideInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                            src="images/client_head.png" alt="" /></figure>
                </div>

                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="inner-content">
                        <div class="text">
                            <p style="text-align:justify">My self <b>Shri. Dipak Vasant Tupe, M.D. Gau Urja Health
                                    Services Pvt. Ltd,</b> Basically I’m from farmers family!In 2011-12, As I heard
                                about The first Real hero of “Swatantra Bharata” The great devotee Shri. Rajivji Dixit!
                                Suddenly my life had taken drastatic diversion to the field of Health awareness!In
                                between I lost my father in Cancer & wife in Lukemia, I realized the importance of the
                                words by RAJIV DIXIT! The side-effects of chemical farming, A1 milk, adultrated food
                                etc……</p>
                            <p style="text-align:justify">So I was continuously thinking about – What is the basic need
                                of todays era? Is it food – clothes – Shelter or money? No, not at all, it is the one &
                                only one chemical free fooding! Because other than this people are not going to live
                                long? Then what’s the use of all other things?</p>
                            But in todays days, customer needs all these things in pure form, they are ready to pay
                            “Value for Money”, but there are very least sources who are providing this!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p style="text-align:justify">While woking on Deshi Gau’s Panchgavya from 2013-14, we realized that, the
                    only Indian breed Gau has a solution for today’s each and every problem of Health, Environment,
                    Economics, Agriculture etc. The only “GAU URJA” i.e. The unique purest form of energy! </p>
                <p style="text-align:justify">Hence we formed this company which acts as a CATALYST between farmer and
                    consumer, We are forming a system which helps to unite these two very much needy ends, where farmer
                    needs support in selling his chemical free agriculture products while consumer needs the same things
                    in pure form.</p> <br><br><br>
            </div>
        </div>
    </div>
</section>

<div class="auto-container">
    <h2 class="vision">Mission Vision</h2>
    <div class="row equal-cols">
        <?php
        $sql4 = "select * from tbl_vision_mission order by id asc ";
        $stmt4 = $conn->query($sql4);
        $users4 = $stmt4->fetchAll();
        foreach ($users4 as $row4) { ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="card-div thumbnail">
                <img src="admin/<?php echo $row4['mission_images']; ?>" alt="Nature" style="height:150px;width:560px">
                <h6 class="card-title"><?php echo $row4['title']; ?></h6>
                <p class="card-body"> <?php echo $row4['description']; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include "footer.php"; ?>