<?php 
require_once 'header.php';

?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Dealer</span> name here</h2>
					<p class="page-location">
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="/DealerListController.php">Dealers</a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="">Dealer name</a>
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
						<a href="/CarDetailsController.php">
							<span class="best-offer-tag"><span class="bold">Best</span> offer</span>
							<img src="http://localhost/AutoMarket/assets/images/best_offer.jpg" alt="Best Offer" />							
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
							<a href="/CarDetailsController.php" class="last-button">View all offers</a>
						</div>
					</div>
					
					<div class="layer-two">
						
						<div id="cars-list" class="info-list">
							<ul class="detail-list">
								<li>
									<a href="/CarDetailsController.php" class="item-link">
										<span class="overlay">Overlay</span>
										<img src="http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="Picture" />
										<span class="v-sign">V</span>
									</a>
									<div class="text-content">
										<div class="layer-one">
											<h3><a href="/CarDetailsController.php" class="car-title">Vehicle Name</a></h3>
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
											<a href="/CarDetailsController.php" class="details-link">View details</a>
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
	
<?php 
require_once 'footer.php';
?>
	