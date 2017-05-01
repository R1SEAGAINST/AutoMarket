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
						<a href="">Cars</a>
					</p>
				</div>
			
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="">Cars</a></li>
<!-- 					<li><a href="#">New Cars</a></li> -->
<!-- 					<li><a href="#">Used Cars</a></li> -->
				</ul>
			</nav>
			
			<div class="view-select-tabs">
				<a href="" id="list-view"><span>List View</span></a>
				<a href="" id="grid-view" class="current"><span>Grid View</span></a>
			</div>
		</div>
	</section><!--#car-pagination -->
		
	<section id="search-list">
		<div class="content-holder">
			<div class="full-width">
				<div class="one-half col-241 search-area">
					<form id="search-filter" name="search-filter" action="/CarListController.php" method="POST">
						<fieldset class="grey-corner-box">
							<legend><span class="bold">Search</span> filters</legend>
							<ul>
								<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory"></span></label>
									<select name="manufacturer" id="select-manufacturer">
										<option selected="selected" disabled="">Select</option>
										<?php foreach ($brands as $manufacturer) { ?>
										<option value="<?=$manufacturer['id_brand']?>"><?=$manufacturer['brand_name']?></option>
										<?php } ?>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory"></span></label>
									<select name="model" id="select-model">
										<option selected="selected">Select</option>
									</select>
								</div>
								<li class="select-two">
									<div>
										<label for="min-price">Min Price:</label>
										<select name="min-price" id="min-price">
										<option selected="selected">Select</option>
										<?php 
										for($index=0; $index <= 20000; $index+=500){
											echo "<option value=".$index.">".$index."</option>";
										}
										?>
										</select>
									</div>
									<div>
										<label for="max-price">Max Price:</label>
										<select name="max-price" id="max-price">
											<option selected="selected">Select</option>
											<?php 
										for($index=10000; $index <= 200000; $index+=10000){
											echo "<option value=".$index.">".$index."</option>";
										}
										?>
										</select>					
									</div>
								</li>
								<li>
									<label for="transmission">Transmission:</label>
									<select name="transmission" id="transmission">
										<option selected="selected">Select</option>
										<option value="Manual">Manual</option>
										<option value="Semiautomatic">Semi-automatic</option>
										<option value="Autotic">automatic transmission</option>
									</select>
								</li>
								<li>
									<label for="fuel-type">Fuel type:</label>
									<select name="fuel-type" id="fuel-type">
											<option selected="selected">Select</option>
										<option value="Diesel">Diesel</option>
										<option value="Petrol">Petrol</option>
										<option value="Electric">Electric</option>
										<option value="Hybrid">Hybrid</option>
									</select>
								</li>
								<li>
									<label for="body-type">Body type:</label>
									<select name="body-type" id="body-type">
										<option selected="selected">Select</option>
										<option value="Cabriolet/Roadster">Cabriolet/Roadster</option>
										<option value="Small Car">Small Car</option>
										<option value="Estete Car">Estete Car</option>
										<option value="Pickup">Off-road vehicle/Pickup</option>
										<option value="Saloon">Saloon</option>
										<option value="Van/Minibus">Van/Minibus</option>
										<option value="Sports Csar">Sports Car</option>
										<option value="Other">Other</option>
									</select>
								</li>
								<li>
									<label for="color">Color:</label>
									<select name="color" id="color">
										<option selected="selected">Select</option>
										<option value="Silver">Silver</option>
										<option value="Grey">Grey</option>
										<option value="Metallic">Metallic</option>
										<option value="Blue">Blue</option>
										<option value="Brown">Brown</option>
										<option value="Orange">Orange</option>
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Black">Black</option>
										<option value="Green">Green</option>
										<option value="Gold">Gold</option>
										<option value="Yellow">Yellow</option>
										<option value="Beage">Beage</option>
									</select>
								</li>
								<li class="select-two">
									<div>
										<label for="min-year">Min Year:</label>
										<select name="min-year" id="min-year">
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
									<div>
										<label for="max-year">Max Year:</label>
										<select name="max-year" id="max-year">
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
								<li>
									<label for="kilometers">Kilometers:</label>
										<select name="kilometers" id="kilometers">
											<option selected="selected">Select</option>
											<?php 
										for($index=10000; $index <= 150000; $index+=10000){
											echo "<option value=".$index."> Max ".$index."</option>";
										}
										?>
										<option value="160000">Over 160000</option>		
									</select>
								</li>
								<li>
									<!-- add this to general styles -->
									<div class="search-button">
										<input type="submit" name="submit" value="Search" /> 
									</div>
									<a href="/detailedSearchController.php" style="font-family:DroidSans, Arial, Verdana, sans-serif; font-size: 16px; display:block; margin-top: 15px; color:#009ada;" >Detailed Search >> </a>
									
									
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
                                <?php foreach ($posts as $post) {?>
                                <li>
									<a href="/CarDetailsController.php?id=<?= $post->id_post ?>" class="item-link">
										<img src="/assets/images/postimage/<?= $post->image_name ?>" alt="offer car" />
										<div class="entry-label">
											<h4 class="car-title"><?= $post->brand_name ?> <?= $post->model_name ?></h4>
											<span class="price-tag"><?= $post->price ?></span>
										</div>
									
										<div class="entry-overlay">
											<ul class="car-list-details item-specs">
												<li>Registration <?= $post->reg_year ?></li>
												<li><?= $post->cilindrics ?> <?= $post->fuel_type ?></li>
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

<script type="text/javascript">
	$(function() {
		$('#select-manufacturer').on('change', function() {
			var brandid = $('#select-manufacturer').val();

			$.getJSON('/ajaxController.php', { brandid: brandid }, function(response) {
				var modelSelect = $('#select-model');

				$(modelSelect).find('option').remove();
				$(modelSelect).append('<option selected="selected">Select</option>');

				$(modelSelect).val('Select').change();

				if (response) {
					$.each(response, function(key, value) {
						var option = '<option value="'+value.id_model+'">'+value.model_name+'</option>';
						$(modelSelect).append(option);
					});
				}
			});
		});
	});
</script>
	
<?php 

require_once 'footer.php';
?>
	