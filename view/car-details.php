<?php 
require_once 'header.php';

?>
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Mercedes-Benz</span> CLS 320</h2>
					<p class="page-location">
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="/CarListController.php">Cars</a>
						<span class="greater-than">&gt;&gt;</span>
						<a>Ime na tekushta</a>
					</p>
				</div>
				
				<div class="extra-info">
					<span>Offer ID C24021482</span>
					<p>The offer had 1944 Views</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul id="vehicle-toggle">
					<li id="vehicle-description" class="current-item"><a href="#"><span>Vehicle description</span></a></li>
					<li id="vehicle-location"><a href="#"><span>Vehicle location</span></a></li>
				</ul>
				
<!-- 				<ul> -->
<!-- 					<li class="click-to-share"><a href="#"><span>Click to share</span></a></li> -->
<!-- 					<li class="print-this-page"><a href="#"><span>Print this page</span></a></li> -->
<!-- 				</ul> -->
			</nav>
			
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="car-details">
	
		<div class="social-icons-round">
			<p>Share to:</p>
			<ul>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="google"><a href="#">Gmail</a></li>
			</ul>
		</div>
		<div class="content-holder">
			<div class="full-width google-maps dealer-maps vehicle-location">
				<div id="map-canvas" style="width: 978px; height: 380px;"></div>
			</div>
		
			<div class="full-width vehicle-description">
			
				<div class="car-full-image one-half col-480">
					<div class="main-image">
						<a href="#">
							<img src="../images/mercedes_full.jpg" alt="Full Picture" />
							<span class="magnifying-glass">Magnifying Glass</span>
						</a>
					</div>
					<ul class="images-navigation">
						<li><a href="http://localhost/AutoMarket/asets/images/mercedes_full.jpg"><img src="../images/mercedes_thumb_list_item.jpg" alt="Thumb Car" /></a></li>
						<li><a href="http://localhost/AutoMarket/assets/images/mercedes_full1.jpg"><img src="../images/mercedes_thumb_list_item1.jpg" alt="Thumb Car" /></a></li>
						<li><a href="http://localhost/AutoMarket/assets/images/mercedes_full2.jpg"><img src="../images/mercedes_thumb_list_item2.jpg" alt="Thumb Car" /></a></li>
                        <li><a href="http://localhost/AutoMarket/assets/images/mercedes_full3.jpg"><img src="../images/mercedes_thumb_list_item3.jpg" alt="Thumb Car" /></a></li>
                        <li><a href="http://localhost/AutoMarket/assets/images/mercedes_full4.jpg"><img src="../images/mercedes_thumb_list_item4.jpg" alt="Thumb Car" /></a></li>
					</ul>
					<div id="preloader"></div>
				</div>
				
				<div class="car-full-specs one-half col-460">
					<div class="price-car">
						<span class="price-tag">54.980 EURO</span>
						<span class="small-note">* Price negotiable</span>
					</div>
					<ul class="car-specs-list">
						<li>
							<span class="label">Model, Body type:</span>
							<span class="value">Mercedes-Benz CLS 320, Coupe</span>
						</li>
						<li>
							<span class="label">Fabrication:</span>
							<span class="value">2010</span>
						</li>
						<li>
							<span class="label">Fuel:</span>
							<span class="value">Diesel</span>
						</li>
						<li>
							<span class="label">Engine:</span>
							<span class="value">3200 cm³ (373 kW / 507 CP)</span>
						</li>
						<li>
							<span class="label">Transmision:</span>
							<span class="value">Automatic</span>
						</li>
						<li>
							<span class="label">Color:</span>
							<span class="value">Black</span>
						</li>
						<li>
							<span class="label">Doors:</span>
							<span class="value">4/5</span>
						</li>
						<li>
							<span class="label">CO2-Emissions combined:</span>
							<span class="value">ca 423 g/km</span>
						</li>
					</ul>
					
					<div class="sell-similar-car">
						<span class="label">You want to sell a similar car?</span>
						<a href="/PostController.php" class="value">+ Add an offer</a>
					</div>
				</div>
			</div>
			
			<div class="full-width grey-border-bottom">
				<div class="one-half standard-text-content col-701">
				
					<h3><span class="bold">Vehicle</span> information</h3>
					<ul>
						<li><strong>Features: </strong>alloy wheels, xenon headlights, fog lights, tinted glass</li>
						<li><strong>Other parameters: </strong>service book</li>
						<li><strong>Safety: </strong>ABS, traction control, alarm, airbags, immobilizer, anti-theft, ESP, EDS, protection framework</li>
						<li><strong>Comfort: </strong>electric windows, electric mirrors, air conditioning, leather upholstery, navigation system, central locking, radio / CD, power steering, 
						onboard computer, cruise control, heated seats, rain sensor, steering wheel controls, parking sensors</li>
					</ul>
				
					<hr />

					<h3><span class="bold">More</span> info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequat at. 
					Maecenas eget massa at eros ornare rhoncus. In sit amet enim risus, in mattis felis. Donec lorem arcu, tempor quis fermentum et, viverra in turpis. 
					Nam non nunc vitae justo tincidunt lobortis eu sit amet dui. Nam ut dui aliquet nisl fermentum mollis sit amet eget lectus. 
					Vivamus iaculis massa sit amet velit convallis aliquam. Vestibulum dolor erat, congue nec viverra eget, aliquet sit amet nunc. Donec vitae arcu orci.</p>
					<!--<br />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequat at. 
					Maecenas eget massa at eros ornare rhoncus. In sit amet enim risus, in mattis felis. Donec lorem arcu, tempor quis fermentum et, viverra in turpis. 
					Nam non nunc vitae justo tincidunt lobortis eu sit amet dui. Nam ut dui aliquet nisl fermentum mollis sit amet eget lectus. 
					Vivamus iaculis massa sit amet velit convallis aliquam. Vestibulum dolor erat, congue nec viverra eget, aliquet sit amet nunc. Donec vitae arcu orci.</p>-->
					
					<hr />
					
					<h3><span class="bold">Contact</span> details</h3>
					<p class="heading-note">AutoMarket does not store additional information about the seller except for those contained in the announcement.</p>
					<br />
					<ul class="icon-list">
						<li class="phone">0040 742 016 756</li>
						<li class="address">Berlin, Germany, nr. 250330, main street</li>
						<li class="e-mail"><a href="#">Contact vendor via e-mail</a>
						<li class="website"><a href="#"> http://www.dealer.automarket.com</a>
					</ul>
				</div>
				
				
				<div class="one-half col-241 search-area">
					<form id="search-filters">
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
					
					<div class="grey-corner-box">
						<a href="#"><img src="images/image_ads_here.gif" alt="Advertisement" /></a>
					</div>
				
				</div>
				
			</div>
			
			<div class="full-width standard-text-content">
				<h3><span class="bold">Similar</span> offers</h3>
			
				<ul class="offer-small list-content">
					<li>
						<a href="/CarDetailsController.php">
							<img src=".http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="offer car" />
							<div class="entry-label">
								<h4>Mercedes-Benz CLS</h4>
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
					</li>
				</ul>
			</div>
			
			
		</div><!--.content-holder-->
	</section><!--#search-list-->
	
</div><!--#page-content-->
	
<?php 

require_once 'footer.php';
?>
	