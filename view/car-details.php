<?php 
require_once 'header.php';

?>
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold"><?= $post->car->brand ?> </span> <?= $post->car->model ?> </h2>
					<p class="page-location">
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="/CarListController.php">Cars</a>
						<span class="greater-than">&gt;&gt;</span>
					</p>
				</div>
				
				<div class="extra-info">
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
				<?php if(isset($user) && $user->id == $post->user->id) {?>
					<li id="deletepost" onclick="deletePost(<?= $_GET['id'] ?>); return false;"><a href=""><span>DELETE THIS POST</span></a></li>
<!-- 					<li id="vehicle-location"><a href="#"><span>Vehicle location</span></a></li> -->
					<?php } ?>
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
							<img src="/assets/images/postimage/<?=$post->pictures[0]?>" alt="Full Picture" />
							<span class="magnifying-glass">Magnifying Glass</span>
						</a>
					</div>
					<ul class="images-navigation">
					<?php foreach ($post->pictures as $picture) { ?>
						<li><a href="/assets/images/postimage/<?=$picture?>"><img src="/assets/images/postimage/<?=$picture?>" alt="Thumb Car" /></a></li>
					<?php } ?>
					</ul>
					<div id="preloader"></div>
				</div>
				
				<div class="car-full-specs one-half col-460">
					<div class="price-car">
						<span class="price-tag"><?= $post->car->price ?></span>
						<span class="small-note">* Price negotiable</span>
					</div>
					<ul class="car-specs-list">
						<li>
							<span class="label">Model, Body type:</span>
							<span class="value"><?= $post->car->brand ?> <?= $post->car->model ?> , <?= $post->car->bodytype ?></span>
						</li>
						<li>
							<span class="label">Fabrication:</span>
							<span class="value"><?= $post->car->regyear ?></span>
						</li>
						<li>
							<span class="label">Fuel:</span>
							<span class="value"><?= $post->car->fueltype ?></span>
						</li>
						<li>
							<span class="label">Engine:</span>
							<span class="value"><?= $post->car->cilindrics ?> cm³ </span>
						</li>
						<li>
							<span class="label">Transmision:</span>
							<span class="value"><?= $post->car->transmissiontype ?></span>
						</li>
						<li>
							<span class="label">Color:</span>
							<span class="value"><?= $post->car->color ?></span>
						</li>
						<li>
							<span class="label">Doors:</span>
							<span class="value"><?= $post->car->doors ?></span>
						</li>
						<li>
							<span class="label">CO2-Emissions combined:</span>
							<span class="value">ca <?= rand(200,500) ?> g/km</span>
						</li>
					</ul>
					
					<div class="sell-similar-car">
						<span class="label">You want to sell a similar car?</span>
					<?php 	if(isset($_SESSION['user'])) { ?>
						<a href="/PostController.php" class="value">+ Add an offer</a>
					<?php }else{ ?>
					 	<a href="/LoginController.php" class="value">+ Add an offer</a> 
					<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="full-width grey-border-bottom">
				<div class="one-half standard-text-content col-701">
				
					<h3><span class="bold">Vehicle</span> information</h3>
					<ul>
						<p><strong>Features:</strong> 
						
						<?= implode("</br> ", $post->car->postExtras) ?></p>
						
						
					</ul>
				
					<hr />

					<h3><span class="bold">More</span> info</h3>
					<p><?= $post->car->description ?></p>
					<hr />
					
					<h3><span class="bold">Contact</span> details</h3>
					<p class="heading-note">AutoMarket does not store additional information about the seller except for those contained in the announcement.</p>
					<br />
					<ul class="icon-list">
						<li class="phone"><?= $post->user->phone?></li>
						<li class="address"><?= $post->user->address ?></li>
						<li class="e-mail"><a href="#"><?= $post->user->email?></a>
						<li class="website"><a href=""> http://www.dealer.automarket.com</a>
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
						
					</div>
				
				</div>
				
			</div>
			
			<div class="full-width standard-text-content">
				<h3><span class="bold">Similar</span> offers</h3>
			
				<ul class="offer-small list-content">
				<?php foreach ($topposts as $post) { ?>
					<li>
						<a href="/CarDetailsController.php?id=<?= $post->id_post ?>">
							<img src="/assets/images/postimage/<?= $post->image_name ?>" alt="offer car" />
							<div class="entry-label">
								<h4><?= $post->brand_name?> <?= $post->model_name ?></h4>
								<span class="price-tag"><?= $post->price ?></span>
							</div>
							<div class="entry-overlay">
								<ul class="car-list-details">
							
									<li>Registration <?= $post->reg_year ?></li>
									<li><?= $post->reg_year ?> <?= $post->fuel_type ?></li>
									<li><?= $post->hp ?> HP</li>
									<li><?= $post->body_type ?></li>
									<li><?= $post->kilometers ?></li>							
								</ul>
							</div>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			
			
		</div><!--.content-holder-->
	</section><!--#search-list-->
	
</div><!--#page-content-->
<script>
	function deletePost(postId){
		if(confirm("Are you sure you want to delete this post?")){
			$.get("/ajaxController.php", {deleteid: postId}, function(result){
					if(result>0){
						alert("Successful!");
						location.href="/";
				}else{
						alert("Try again later");
				}
			}
			);
		}
		
	};

</script>
	
<?php 

require_once 'footer.php';
?>
	