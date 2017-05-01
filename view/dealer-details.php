<?php 
require_once 'header.php';

?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold"></span><?= $dealer->username?></h2>
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
<!-- 						<h3><span class="bold">About</span> us</h3> -->
<!-- 						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum, nisi id vulputate ullamcorper, tellus libero venenatis neque,  -->
<!-- 						in egestas enim lorem ut felis. Suspendisse potenti. Donec nec sapien mauris, vitae aliquam quam. Donec aliquam tortor felis. Sed acsapien</p> -->
<!-- 						<br /> -->
						<h3><span class="bold">Contact</span> details</h3>
						<ul class="icon-list">
							<li class="phone"><span><?= $dealer->phone?></span></li>
							<li class="address"><span><?=$dealer->country." ".$dealer->address?></span></li>
							<li class="e-mail"><span><a href="#"><?= $dealer->email ?></a></span></li>
							<li class="website"><span><a href="#"> http://www.automarket.com</a></span></li>
						</ul>
							<?php if($myProfile){
							
							
							echo "<div class='pagination'>
							<a href='/UpdateUserCotroller.php' class='last-button'>Update My Profile</a>
						</div>";
						}
						
						?>
						
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
						<a href='"/CarDetailsController.php?postid=<?=$lastPost->postId?> '>
							<span class="best-offer-tag"><span class="bold">Last</span> offer</span>
							<img src="http://localhost/AutoMarket/assets/images/best_offer.jpg" alt="Best Offer" />							
							<div class="slide-info">
								<h3><?=$lastPost->car->brandname?> <?= $lastPost->car->modelname?></h3>
								<span class="price-tag"><?=$lastPost->car->price?> Euro</span>								
							</div>
						
						</a>					
					</div>
					
					
					<div class="layer-one">
					
						<div class="offers-info">
							<span class="label">Offers:</span><span class="offer-count"><?=$dealer->countUsersPosts ?></span>
						</div>
						
						
						<div class="pagination">
							<a href="/CarDetailsController.php" class="last-button">View all offers</a>
						</div>
					</div>
					
					<div class="layer-two">
					<?php 
						for ($index=1; $index < count($carArr); $index++){
						echo "<div id='cars-list' class='info-list'>
							<ul class='detail-list'>
								<li>
									<a href='/CarDetailsController.php?postid=".$carArr[$index]->postId."' class='item-link'>
										<span class='overlay'>Overlay</span>
										<img src='http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg' alt='Picture' />
										<span class='v-sign'>V</span>
									</a>
									<div class='text-content'>
										<div class='layer-one'>
											<h3><a href='/CarDetailsController.php?postid=".$carArr[$index]->postId."' class='car-title'>".$carArr[$index]->car->brandname." ".$carArr[$index]->car->modelname."</a></h3>
											<span class='price-tag'>".$carArr[$index]->car->price."</span>
										</div>
										<ul class=;item-specs layer-two'>
											<li>".$carArr[$index]->car->regyear."</li>
											<li>".$carArr[$index]->car->fueltype."</li>
											<li>".$carArr[$index]->car->hp." HP</li>
											<li>".$carArr[$index]->car->bodytype."</li>
																				
										</ul>
										<div class='layer-three'>
											<span class='location-car'>Location:". $dealer->country."</span>
											<a href='/CarDetailsController.php' class='details-link'>View details</a>
										</div>
									</div>
								</li>
							</ul>
							
						</div>";
						}
					?>
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

<script src="http://localhost/AutoMarket/assets/js/dealerPosts.js"></script>
	
	