<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Dealer Details</title>
	<meta name="description" content="Automarket">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/uniform.default.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="js/vendor/jquery-1.8.2.min.js"></script>
	<script src="js/vendor/selectivizr.js"></script>
	<script src="js/vendor/PIE.js"></script>
	<script src="js/plugins/jquery.placeholder.min.js"></script>
	<script src="js/plugins/jquery.uniform.min.js"></script>
	<script src="js/plugins/jquery.flexslider-min.js"></script>
	<script src="js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/plugins/jquery.prettyPhoto.js"></script>
	<script src="js/plugins/jquery.countdown.js"></script>
	
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header>
	<div class="content-holder">
		<div class="layer-one">
			<div class="page-titles">
				<h1><a href="index.html">Automarket</a></h1>
				<p class="sub-title">This is a title</p>
			</div>
				
			<div class="dealer-login">
				<a href="dealer-details.html" class="dealer-name">Dealer Name</a>
				<a href="#" class="sign-out">Sign Out</a>
			</div>
				
			<div class="header-buttons">
				<a href="add-vehicle.html" class="add-an-offer rounded-link-box"><span class="box-content"><strong class="plus-sign">+</strong>&nbsp;Add An Offer</span></a>
				<div class="pages-top rounded-link-box">
					<a href="#" class="box-content">Pages</a>
					<ul>
						
                        <li><a href="index.html">Home page</a></li>
                        
                        <li><a href="add-vehicle.html">Add an offer</a></li>
                        
                        <li><a href="log-in.html">Log in page</a></li>
                        
                        <li><a href="car-list.html">Car list</a>
							<ul>
								<li><a href="car-details.html">Car details</a><li>														
							</ul>
						</li>
						
                        <li><a href="blog-overview.html">Blog</a>
							<ul>
								<li><a href="blog-post.html">Blog post</a><li>														
							</ul>
						</li>
						<li><a href="dealer-list.html">Dealer list</a>
                        <ul>
								<li><a href="dealer-details.html">Dealer details</a><li>														
							</ul>
						</li>
                        
						<li><a href="insurance.html">Insurance</a></li>
						
                        <li><a href="under-construction.html">Under construction</a></li>
                        
                        <li><a href="contact-us.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</div><!--.layer-one-->
			
		<div class="layer-two">
			<nav>
				<ul>
					<li class="nav-cars current-item"><a href="car-list.html">Cars</a></li>
					<li class="nav-bike"><a href="#">Bikes</a></li>
					<li class="nav-truck"><a href="#">Trucks</a></li>
					<li class="nav-parts"><a href="#">Parts</a></li>
				</ul>
			</nav>
				
			<form id="header-search" action="car-list.html" method="post">
				<input type="text" name="quick_search" onfocus="if(this.value == 'Quick Search, Ex: Mercedes-Benz E220') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Quick Search, Ex: Mercedes-Benz E220'; }" value="Quick Search, Ex: Mercedes-Benz E220" class="quick-search" >
				<select name="type-option">
					<option value="cars" selected="selected">Cars</option>
					<option value="bikes">Bikes</option>
					<option value="trucks">Trucks</option>
					<option value="Parts">Parts</option>
				</select>
				<div class="search-submit">
					<input type="submit" value="Search"/>
				</div>
			</form>
		</div><!--.layer-two-->
	</div>
