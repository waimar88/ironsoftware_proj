<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Test Design Application - <?php echo $title;?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  	<link href="<?php echo base_url();?>assets/img/iron-software-favicon.png" rel="icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gotham:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>

	<link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>
 
<body>

	<header id="header" class="fixed-top">
	    <div class="container d-flex align-items-center">
			<a href="<?php echo site_url("index"); ?>" class="logo">
				<img src="<?php echo base_url();?>assets/img/logo.png" alt="" class="img-fluid">
			</a>

	      	<?php 
			$segVal = $this->uri->segment(1);
			$actIndex = ""; $actAbout = ""; $actContact = ""; $actProduct = "";
			$actPdf = ""; $actBarcode = "";
			    if ($segVal == "index") 
			    {
			        $actIndex = "active"; $actAbout = ""; $actContact = ""; $actProduct = "";
			        $actPdf = ""; $actBarcode = "";
			    }
			  	else if ($segVal == "about") {
			  		$actIndex = ""; $actAbout = "active"; $actContact = ""; $actProduct = "";
			  		$actPdf = ""; $actBarcode = "";
			  	}
			  	else if ($segVal == "contact") {
			  		$actIndex = ""; $actAbout = ""; $actContact = "active"; $actProduct = "";
			  		$actPdf = ""; $actBarcode = "";
			  	}			  	
			  	else {
			  		if ($this->uri->segment(2) == "pdf") {
			  			$actPdf = "active"; $actBarcode = "";
			  		} 
			  		else if ($this->uri->segment(2) == "barcode") {
			  			$actPdf = "active"; $actBarcode = "";
			  		} 
			  		else {
			  			$actPdf = ""; $actBarcode = "";
			  		}
			  		$actIndex = ""; $actAbout = ""; $actContact = ""; $actProduct = "active";
			  	}
			?>

	      <nav id="navbar" class="navbar">
	        <ul>
	          	<li class="dropdown">
					<a href="<?php echo site_url("products"); ?>" class="<?=$actProduct?>">
						<span>PRODUCTS</span> <i class="bi bi-chevron-down"></i>
					</a>
					<ul>
						<li>
							<a class="nav-link scrollto <?=$actPdf?>" href="<?php echo site_url("products/pdf"); ?>">
								IRONPDF For .NET
							</a>
						</li>
						<li>
							<a class="nav-link scrollto <?=$actBarcode?>" href="<?php echo site_url("products/barcode"); ?>">
								IRONBARCODE For .NET
							</a>
						</li>            
					</ul>
				</li>
	          	<li>
	          		<a class="nav-link scrollto <?=$actAbout?>" href="<?php echo site_url("about"); ?>">
	          		ABOUT US</a>
          		</li>
	          	<li>
	          		<a class="nav-link scrollto <?=$actContact?>" href="<?php echo site_url("contact"); ?>">CONTACT</a>
	          	</li>
	        </ul>
	        <i class="bi bi-list mobile-nav-toggle"></i>
	      </nav>
	    </div>
  	</header>

  	<section id="hero" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
					<div class="logo-CHL">
						<img class="item-1-8wg" src="<?php echo base_url();?>assets/img/-krz.png"/>
						<img class="vector-q5Q" src="<?php echo base_url();?>assets/img/vector.png"/>
						<img class="vector-iez" src="<?php echo base_url();?>assets/img/vector-HYi.png"/>
						<p class="net-RpJ">for C++</p>
					</div>
					<h1>Building on the success of IronPDF for .NET</h1>
					<p class="the-net-library-for-your-office-Zp2">
						<span class="the-net-library-for-your-office-Zp2-sub-0">
							Beta Software Program
						</span>
						<span class="the-net-library-for-your-office-Zp2-sub-1">              
							<br/>
							IronPDF for C++
						</span>
					</p>
					<p class="item-3-eDC">Coming soon</p>         
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img right-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?php echo base_url();?>assets/img/image.png" class="img-fluid" alt="">
				</div> 
			</div>        
		</div>
	</section>

	<?php echo $contents;?>	

	<footer id="footer">
	    <div class="footer-newsletter">
	      <div class="container">
	        <div class="row justify-content-center">
	          <div class="col-lg-6">
	            <h3>Sign up to our <span class="c-text-color">Beta Program</span></h3>
	            <form action="" method="post">
	              <input type="email" name="email" class="email-input" placeholder="Enter email address">
	              <input type="submit" value="Sign up now">
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
  	</footer>

  	<div id="preloader"></div>
  	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>

	<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>
