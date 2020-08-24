<?php include"header.php" ?>
	<style>
		/* Content */
		.port .content {
			background-color: white;
			padding: 10px;
		}

		/* The "show" class is added to the filtered elements */
		.port .show {
		  display: block;
		}

		/* Style the buttons */
		.port .btn {
		  border: none;
		  outline: none;
		  padding: 12px 16px;
		  background-color: white;
		  cursor: pointer;
		}

		.port .btn:hover {
		  background-color: #ddd;
		}

		.port .btn.active {
		  background-color: #666;
		  color: white;
		}
	</style>

	 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>Products </h1>
            
            <!--Bread Crumb -->
            <div class="breadcrumb-column">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Products</li>
                </ul>
            </div>
            
        </div>
    </section>
    
	<section class="intro-style-one" style="margin-bottom:100px;">
    	<div class="auto-container">
        	<div class="row clearfix">
				<div class="sec-title" style="margin-bottom: 20px;">
					<center><h2>Gau Urja Products</h2></center>
				</div> 
			</div>
			
			<div class="col-sm-12">
				<h3 style="text-align:center">The quality and necessity of Panchgavya is well known to everybody, but the best of the best quality of Panchgavya can be availed if and only if gaumata is happy with environment, grazing in open land, feeded with natural and chemical free fodder.</h3>
					<br>
			</div>
			
			<center><div class="title" style="font-size:22px;">
					<a href="products_new.php#all" class="btn btn-danger" data-filter=".portfolio" onclick="web('all')">Gau Urja All products </a>
					
					<a href="products_new.php#ark"data-filter=".ark"  class="btn btn-danger" onclick="web('ark')">Gomutra Ark</a>
					<a href="products_new.php#Ghanavati"data-filter=".Ghanavati"  class="btn btn-danger" onclick="web('Ghanavati')">Panchgavya Ghanavati</a>
					<a href="products_new.php#Ghrita" data-filter=".Ghrita" class="btn btn-danger" onclick="web('Ghrita')">Ghrita</a>
					<a href="products_new.php#Ghrita" data-filter="Other Products" class="btn btn-danger" onclick="web('Other')">Other Products</a>
					<a href="products_new.php#Agriculture" data-filter=".Agriculture" class="btn btn-danger" onclick="web('Agriculture')">Gau Urja Agriculture Products</a>
					
			</div><br><br><br></center>
			<div class="row">
				<div id="all">
					<div class="col-sm-4">	
						<div class="video-player">
							<img src="products.png"  alt="Reponsive Website" style="width:100%">
							<h4 class="text-center">Chandrama</h4>
						</div>
					</div>
				</div>
				<div id="ark">
					<div class="col-sm-4">
							<img src="product2.jpg"  alt="Reponsive Website" style="width:100%">
							<h4 class="text-center">Gomutra Ark</h4>
					</div>
				
				</div>
				<div id="Ghanavati">
					<div class="col-sm-4">
						<img src="product3.jpg"  alt="Reponsive Website" style="width:100%">
						<h4 class="text-center">Panchgavya Ghanavati</h4>
					</div>
				</div>
		
			</div>	
		</div>											
	</section>
<?php include"footer.php" ?>



<script>
		
		
		function web(id)
		{		
			
			
				if(id=='all'){
					$('#all').show();
					$('#Ghanavati').show();
					$('#ark').show();
					
				}
				
				if(id=='ark'){
					
					$('#Ghanavati').hide();
					$('#ark').show();
					$('#all').hide();
				
				}
				if(id=='Ghanavati'){
					
					$('#ark').hide();
					$('#Ghanavati').show();
					$('#all').hide();
				}
		}
	</script>