</header>
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Dealer</span> name here</h2>
					<p class="page-location">
						<a href="#">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="dealer-list.html">Dealers</a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Dealer name</a>
					</p>
				</div>
			
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#">Search vehicles from dealers</a></li>
				</ul>
			</nav>
		</div>
	</section><!--#car-pagination -->
		
	<section id="dealer-details">
		<div class="content-holder">
			<div class="full-width">
			
				<div class="one-half col-241">
					<div id="dealer-about" class="grey-corner-box standard-text-content">
						<h3><span class="bold">About</span> us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum, nisi id vulputate ullamcorper, tellus libero venenatis neque, 
						in egestas enim lorem ut felis. Suspendisse potenti. Donec nec sapien mauris, vitae aliquam quam. Donec aliquam tortor felis. Sed acsapien</p>
						<br />
						<h3><span class="bold">Contact</span> details</h3>
						<ul class="icon-list">
							<li class="phone"><span>0040 742 016 756<br />0040 742 756 016</span></li>
							<li class="address"><span>Berlin, Germany, nr. 250330</span></li>
							<li class="e-mail"><span><a href="#">office@automarket.com</a></span></li>
							<li class="website"><span><a href="#"> http://www.automarket.com</a></span></li>
						</ul>
						<h3><span class="bold">Schedule</span></h3>
						<ul class="schedule-list">
							<li><span class="day">Monday</span><span class="hours">09:00-18:00</span></li>
							<li><span class="day">Tuesday</span><span class="hours">09:00-18:00</span></li>
							<li><span class="day">Wednesday</span><span class="hours">09:00-18:00</span></li>
							<li><span class="day">Thursday</span><span class="hours">09:00-18:00</span></li>
							<li><span class="day">Friday</span><span class="hours">09:00-18:00</span></li>
							<li><span class="day">Saturday</span><span class="hours">10:00-14:00</span></li>
							<li><span class="day">Sunday</span><span class="hours">Closed</span></li>
						
						</ul>
						
					
					</div>
					
				</div>
				
				<div class="one-half col-701 results-list">
					<div id="best-offer">
						<a href="car-details.html">
							<span class="best-offer-tag"><span class="bold">Best</span> offer</span>
							<img src="images/best_offer.jpg" alt="Best Offer" />							
							<div class="slide-info">
								<h3>Vehicle Name</h3>
								<span class="price-tag">51 990 Euro</span>								
							</div>
						
						</a>					
					</div>
					
					
					<div class="layer-one">
					
						<div class="offers-info">
							<span class="label">Offers:</span><span class="offer-count">24</span>
						</div>
						
						
						<div class="pagination">
							<a href="car-list.html" class="last-button">View all offers</a>
						</div>
					</div>
					
					<div class="layer-two">
						
						<div id="cars-list" class="info-list">
							<ul class="detail-list">
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
										<span class="v-sign">V</span>
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
										<span class="v-sign">V</span>
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="car-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/mercedes-thumb.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="car-details.html" class="car-title">Vehicle Name</a></h3>
											<span class="price-tag">4980 Euro</span>
										</div>
										<ul class="item-specs layer-two">
											<li>Registration: 2002</li>
											<li>3.0 Diesel</li>
											<li>230 HP</li>
											<li>Body: Coupe</li>
											<li>120.000</li>											
										</ul>
										<div class="layer-three">
											<span class="location-car">Location: Berlin, Germany</span>
											<a href="car-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
							</ul>
							
						</div>
					
					</div><!--.layer-two-->
				
					<div class="layer-three">
						<div class="pagination">
							<a href="#" class="current-item"><span>1</span></a>
							<a href="#"><span>2</span></a>
							<a href="#"><span>3</span></a>
							<span class="space-between">...</span>
							<a href="#"><span>8</span></a>
							<a href="#" class="next-button">Next</a>
						</div>											
					</div>
				</div>
			
		
			</div>
		</div>
	</section><!--#search-list-->
	
</div><!--#page-content-->
	
<footer>
		<div class="layer-one">
			<div class="content-holder">
				<nav>
					<ul>
						<li><a href="#"><span class="bold">About</span> us</a>
							<ul>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Our Partners</a></li>
								<li><a href="#">Advertising Online</a></li>
								<li><a href="#">Site Map</a></li>
							</ul>
						</li>
						<li><a href="#"><span class="bold">Need</span> Help?</a>
							<ul>
								<li><a href="#">How do I add an offer?</a></li>
								<li><a href="#">How do I find a vehicle</a></li>
								<li><a href="#">Price list</a></li>
								<li><a href="#">Office for car dealers</a></li>
							</ul>
						</li>
						<li><a href="#"><span class="bold">User</span> area</a>
							<ul>
								<li><a href="#">Add an offer</a></li>
								<li><a href="#">Register dealder</a></li>
								<li><a href="#">Login Dealer</a></li>
								<li><a href="#">News</a></li>
							</ul>
						</li>
					</ul>
				</nav>
					
				<div class="find-us-here col-amount">
					<h3><span class="bold">Find</span> us here</h3>
					<ul class="social-list">
						<li class="social-facebook"><a href="#">Facebook</a></li>
						<li class="social-twitter"><a href="#">Twitter</a></li>
						<li class="social-google"><a href="#">Google</a></li>
					</ul>
					<p class="note">Become our fan, and we will love you forever</p>		
				</div>
			</div>
		</div><!--.layer-one-->
			
		<div class="layer-two">
			<div class="content-holder">
				<p class="copyright">&copy; 2012 Automarket. All Rights Reserved</p>
				<p class="webdesign-author">Webdesign by <a href="#">ClaPat Studio</a>
			</div>
		</div><!--.layer-two-->
</footer>

</body>
</html>
