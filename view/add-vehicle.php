<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Automarket - Add Vehicle</title>
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
					<h2><span class="bold">Sell your vehicle</span></h2>
					<p class="page-location">
						<a href="index.html">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Add an offer</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#"><span>1. New offer</span></a></li>
					<li><a href="#"><span>2. Preview</span></a></li>
					<li><a href="#"><span>3. Submit</span></a></li>
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width light-grey-corner-box box-text-default">
				<h3>Sell ​​your car on <strong>AutoMarket </strong>and benefit from more than 1 million potential buyers every month!</h3>
				<p>Required fields are marked with * </p>
				<p>Please post offers only on the car (parts are a special category).</p>
				<p>If you are a dealer, please visit the dealers section</p>
				<p>If you have difficulties in posting an offer on the website, please call 0742 016 570</p>
			</div>
			
			<div class="full-width sell-form <!--options-form-->">
				<form>
					<fieldset id="vehicle-data">
						<legend><span class="bold">Vehicle</span> data</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory">*</span></label>
									<select id="select-manufacturer">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory">*</span></label>
									<select id="select-model">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-fabrication">Fabrication: <span class="mandatory">*</span></label>
									<select id="select-fabrication">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-body-type">Body Type: <span class="mandatory">*</span></label>
									<select id="select-body-type">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li>
							
							<li class="select-four">
								<div>
									<label for="select-fuel-type">Fuel Type: <span class="mandatory">*</span></label>
									<select id="select-fuel-type">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmission: <span class="mandatory">*</span></label>
									<select id="select-transmission">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Doors: <span class="mandatory">*</span></label>
									<select id="select-doors">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-cilindrics">Cilindrics (in cm³): <span class="mandatory">*</span></label>
									<select id="select-cilindrics">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li><!-- line #2 -->
							
							<li class="select-four">
								<div>
									<label for="select-hp-kw">Hp / Kw: <span class="mandatory">*</span></label>
									<select id="select-hp-kw">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div class="two-fourth">
									<label for="input-chassis">VIN / chassis number: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-chassis" class="default-input" />
								</div>
								<div>
									<label for="select-color">Color: <span class="mandatory">*</span></label>
									<select id="select-color">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li><!-- line #3 -->
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-equipment" class="checkbox-selection">
						<legend><span class="bold">Vehicle</span> equipment</legend>
						<ul class="field-content">
							<li><input type="checkbox" value="checkbox_abs" id="check-abs" /><label for="check-abs">ABS</label></li>
							<li><input type="checkbox" value="checkbox_eds" id="check-eds" /><label for="check-eds">EDS</label></li>
							<li><input type="checkbox" value="checkbox_esp" id="check-esp" /><label for="check-esp">ESP</label></li>
							<li><input type="checkbox" value="checkbox_air_conditioning" id="check-air-conditioning" /><label for="check-air-conditioning">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_airbag" id="check-airbag" /><label for="check-airbag">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_alarm" id="check-alarm" /><label for="check-alarm">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_panoramic_roof" id="check-panoramic-roof" /><label for="check-panoramic-roof">Panoramic roof</label></li>
							<li><input type="checkbox" value="checkbox_protection_framework" id="check-protection-framework" /><label for="check-protection-framework">Protection framework</label></li>
							<li><input type="checkbox" value="checkbox_tow" id="checkbox-tow" /><label for="checkbox-tow">Tow</label></li>
							<li><input type="checkbox" value="checkbox_traction_control" id="checkbox-traction-control" /><label for="checkbox-traction-control">Traction control</label></li>
							<li><input type="checkbox" value="checkbox_board_computer" id="checkbox-board-computer" /><label for="checkbox-board-computer">Board computer</label></li>
							<li><input type="checkbox" value="checkbox_steering_wheel" id="checkbox-steering-wheel" /><label for="checkbox-steering-wheel">Steering wheel controls</label></li>
						</ul>
					
					</fieldset>
					
					<fieldset id="vehicle-description">
						<legend><span class="bold">Vehicle</span> description</legend>
						<div class="field-content">
							<label for="vehicle-description-field">Some text:</label>
							<textarea id="vehicle-description-field" name="description" class="description"></textarea>
						</div>
					</fieldset>
					
					<fieldset id="vehicle-registration">
						<legend><span class="bold">Vehicle</span> registration</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-country-origin">Country of Registration: <span class="mandatory">*</span></label>
									<select id="select-country-origin">
										<option selected="selected">Select</option>
												<option value="AL">Albania</option>
												<option value="AD">Andorra</option>
												<option value="AT">Austria</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BR">Brazil</option>
												<option value="BG">Bulgaria</option>
												<option value="CA">Canada</option>
												<option value="HR">Croatia</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="EG">Egypt</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FO">Faroe Islands</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="DE">Germany</option>
												<option value="GR">Greece</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IE">Ireland</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JP">Japan</option>
												<option value="JO">Jordan</option>
												<option value="KW">Kuwait</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MK">Macedonia</option>
												<option value="MT">Malta</option>
												<option value="MX">Mexico</option>
												<option value="MD">Moldova</option>
												<option value="MC">Monaco</option>
												<option value="ME">Montenegro</option>
												<option value="MA">Morocco</option>
												<option value="NL">Netherlands</option>
												<option value="NZ">New Zealand</option>
												<option value="NG">Nigeria</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="SM">San Marino</option>
												<option value="SA">Saudi Arabia</option>
												<option value="RS">Serbia</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="ZA">South Africa</option>
												<option value="KR">South Korea</option>
												<option value="ES">Spain</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="TW">Taiwan</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">USA</option>
										</select>
								</div>
								<div>
									<label for="select-registration-month">Date of first registration: <span class="mandatory">*</span></label>
									<select id="select-registration-month">
										<option selected="selected">Month</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-registration-year">&nbsp;</label>
									<select id="select-registration-year">
										<option selected="selected">Year</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-condition">
						<legend><span class="bold">Vehicle</span> condition</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-technical-condition">Technical condition: <span class="mandatory">*</span></label>
									<select id="select-technical-condition">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="input-kilometers">Kilometers: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-kilometers" class="default-input" />
								</div>
								<div>
									<label for="select-euro-type">Euro type:</label>
									<select id="select-euro-type">
										<option selected="selected">Month</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="input-emissions">CO2 emissions:</label>
									<input type="text" name="chassis_number" id="input-emissions" class="default-input" />
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Vehicle</span> price</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-price">Price: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-price" class="default-input" />
								</div>
								<div>
									<label for="select-currency">Currency: <span class="mandatory">*</span></label>
									<select id="select-currency">
										<option selected="selected">Euro</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div class="checkbox-custom">
									<div><input type="checkbox" value="checkbox_abs" id="check-price-negotiable"/></div>
									<label for="check-price-negotiable">&nbsp; Price Negotiable</label>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-photos">
						<legend><span class="bold">Vehicle</span> photos</legend>
						<ul class="field-content">
							<li class="select-six">
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="seller-details">
						<legend><span class="bold">Seller</span> details</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-name">Name: <span class="mandatory">*</span></label>
									<input type="text" name="name" id="input-name" class="default-input" />
								</div>
								<div>
									<label for="input-phone-1">Phone: <span class="mandatory">*</span></label>
									<input type="text" name="phone_1" id="input-phone-1" class="default-input" />
								</div>
								<div>
									<label for="input-phone-2">Phone 2: <span class="mandatory">*</span></label>
									<input type="text" name="phone_2" id="input-phone-2" class="default-input" />
								</div>
								<div>
									<label for="input-city">City: <span class="mandatory">*</span></label>
									<input type="text" name="city" id="input-city" class="default-input" />
								</div>
							</li>
							<li class="select-four">
								<div>
									<label for="select-country">Country:</label>
									<select id="select-country">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-state">State:</label>
									<select id="select-state">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="input-email">E-mail: <span class="mandatory">*</span></label>
									<input type="email" name="email" id="input-email" class="default-input" />
								</div>
								<div>
									<label for="input-password">Password: <span class="mandatory">*</span></label>
									<input type="password" name="password" id="input-password" class="default-input" />
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-submit" class="checkbox-selection">
						<div>
							<div class="agree-checkbox">
								<input type="checkbox" value="agreed" id="check-agreed" /><label for="check-agreed">I agree to the Terms and Conditions. </label>
							</div>
							<div class="submit-vehicle default-submit">
								<input type="submit" value="submit" />
							</div>
						</div>
							
					</fieldset>
					
				</form>				
			</div>
			
		</div>
	</section>
	
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



