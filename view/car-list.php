<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Car List</title>
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
					<h2><span class="bold">Mercedes-Benz</span> CLS 320</h2>
					<p class="page-location">
						<a href="index.html">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="car-list.html">Cars</a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Mercedes-Benz</a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Mercedes-Benz CLS 320</a>
					</p>
				</div>
			
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#">All Cars</a></li>
					<li><a href="#">New Cars</a></li>
					<li><a href="#">Used Cars</a></li>
				</ul>
			</nav>
			
			<div class="view-select-tabs">
				<a href="#" id="list-view"><span>List View</span></a>
				<a href="#" id="grid-view" class="current"><span>Grid View</span></a>
			</div>
		</div>
	</section><!--#car-pagination -->
		
	<section id="search-list">
		<div class="content-holder">
			<div class="full-width">
			
				<div class="one-half col-241 search-area">
					<form id="search-filters" action="#">
						<fieldset class="grey-corner-box">
							<legend><span class="bold">Search</span> filters</legend>
							<ul>
								<li>
									<label for="manufacturer">Manufacturer:</label>
									<select id="manufacturer">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="model">Model:</label>
									<select id="model">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li class="select-two">
									<div>
										<label for="min-price">Min Price:</label>
										<select id="min-price">
											<option selected="selected">Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div>
										<label for="max-price">Max Price:</label>
										<select id="max-price">
											<option selected="selected">Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>					
									</div>
								</li>
								<li>
									<label for="engine">Engine:</label>
									<select id="engine">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="transmission">Transmission:</label>
									<select id="transmission">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="fuel-type">Fuel type:</label>
									<select id="fuel-type">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="body-type">Body type:</label>
									<select id="body-type">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="color">Color:</label>
									<select id="color">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<label for="kilometers-one">Kilometers:</label>
									<select id="kilometers-one">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li class="select-two">
									<div>
										<label for="min-year">Min Year:</label>
										<select id="min-year">
											<option selected="selected">Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>
									</div>
									<div>
										<label for="max-year">Max Year:</label>
										<select id="max-year">
											<option selected="selected">Select</option>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option3">Option 3</option>
										</select>					
									</div>
								</li>
								<li>
									<label for="kilometers-two">Kilometers:</label>
									<select id="kilometers-two">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
									</select>
								</li>
								<li>
									<!-- add this to general styles -->
									<div class="search-button">
										<input type="submit" value="Search" />
									</div>
								</li>
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
				
				<div class="results-list one-half col-701">
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
								<option>20</option>
								<option>30</option>
							</select>
						</div>			
						
						<div class="pagination">
							<a href="#" class="current-item"><span>1</span></a>
							<a href="#"><span>2</span></a>
							<a href="#"><span>3</span></a>
							<span class="space-between">...</span>
							<a href="#"><span>8</span></a>
							<a href="#" class="last-button">Next</a>
						</div>
					</div>
					
					<div class="layer-two">
						
						<div id="cars-list" class="grid-view list-content">
							<ul class="offer-small">
								
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Best deal car post -->
								<li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
										<span class="v-sign">V</span>
										<span class='dealer-data'>Vehicle Dealer</span>
									</a>
								</li>
								<!--/Best deal car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Best deal car post -->
								<li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
										<span class="v-sign">V</span>
										<span class='dealer-data'>Vehicle Dealer</span>
									</a>
								</li>
								<!--/Best deal car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Best deal car post -->
								<li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
										<span class="v-sign">V</span>
										<span class='dealer-data'>Vehicle Dealer</span>
									</a>
								</li>
								<!--/Best deal car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Best deal car post -->
								<li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
										<span class="v-sign">V</span>
										<span class='dealer-data'>Vehicle Dealer</span>
									</a>
								</li>
								<!--/Best deal car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Best deal car post -->
								<li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
										<span class="v-sign">V</span>
										<span class='dealer-data'>Vehicle Dealer</span>
									</a>
								</li>
								<!--/Best deal car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
                                <!-- Car post -->
                                <li>
									<a href="car-details.html" class="item-link">
										<img src="images/mercedes-thumb.jpg" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title">Mercedes-Benz CLS</h4>
											<span class="price-tag">54980 Euro</span>
											<span class="location-car">Location: Berlin, Germany</span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration 2002</li>
												<li>3.0 Diesel</li>
												<li>230 HP</li>
												<li>Body Coupe</li>
												<li>120.000 KM</li>
											</ul>
										</div>
									</a>
								</li>
                                <!--/Car post -->
                                
								
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
							<a href="#" class="last-button">Next</a>
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
