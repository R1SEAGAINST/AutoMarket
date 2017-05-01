<?php 
require_once 'header.php';
?>
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2 id="countUsers"><span class="bold" >Dealers</span></h2>
					<p class="page-location">
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="">Dealers</a>
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
					<form id="search-filters" action="/SearchDealerController.php" method="get">
						<fieldset class="grey-corner-box">
							<legend><span class="bold">Search</span> filters</legend>
							<ul>
								<li>
									<label for="dealer-name">Name:</label>
									<input type="text" class="default-input" id="dealer-name" name="dealer_name" />
								</li>
								<li>
									<div class="search-button">
									<span class="submit">	<input name="searchDealer" type="submit" value="Search" /></span>
									</div>
									<input type="submit" value="sea">
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
					
					<div class="layer-two" id="dealerPage">
						
						<div id="dealer-list" class="info-list">
							<ul class="detail-list">
								
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
<script src="http://localhost/AutoMarket/assets/js/dealers.js"></script>
	