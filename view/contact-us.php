<?php 
require_once 'header.php';

?>
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading">
				<div class="heading-location">
					<h2><span class="bold">Contact</span> us</h2>
					<p class="page-location">
						<a href="#">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Contact Us</a>
					</p>
				</div>
				
				<div class="extra-info">
					<span class="capitalize">On the Map</span>
				</div>
			</div>
			
			<div class="full-width google-maps contact-maps">
				<div id="map-canvas"></div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#"><span>Contact details</span></a></li>
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="contact-details">
		<div class="content-holder">
	
			
			<div class="full-width">
				<div class="one-half col-738">
				
					<form id="contact-us-form" class="grey-corner-box">
						<fieldset>
							<legend><span class="bold">Drop</span> us a line</legend>
							<ul>
								<li class="select-three">
									<div>
										<label for="input-name">Name:</label>
										<input type="text" name="contact_name" id="input-name" class="default-input" />
									</div>
									<div>
										<label for="input-email">E-mail:</label>
										<input type="email" name="contact_email" id="input-email" class="default-input" />
									</div>
									<div>
										<label for="input-website">Website:</label>
										<input type="text" name="contact_website" id="input-website" class="default-input" />
									</div>
								</li>
								<li>
									<div>
										<label for="contact_message">Message:</label>
										<textarea id="contact_message" name="contact_message"></textarea>
									</div>
								</li>
								<li>
									<div class="submit-contact default-submit">
										<input type="submit" value="submit" />
									</div>
								</li>
							</ul>
						</fieldset>					
					</form>
				</div>
				
				
				<div class="one-half col-211">
					<h3><span class="bold">Contact</span> details</h3>
					<ul class="icon-list">
						<li class="phone"><span>0040 742 016 756<br />0040 742 756 016</span></li>
						<li class="address"><span>Berlin, Germany, nr. 250330</span></li>
						<li class="e-mail"><span><a href="#">office@automarket.com</a></span></li>
						<li class="website"><span><a href="#"> http://www.automarket.com</a></span></li>
					</ul>
				</div>
				
			</div>
			
			<div class="full-width">
				<h3><span class="bold">Sales</span> reps</h3>
				<ul class="person-list">
					<li>
						<a href="#" class="item-link">
							<img src="../images/person_thumb.gif" alt="Picture" />
						</a>
						<div class="text-content">
							<div class="layer-one">
								<h3>Jessica Thomson</h3>
							</div>
							<p class="info-list layer-two">0040 742 016 753, 0040 742 016 753</p>
							<div class="layer-three">
								<span class="location">Location: Berlin, Germany</span>
								<a href="#" class="details-link">Contact via e-mail</a>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="image-icon">
							<img src="../images/person_thumb.gif" alt="Picture" />
						</a>
						<div class="text-content">
							<div class="layer-one">
								<h3>Jessica Thomson</h3>
							</div>
							<p class="info-list layer-two">0040 742 016 753, 0040 742 016 753</p>
							<div class="layer-three">
								<span class="location">Location: Berlin, Germany</span>
								<a href="#" class="details-link">Contact via e-mail</a>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="image-icon">
							<img src="../images/person_thumb.gif" alt="Picture" />
						</a>
						<div class="text-content">
							<div class="layer-one">
								<h3>Jessica Thomson</h3>
							</div>
							<p class="info-list layer-two">0040 742 016 753, 0040 742 016 753</p>
							<div class="layer-three">
								<span class="location">Location: Berlin, Germany</span>
								<a href="#" class="details-link">Contact via e-mail</a>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="image-icon">
							<img src="../images/person_thumb.gif" alt="Picture" />
						</a>
						<div class="text-content">
							<div class="layer-one">
								<h3>Jessica Thomson</h3>
							</div>
							<p class="info-list layer-two">0040 742 016 753, 0040 742 016 753</p>
							<div class="layer-three">
								<span class="location">Location: Berlin, Germany</span>
								<a href="#" class="details-link">Contact via e-mail</a>
							</div>
						</div>
					</li>
				</ul>
							
				
			</div>
			
			
		</div><!--.content-holder-->
	</section><!--#search-list-->
	
</div><!--#page-content-->
	
<?php 
require_once 'footer.php';
?>
	