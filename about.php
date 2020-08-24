<?php include "header.php" ?>

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
                        <!--
                            <ul class="list-style-one">
                                <li>We provide excillence service to your needs</li>
                                <li>we have expereince wokrker</li>
                                <li>Get 17 times best garden care co awarded </li>
                            </ul>
							-->
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
<div class="container-background container">
    <h2 class="vision">Mission Vision</h2>
    <div class="row equal-cols">
        <?php
        include 'include/config.php';
        //$id = $_GET['id'];
        $sql4 = "select * from tbl_vision_mission order by id asc ";
        $stmt4 = $conn->query($sql4);
        $users4 = $stmt4->fetchAll();
        foreach ($users4 as $row4) { ?>
        <div class="col-md-6">
            <div class="card-div thumbnail">
                <div>
                    <h6 class="card-title"><?php echo $row4['title']; ?></h6>
                </div>
                <div>
                    <p class="card-body"> <?php echo $row4['description']; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- <section class="two-col-fluid">
    	<div class="outer-container clearfix">
        	
            <div class="image-column" style="background-image:url(images/background/image-3.jpg);"><figure class="image-box"><img src="images/background/image-3.jpg" alt=""></figure></div>
           
            <div class="content-column content-column-two">
            	<div class="inner-box clearfix">
                	<div class="sec-title-two">
                    	<h2>BRINGING <span>GAUKRANTI ? </span></h2>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<div class="row">
                    	<h3><span>1.</span>Gau Social</h3>
                        <div class="text"> A platform to propagate the importance of Gau Mata and her great value to mankind.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<div class="row">
                    	<h3><span>2.</span>Gau Products</h3>
                        <div class="text"> A platform to enable Gaushalas to sell Gau products and let end users to easily buy quality Gau products</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<div class="row">
                    	<h3><span>3.</span>Gau Vigyan </h3>
                        <div class="text">A platform to recognize and promote innovations using Gau Mutra and Gobara</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<div class="row">
                    	<h3><span>4.</span>Gau Therapy</h3>
                        <div class="text">A platform for Panchgavya based health care initiative</div>
                        </div>
                    </div>
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="team-section team-section-two">
    	<div class="auto-container">
        	<div class="sec-title-two">
            	<div class="clearfix">
            		<div class="pull-left">
                		<h2>THE  <span>INSPIRATION</span></h2>
                    </div>
                	
                </div>
            </div>
        
        	<div class="row clearfix">
            	
            	<div class="col-md-4 col-sm-4 col-xs-12 column team-member-one">
				
					<a><img src="images/about_inspreation.jpg" alt="INSPIRATION" /></a>
				
					
                </div>
                
                
                <div class="col-md-8 col-sm-8 col-xs-12 column team-member-one">
					<p style="text-align:justify">We were living our lives peacefully in our families busy with day today family chores. But, there is a meaning to every ones life and we thought, that was missing in ours. Then, the destiny took us to a saint from Himalaya, pujya shri Gopal Maniji Maharaj speaking with a thunderous voice about greatness of Gau Mata.</p>
					<p style="text-align:justify">The place Gau Mata held in our lives was more than that of a family member. She was regarded as a mother nurturing and nourishing her sons and daughters with milk, protecting them from diseases with her Gau mutra and making land fertile to grow grains with her Gobara. Her Oxen ploughing the fields and being an integral part of day to day chores of life like transportation and irrigation. The first roti in every househod was meant for her called 'GauGrass'. No ceremony was considered complete without her, from naming ceremony to marrige ceremony or last rites. She was always referred to as GauDhan.</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="call-to-acton-two" style="background-image:url(images/background/call-action-two.jpg);">
    	<div class="auto-container">
        	<div class="text-center">
            	<div class="inner">
                    <h2>Need someone to take care your garden & lawn?
                    Just inform us and sited with relax!!</h2>
                    <a class="btn-style-four theme-btn" href="#">See service</a>
                    <a class="btn-style-five theme-btn" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
   
    <section class="testimonial-style">
    	<div class="auto-container">
        
            <div class="sec-title-two"><h2>Client <span>Feedback</span></h2></div>

           
            <div class="carousel-outer">
                <div class="testimonail-carousel">

                   
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
            </div>
        </div>
    </section>
    
   
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
    </section> -->



<?php include "footer.php"; ?>