<?php 
require_once 'header.php';
?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Sell your vehicle</span></h2>
					<p class="page-location">
						<a href="index.html">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Add an offer</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#"><span>1. New offer</span></a></li>
					<li><a href="#"><span>2. Preview</span></a></li>
					<li><a href="#"><span>3. Submit</span></a></li>
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width light-grey-corner-box box-text-default">
				<h3>Sell ​​your car on <strong>AutoMarket </strong>and benefit from more than 1 million potential buyers every month!</h3>
				<p>Required fields are marked with * </p>
				<p>Please post offers only on the car (parts are a special category).</p>
				<p>If you are a dealer, please visit the dealers section</p>
				<p>If you have difficulties in posting an offer on the website, please call 0742 016 570</p>
			</div>
			
			<div class="full-width sell-form <!--options-form-->">
				<form>
					<fieldset id="vehicle-data">
						<legend><span class="bold">Vehicle</span> data</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory">*</span></label>
									<select id="select-manufacturer">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory">*</span></label>
									<select id="select-model">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-euro-type">Euro type:</label>
									<select id="select-euro-type">
										<option selected="selected">Select</option>
										<option value="Euro1">Euro1</option>
										<option value="Euro2">Euro2</option>
										<option value="Euro3">Euro3</option>
										<option value="Euro4">Euro4</option>
										<option value="Euro5">Euro5</option>
										<option value="Euro6">Euro6</option>
										
										
									</select>
								</div>
								
								<div>
									<label for="select-body-type">Body Type: <span class="mandatory">*</span></label>
									<select id="select-body-type">
										<option selected="selected">Select</option>
										<option value="Cabriolet/Roadster">Cabriolet/Roadster</option>
										<option value="Small Car">Small Car</option>
										<option value="Estete Car">Estete Car</option>
										<option value="Off-road Vehicle/Pickup">Off-road vehicle/Pickup</option>
										<option value="Saloon">Saloon</option>
										<option value="Van/Minibus">Van/Minibus</option>
										<option value="Sports Csar">Sports Car</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</li>
							
							<li class="select-four">
								<div>
									<label for="select-fuel-type">Fuel Type: <span class="mandatory">*</span></label>
									<select id="select-fuel-type">
										<option selected="selected">Select</option>
										<option value="Diesel">Diesel</option>
										<option value="Petrol">Petrol</option>
										<option value="Electric">Electric</option>
										<option value="Hybrid">Hybrid</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmission: <span class="mandatory">*</span></label>
									<select id="select-transmission">
										<option selected="selected">Select</option>
										<option value="Manuel">Manuel</option>
										<option value="Semi-automatic">Semi-automatic</option>
										<option value="Autotic trnsmission">automatic transmission</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Doors: <span class="mandatory">*</span></label>
									<select id="select-doors">
										<option selected="selected">Select</option>
										<option value="2/3">2/3</option>
										<option value="4/5">4/5</option>
										
									</select>
								</div>
								
								<div>
									<label for="select-color">Color: <span class="mandatory">*</span></label>
									<select id="select-color">
										<option selected="selected">Select</option>
										<option value="Silver">Silver</option>
										<option value="Grey">Grey</option>
										<option value="Metalic">Metalic</option>
										<option selected="Blue">Blue</option>
										<option value="Broun">Broun</option>
										<option value="Orange">Orange</option>
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Black">Black</option>
										<option value="Green">Green</option>
										<option value="Gold">Gold</option>
										<option value="Yellow">Yellow</option>
										<option value="Beage">Beage</option>
									</select>
								</div>
								
								</li><!-- line #2 -->
								
								<li class="select-four">
									<div>
										<label for="select-cilindrics">Cilindrics (in cm³): <span class="mandatory">*</span></label>
										
										<input type="text" name="chassis_number" id="input-cilidrics" class="default-input" />
											
										</select>
									</div>
								
								
							
									<div>
										<label for="select-hp-kw">Hp / Kw: <span class="mandatory">*</span></label>
										
										<input type="text" name="chassis_number" id="input-hp" class="default-input" />
									</div>
									
									<div>
									<label for="select-fabrication">Fabrication: <span class="mandatory">*</span></label>
									
									<input type="text" name="chassis_number" id="input-fabrication" class="default-input" />
									
								</div>
									
									
								
							</li><!-- line #3 -->
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-equipment" class="checkbox-selection">
						<legend><span class="bold">Vehicle</span> equipment</legend>
						<ul class="field-content">
							<li><input type="checkbox" value="checkbox_abs" id="check-abs" /><label for="check-abs">ABS</label></li>
							<li><input type="checkbox" value="checkbox_eds" id="check-eds" /><label for="check-eds">EDS</label></li>
							<li><input type="checkbox" value="checkbox_esp" id="check-esp" /><label for="check-esp">ESP</label></li>
							<li><input type="checkbox" value="checkbox_air_conditioning" id="check-air-conditioning" /><label for="check-air-conditioning">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_airbag" id="check-airbag" /><label for="check-airbag">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_alarm" id="check-alarm" /><label for="check-alarm">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_panoramic_roof" id="check-panoramic-roof" /><label for="check-panoramic-roof">Panoramic roof</label></li>
							<li><input type="checkbox" value="checkbox_protection_framework" id="check-protection-framework" /><label for="check-protection-framework">Protection framework</label></li>
							<li><input type="checkbox" value="checkbox_tow" id="checkbox-tow" /><label for="checkbox-tow">Tow</label></li>
							<li><input type="checkbox" value="checkbox_traction_control" id="checkbox-traction-control" /><label for="checkbox-traction-control">Traction control</label></li>
							<li><input type="checkbox" value="checkbox_board_computer" id="checkbox-board-computer" /><label for="checkbox-board-computer">Board computer</label></li>
							<li><input type="checkbox" value="checkbox_steering_wheel" id="checkbox-steering-wheel" /><label for="checkbox-steering-wheel">Steering wheel controls</label></li>
						</ul>
					
					</fieldset>
					
					<fieldset id="vehicle-description">
						<legend><span class="bold">Vehicle</span> description</legend>
						<div class="field-content">
							<label for="vehicle-description-field">Some text:</label>
							<textarea id="vehicle-description-field" name="description" class="description"></textarea>
						</div>
					</fieldset>
					
					<fieldset id="vehicle-registration">
						<legend><span class="bold">Vehicle</span> registration</legend>
						<ul class="field-content">
							<li class="select-four">
							
								<div>
									<label for="select-country-registration">Country of registration: <span class="mandatory">*</span></label>
									<select id="select-country-registration">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							
								<div>
									<label for="select-registration-year">&nbsp;</label>
									<select id="select-registration-year">
										<option selected="selected">Year</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1985">1985</option>
										<option value="1980">1980</option>
										<option value="1975">1975</option>
										<option value="1970">1970</option>
										<option value="1965">1965</option>
										<option value="1960">1960</option>
										<option value="1900">1900</option>
										
									
									</select>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-condition">
						<legend><span class="bold">Vehicle</span> condition</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-technical-condition">Technical condition: <span class="mandatory">*</span></label>
									<select id="select-technical-condition">
										<option selected="selected">Select</option>
										<option value="New">New</option>
										<option value="Used">Used</option>
										<option value="Damage">Damage</option>
										<option value="Damage">Pre-Registration</option>
									</select>
								</div>
								<div>
									<label for="input-kilometers">Kilometers: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-kilometers" class="default-input" />
								</div>
								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Vehicle</span> price</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-price">Price: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-price" class="default-input" />
								</div>
								<div>
									<label for="select-currency">Currency: <span class="mandatory">*</span></label>
									<select id="select-currency">
										<option selected="selected">Euro</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div class="checkbox-custom">
									<div><input type="checkbox" value="checkbox_abs" id="check-price-negotiable"/></div>
									<label for="check-price-negotiable">&nbsp; Price Negotiable</label>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-photos">
						<legend><span class="bold">Vehicle</span> photos</legend>
						<ul class="field-content">
							<li class="select-six">
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>								
							</li>
						</ul>
					</fieldset>
					
					
					
					<fieldset id="vehicle-submit" class="checkbox-selection">
						<div>
							<div class="agree-checkbox">
								<input type="checkbox" value="agreed" id="check-agreed" /><label for="check-agreed">I agree to the Terms and Conditions. </label>
							</div>
							<div class="submit-vehicle default-submit">
								<input type="submit" value="submit" />
							</div>
						</div>
							
					</fieldset>
					
				</form>				
			</div>
			
		</div>
	</section>
	
</div><!--#page-content-->
	
<?php 

