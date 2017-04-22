<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Dealer List</title>
	<meta name="description" content="Automarket">

	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/uniform.default.css">
	<link rel="stylesheet" href="../css/prettyPhoto.css">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/jquery-1.8.2.min.js"></script>
	<script src="../js/vendor/selectivizr.js"></script>
	<script src="../js/vendor/PIE.js"></script>
	<script src="../js/plugins/jquery.placeholder.min.js"></script>
	<script src="../js/plugins/jquery.uniform.min.js"></script>
	<script src="../js/plugins/jquery.flexslider-min.js"></script>
	<script src="../js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script src="../http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="../js/plugins/jquery.prettyPhoto.js"></script>
	<script src="../js/plugins/jquery.countdown.js"></script>
	
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header>
	<div class="content-holder">
		<div class="layer-one">
			<div class="page-titles">
				<h1><a href="./index.php">Automarket</a></h1>
				<p class="sub-title">This is a title</p>
			</div>
				
			<div class="dealer-login">
				<a href="dealer-details.php" class="dealer-name">Dealer Name</a>
				<a href="#" class="sign-out">Sign Out</a>
			</div>
				
			<div class="header-buttons">
				<a href="./add-vehicle.php" class="add-an-offer rounded-link-box"><span class="box-content"><strong class="plus-sign">+</strong>&nbsp;Add An Offer</span></a>
				<div class="pages-top rounded-link-box">
					<a href="#" class="box-content">Pages</a>
					<ul>
						
                        <li><a href="./index.php">Home page</a></li>
                        
                        <li><a href="./add-vehicle.php">Add an offer</a></li>
                        
                        <li><a href="./log-in.php">Log in page</a></li>
                        
                        <li><a href="./car-list.php">Car list</a>
							<ul>
								<li><a href="./car-details.php">Car details</a><li>														
							</ul>
						</li>
						
                        <li><a href="./blog-overview.php">Blog</a>
							<ul>
								<li><a href="./blog-post.php">Blog post</a><li>														
							</ul>
						</li>
						<li><a href="./dealer-list.php">Dealer list</a>
                        <ul>
								<li><a href="./dealer-details.php">Dealer details</a><li>														
							</ul>
						</li>
                        
						<li><a href="./insurance.php">Insurance</a></li>
						
                        <li><a href="./under-construction.php">Under construction</a></li>
                        
                        <li><a href="./contact-us.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div><!--.layer-one-->
			
		<div class="layer-two">
			<nav>
				<ul>
					<li class="nav-cars current-item"><a href="./car-list.php">Cars</a></li>
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
					<h2><span class="bold">Dealers</span> ( 2.100 results )</h2>
					<p class="page-location">
						<a href="#">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Dealers</a>
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
		
	<section id="search-list">
		<div class="content-holder">
			<div class="full-width">
			
				<div class="one-half col-241 search-area">
					<form id="search-filters">
						<fieldset class="grey-corner-box">
							<legend><span class="bold">Search</span> filters</legend>
							<ul>
								<li class="radio-buttons">
									<div>
										<input type="radio" name="type-company" id="radio-dealers" />
										<label for="radio-dealers">Dealers</label>
									</div>
									<div>
										<input type="radio" name="type-company" id="radio-companies" />
										<label for="radio-companies">Leasing Companies</label>
									</div>
								</li>
								<li>
									<label for="dealer-name">Name:</label>
									<input type="text" class="default-input" id="dealer-name" name="dealer_name" />
								</li>
								<li>
									<div class="search-button">
										<input type="submit" value="Search" />
									</div>
								</li>
							</ul>
							
							<h3><span class="bold">State / Country</span></h3>
							<ul class="checkboxes">
								<li><input type="checkbox" id="state_alabama" value="checkbox_alabama" /><label for="state_alabama">Alabama</label></li>
								<li><input type="checkbox" id="state_alaska" value="checkbox_alaska" /><label for="state_alaska">Alaska</label></li>
								<li><input type="checkbox" id="state_arizona" value="checkbox_arizona" /><label for="state_arizona">Arizona</label></li>
								<li><input type="checkbox" id="state_arkansas" value="checkbox_arkansas" /><label for="state_arkansas">Arkansas</label></li>
								<li><input type="checkbox" id="state_california" value="checkbox_california" /><label for="state_california">California</label></li>
								<li><input type="checkbox" id="state_connecticut" value="checkbox_connecticut" /><label for="state_connecticut">Connecticut</label></li>
							</ul>
							<a href="#" class="view-all-link">View all</a>
							<ul class="checkboxes view-all-content">
								<li><input type="checkbox" id="state_delaware" value="checkbox_delaware" /><label for="state_delaware">Delaware</label></li>
								<li><input type="checkbox" id="state_florida" value="checkbox_florida" /><label for="state_florida">Florida</label></li>
								<li><input type="checkbox" id="state_georgia" value="checkbox_georgia" /><label for="state_georgia">Georgia</label></li>
								<li><input type="checkbox" id="state_hawaii" value="checkbox_hawaii" /><label for="state_hawaii">Hawaii</label></li>
								<li><input type="checkbox" id="state_idaho" value="checkbox_idaho" /><label for="state_idaho">Idaho</label></li>
								<li><input type="checkbox" id="state_illinois" value="checkbox_illinois" /><label for="state_illinois">Illinois</label></li>
							</ul>
							
							
						</fieldset>
						
						<fieldset id="loan-calculator" class="grey-corner-box">
							<legend><span class="bold">Loan</span> calculator</legend>
							<ul>
								<li>
									<label for="loan-amount">Loan Amount:</label>
									<select id="loan-amount">
										<option value="0" selected="selected">0.00 Euro</option>
										<option value="1000">1000.00 Euro</option>
										<option value="5000">5000.00 Euro</option>
										<option value="10000">10000.00 Euro</option>
									</select>							
								</li>
								<li>
									<label for="down-payment">Down Payment:</label>
									<select id="down-payment">
										<option value="0" selected="selected">0.00 Euro</option>
										<option value="1000">1000.00 Euro</option>
										<option value="5000">5000.00 Euro</option>
										<option value="10000">10000.00 Euro</option>
									</select>							
								</li>
								<li>
									<label for="annual-rate">Annual Rate:</label>
									<select id="annual-rate">
										<option value="0" selected="selected">0.00 %</option>
										<option value="0.1">10.00 %</option>
										<option value="0.2">20.00 %</option>
										<option value="0.3">30.00 %</option>
									</select>							
								</li>
								<li>
									<label for="loan-period">Loan Period:</label>
									<select id="loan-period">
										<option value="3" selected="selected">3 Years</option>
										<option value="1">1 Year</option>
										<option value="2">2 Years</option>
										<option value="3">4 Years</option>
									</select>
								</li>
								<li>
									<div class="submit-button"><input type="submit" value="calculate" /></div>
								</li>
								<li class="rate-value">
									<p>Rate value: <span class="amount-value">0,00</span></p>
								</li>
							</ul>
							
							
						</fieldset>
					</form>
				</div>
				
				<div class="one-half col-701 results-list">
					<div class="sort-view layer-one">
					
						<div id="sort-by">
							<select name="sort-by">
								<option selected="selected">Sort by</option>
								<option>Date</option>
								<option>Price</option>
								<option>Views</option>
							</select>
						</div>
						<div id="view-on-page">
							<select name="view-on-page">
								<option selected="selected">View amount</option>
								<option>10</option>
								<option>30</option>
								<option>30</option>
							</select>
						</div>	
						
						<div class="pagination">
							<a href="#" class="current-item"><span>1</span></a>
							<a href="#"><span>2</span></a>
							<a href="#"><span>3</span></a>
							<span class="space-between">...</span>
							<a href="#"><span>8</span></a>
							<a href="#" class="next-button">Next</a>
						</div>
					</div>
					
					<div class="layer-two">
						
						<div id="dealer-list" class="info-list">
							<ul class="detail-list">
								<li>
									<a href="./dealer-details.php" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="./images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
										</div>
									</div>
								</li>
								<li>
									<a href="dealer-details.html" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="images/default_thumb_140_105.jpg" alt="Picture" />
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="dealer-details.html">Dealer Name Here</a></h3>
											<span class="amount">183 Offers</span>
										</div>
										<ul class="item-specs layer-two">
											<li>314 Columbus Ave, San Francisco, CA 94133</li>
										</ul>
										<div class="layer-three">
											<a href="#" class="view-on-map">View on map</a>
											<span class="phone-number">(123) 456-78910</span>
											<a href="dealer-details.html" class="details-link">View details</a>
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
