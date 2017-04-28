<?php 
require_once 'header.php';
?>
	
<div id="page-content">

	<section id="countdown-clock">
		<div class="content-holder">
			
			<h2>We're working on it. Estimated time remaining:</h2>
			<div id="defaultCountdown"></div>
		</div>
	</section><!--#countdown-clock-->
		
	<section id="newsletter-intro">
		<div class="content-holder">
			<div class="standard-text-content">
				<p class="intro-line">In the meantime, while here, you can use the form below to subscribe to our newsletter.</p>
			</div>
			<div class="subscribe-form">
				<input type="text" onfocus="if(this.value == 'E-mail here') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail here'; }" value="E-mail here" class="default-input ">
				<div class="submit"><input type="submit" value="Subscribe" /></div>
			</div>
			
<!-- 			<div id="preview-list" class="full-width"> -->
<!-- 				<div class="one-third grey-corner-box"> -->
<!-- 					<h3><span class="bold">What</span> we have finished</h3> -->
<!-- 					<ul> -->
<!-- 						<li>The main website design</li> -->
<!-- 						<li>User database</li> -->
<!-- 						<li>Dynamic elements</li> -->
<!-- 					</ul> -->
<!-- 				</div> -->
<!-- 				<div class="one-third grey-corner-box"> -->
<!-- 					<h3><span class="bold">What</span> we are working on</h3> -->
<!-- 					<ul> -->
<!-- 						<li>The main website design</li> -->
<!-- 						<li>User database</li> -->
<!-- 						<li>Dynamic elements</li> -->
<!-- 					</ul> -->
<!-- 				</div> -->
<!-- 				<div class="one-third grey-corner-box"> -->
<!-- 					<h3><span class="bold">What</span> we need to do</h3> -->
<!-- 					<ul> -->
<!-- 						<li>The main website design</li> -->
<!-- 						<li>User database</li> -->
<!-- 						<li>Dynamic elements</li> -->
<!-- 					</ul> -->
<!-- 				</div> -->
<!-- 			</div>	 -->
			
<!-- 		</div> -->
	</section><!-- #newsletter-intro -->
	
</div><!--#page-content-->
	
<?php 

require_once 'footer.php';
?>
	