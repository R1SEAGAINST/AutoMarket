<?php 
require_once 'header.php';
echo "<h3>".$errorMessage."</h3>";
	?>

<div id="page-content">
	<section id="car-advertisement">
		<div class="content-holder">
			<div class="slide-part-large">
				<div class="visible-image">
					<h2><span class="bold">Best</span> Offer</h2>
					<div id="slides">
						<ul class="slides">
						<?php foreach($topposts as $post){
							?>
							<li>
								<a href="/CarDetailsController.php?id=<?= $post->id_post ?>">
								
									<img src="/assets/images/postimage/<?= $post->image_name ?>" alt="Slide" />
									<div class="slide-info">
										<h3><?= $post->brand_name?> <?= $post->model_name ?></h3>
										<span class="price-tag"><?= number_format($post->price)?></span>								
									</div>
								</a>
							</li>
							<?php } ?>
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
				<?php foreach($latestposts as $post){?>
				<ul class="offer-list offer-small list-content">
					<li>
						<a href="/CarDetailsController.php?id=<?= $post->id_post ?>">
							<img src="/assets/images/postimage/<?= $post->image_name ?>" alt="offer car" />
							<div class="entry-label">
								<h4><?= $post->brand_name?> <?= $post->model_name ?></h4>
								<span class="price-tag"><?= number_format($post->price)?></span>
							</div>
						
							<div class="entry-overlay">
								<ul class="car-list-details">
									<li>Registration <?= $post->reg_year ?></li>
									<li><?= $post->cilindrics ?>cm<sup>3</sup> <?= $post->fuel_type ?></li>
									<li><?= $post->hp ?></li>
									<li><?= $post->body_type ?></li>
									<li><?= $post->kilometers ?></li>							
								</ul>
							</div>
							<span class="v-sign">V</span>
							<span class='dealer-data'>Vehicle Dealer</span>
						</a>
					</li><!--/end of item 1-->
					<?php } ?>	
					<li>
						<a href="/CarDetailsController.php">
							<img src="http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="offer car" />
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
						<a href="/CarDetailsController.php">
							<img src="http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="offer car" />
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
						<a href="/CarDetailsController.php">
							<img src="http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="offer car" />
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
						<a href="/CarDetailsController.php">
							<img src="http://localhost/AutoMarket/assets/images/mercedes-thumb.jpg" alt="offer car" />
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
					<a href="/CarListController.php" class="icon-magnify icon-banner">Magnify</a>
					<div class="banner-title">
						<h3><span class="bold">Looking</span> for a car?</h3>
						<p class="description">1.000 new offers every day. 35.000 offers on site</p>
					</div>
					<a href="/CarListController.php" class="banner-link"><span>Search</span></a>
				</div>
					
				<div class="sell-banner banner-medium one-half">
					<a href="/PostController.php" class="icon-dollar icon-banner">Dollar</a>
					<div class="banner-title">
						<h3><span class="bold">Want</span> to sell a car?</h3>
						<p class="description">200.000 visitors every day. Add your offer now!</p>
					</div>
					<?php if(isset($_SESSION['user'])){
					?>
					<a href="/PostController.php" class="banner-link"><span>Sell+</span></a>
					<?php }else{
					?>
					<a href="/LoginController.php" class="banner-link"><span>Sell+</span></a>
					<?php 
					}
					?>
				</div>
			</div>
				
			<div class="full-width articles-dealers-offers">
				<div class="popular-articles one-third">
					<h3><span class="bold">Popular</span> Articles</h3>
					<ul class="articles-list">
						<li>
							<img src="https://pbs.twimg.com/profile_images/707520591855816704/9lc9yWsb.jpg" alt="Article Icon" />
							<p class="preview">Check out our news website.</p>
							<a href="http://localhost/NewsWebsite/?page=sport" class="more-link">Read more</a>
						</li>
						<li>
							<img src="https://pbs.twimg.com/profile_images/707520591855816704/9lc9yWsb.jpg" alt="Article Icon" />
							<p class="preview">Check out our news website.</p>
							<a href="http://localhost/NewsWebsite/?page=technology" class="more-link">Read more</a>
						</li>
					</ul>
				</div><!--.popular-articles-->
					
				<div class="car-dealers one-third">
					<div class="headline">
						<h3><span class="bold">Car</span> dealers</h3>
						<a href="/DealerlistController.php" class="see-more">See all dealers</a>
					</div>
					
					<ul class="dealer-list">
					<?php 
					for($i=0; $i<count($getFive); $i++){
						echo  "<li>".$getFive[$i]->username.
		
						
							"<a href='/DealerDetailsController.php?id=".$getFive[$i]->id."' class='dealer-name>".$getFive[$i]->username."</a>
							<span class='amount-offers'>"." ".$getFive[$i]->countUsersPosts." Offers</span>

						</li>";
						}
						?>
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
	
<?php 

require_once 'footer.php';
?>
	