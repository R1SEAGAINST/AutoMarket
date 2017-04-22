<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Home</title>
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
	<section id="car-advertisement">
		<div class="content-holder">
			<div class="slide-part-large">
				<div class="visible-image">
					<h2><span class="bold">Best</span> Offer</h2>
					<div id="slides">
						<ul class="slides">
							<li>
								<a href="car-details.html">
									<img src="images/mercedes_picture.jpg" alt="Slide" />
									<div class="slide-info">
										<h3>Mercedes-Benz CLS 320</h3>
										<span class="price-tag">54980 Euro</span>								
									</div>
								</a>
							</li>
							<li>
								<a href="car-details.html">
									<img src="images/mercedes_picture.jpg" alt="Slide" />
									<div class="slide-info">
										<h3>Mercedes-Benz CLS 630</h3>
										<span class="price-tag">54980 Euro</span>								
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
				
			<div class="latest-offers">
				<div class="headline">
					<h2><span class="bold">Latest </span>Offers</h2>
					<a href="#" class="scroll-up scroll-icon"><span>Up</span></a>
					<a href="#" class="scroll-down scroll-icon"><span>Down</span></a>
				</div>
				
				<ul class="offer-list offer-small list-content">
					<li>
						<a href="car-details.html">
							<img src="images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz 1</h4>
								<span class="price-tag">54980 Euro</span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
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
					</li><!--/end of item 1-->
						
					<li>
						<a href="car-details.html">
							<img src="images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz 2</h4>
								<span class="price-tag">54980 Euro</span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
									<li>Registration 2002</li>
									<li>3.0 Diesel</li>
									<li>230 HP</li>
									<li>Body Coupe</li>
									<li>120.000 KM</li>							
								</ul>
							</div>
						</a>
					</li><!--/end of item 2-->
					
					<li>
						<a href="car-details.html">
							<img src="images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz 3</h4>
								<span class="price-tag">54980 Euro</span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
									<li>Registration 2002</li>
									<li>3.0 Diesel</li>
									<li>230 HP</li>
									<li>Body Coupe</li>
									<li>120.000 KM</li>							
								</ul>
							</div>
						</a>
					</li><!--/end of item 3-->
					
					<li>
						<a href="car-details.html">
							<img src="images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz 4</h4>
								<span class="price-tag">54980 Euro</span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
									<li>Registration 2002</li>
									<li>3.0 Diesel</li>
									<li>230 HP</li>
									<li>Body Coupe</li>
									<li>120.000 KM</li>							
								</ul>
							</div>
						</a>
					</li><!--/end of item 4-->
					
					<li>
						<a href="car-details.html">
							<img src="images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz 5</h4>
								<span class="price-tag">54980 Euro</span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
									<li>Registration 2002</li>
									<li>3.0 Diesel</li>
									<li>230 HP</li>
									<li>Body Coupe</li>
									<li>120.000 KM</li>							
								</ul>
							</div>
						</a>
					</li><!--/end of item 5-->
				</ul>
				
				
					
			</div><!--.latest-offers-->
		</div>
			
	</section><!--#car-advertisement-->
		
	<section id="car-shortcuts">
		<div class="content-holder">
		
			<div class="full-width banners-full-width">
				<div class="search-banner banner-medium one-half">
					<a href="car-list.html" class="icon-magnify icon-banner">Magnify</a>
					<div class="banner-title">
						<h3><span class="bold">Looking</span> for a car?</h3>
						<p class="description">1.000 new offers every day. 35.000 offers on site</p>
					</div>
					<a href="car-list.html" class="banner-link"><span>Search</span></a>
				</div>
					
				<div class="sell-banner banner-medium one-half">
					<a href="add-vehicle.html" class="icon-dollar icon-banner">Dollar</a>
					<div class="banner-title">
						<h3><span class="bold">Want</span> to sell a car?</h3>
						<p class="description">200.000 visitors every day. Add your offer now!</p>
					</div>
					<a href="add-vehicle.html" class="banner-link"><span>Sell+</span></a>
				</div>
			</div>
				
			<div class="full-width articles-dealers-offers">
				<div class="popular-articles one-third">
					<h3><span class="bold">Popular</span> Articles</h3>
					<ul class="articles-list">
						<li>
							<img src="images/article_icon.gif" alt="Article Icon" />
							<p class="preview">Here are many variations of passages of Lorem Ipsum..</p>
							<a href="blog-post.html" class="more-link">Read more</a>
						</li>
						<li>
							<img src="images/article_icon.gif" alt="Article Icon" />
							<p class="preview">Here are many variations of passages of Lorem Ipsum..</p>
							<a href="blog-post.html" class="more-link">Read more</a>
						</li>
					</ul>
				</div><!--.popular-articles-->
					
				<div class="car-dealers one-third">
					<div class="headline">
						<h3><span class="bold">Car</span> dealers</h3>
						<a href="dealer-list.html" class="see-more">See all dealers</a>
					</div>
					
					<ul class="dealer-list">
						<li>
							<a href="dealer-details.html" class="dealer-name">Dealer name</a>
							<span class="amount-offers">162 Offers</span>
						</li>
						<li>
							<a href="dealer-details.html" class="dealer-name">Dealer name</a>
							<span class="amount-offers">162 Offers</span>
						</li>
						<li>
							<a href="dealer-details.html" class="dealer-name">Dealer name</a>
							<span class="amount-offers">162 Offers</span>
						</li>
						<li>
							<a href="dealer-details.html" class="dealer-name">Dealer name</a>
							<span class="amount-offers">162 Offers</span>
						</li>
					</ul>
				</div><!--.car-dealers-->
					
				<div class="daily-offers one-third">
					<h3><span class="bold">Get</span> daily offers</h3>
					<form action="#" method="post">
                    	<input type="text" onfocus="if(this.value == 'E-mail here') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail here'; }" value="E-mail here" class="email-address default-input ">
						<p class="offer-text">Available, but have suffered alteration in some form injected humour, or randomised words which don't look even slightly believable. </p>
						<div class="submit-button"><input type="submit" value="Subscribe" /></div>
						<p class="amount-subscribers">15,000+ other subscribers</p>
					</form>
				</div><!--.daily-offers-->
			</div>
		</div>
	</section><!--#car-shortcuts-->		
	
</div><!--#page-content-->
	
<footer>
		<div class="layer-one">
			<div class="content-holder">
				<nav>
					<ul>
						<li><a href="dealer-details.html"><span class="bold">About</span> us</a>
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
					
				<div class="find-us-here">
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
