<?php 
if(!(isset($errorMessage))){
	$errorMessage="";
	
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Automarket</title>
<meta name="description" content="Automarket">

<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/uniform.default.css">
<link rel="stylesheet" href="/assets/css/prettyPhoto.css">
<link rel="stylesheet" href="/assets/css/stylereg.css">
<script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="/assets/js/vendor/jquery-1.8.2.min.js"></script>
<script src="/assets/js/vendor/selectivizr.js"></script>
<script src="/assets/js/vendor/PIE.js"></script>
<script src="/assets/js/plugins/jquery.placeholder.min.js"></script>
<script src="/assets/js/plugins/jquery.uniform.min.js"></script>
<script src="/assets/js/plugins/jquery.flexslider-min.js"></script>
<script src="/assets/js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="/assets/js/plugins/jquery.prettyPhoto.js"></script>
<script src="/assets/js/plugins/jquery.countdown.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDhAC5R4qBoH73-wlg4XHrDOBqCRMb6rPg"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
	<header>
		<div class="content-holder">
			<div class="layer-one">
				<div class="page-titles">
					<h1>

						<a href="http://AutoMarket.com">Automarket</a>

					</h1>
					<?php 
					
					if (!isset($_SESSION['user']) ) { 	
						?>
					<p class="sub-title">Worlds best vehicle website</p>
					
					<?php 
					}
					?>
				</div>

				<div class="dealer-login">
				<?php 
				
				
				if(isset($_SESSION['user'])) {
					$user = json_decode($_SESSION['user']);
					
				
						?>
					<a href="/DealerDetailsController.php" class="dealer-name"><?=$user->username?></a>
					<a href="/LogoutController.php" class="sign-out">Sign Out</a>
				</div>

				<div class="header-buttons">

					<a href="/PostController.php" class="add-an-offer rounded-link-box"> <span class="box-content"> <strong class="plus-sign">+</strong>&nbsp;Add
							An Offer</span></a>

					<div class="pages-top rounded-link-box">
						<a href="#" class="box-content">NAV</a>
						<ul>


							<li><a href="http://AutoMarket.com">Home page</a></li>

							<li><a href="/PostController.php">Add an offer</a></li>

							<li><a href="/LoginController.php">Log in page</a></li>

							<li><a href="/CarListController.php">Car list</a>
								<ul>
									<li><a href="/CarDetailsController.php">Car details</a>
									
									<li>
								
								</ul></li>
							<li><a href="/DealerlistController.php">Dealer list</a>
								<ul>
									<li><a href="/DealerDetailsController.php">Dealer details</a>
									
									<li>
								
								</ul></li>

							<li><a href="/InsuranceController.php">Insurance</a></li>

							<li><a href="/underconstructionController.php">Under construction</a></li>

							<li><a href="/ContactController.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<?php 
					}else{
			?>		
						<a class="dealer-name"></a>
					<a  class="sign-out"></a>
				</div>
				
				<div class="header-buttons">
					<a href="/RegisterController.php" class="add-an-offer rounded-link-box"><span
						class="box-content"><strong class="plus-sign"></strong>&nbsp;Register
							</span></a>
					<div class="pages-top rounded-link-box">

						<a href="/LoginController.php" class="box-content">Login</a>	
					</div>
					</div>
					
<!-- 					<div class="pages-top rounded-link-box"> -->
<!-- 						<a href="#" class="box-content">NAV</a> -->
<!-- 						<ul> -->

<!-- 							<li><a href="/view/index.php">Home page</a></li> -->

<!-- 							<li><a href="/view/add-vehicle.php">Add an offer</a></li> -->

<!-- 							<li><a href="/view/log-in.php">Log in page</a></li> -->

<!-- 							<li><a href="/view/car-list.php">Car list</a> -->
<!-- 								<ul> -->
<!-- 									<li><a href="/view/car-details.php">Car details</a> -->
									
<!-- 									<li> -->
								
<!-- 								</ul></li> -->

<!-- <!-- 							<li><a href="./blog-overview.php">Blog</a> --> 
<!-- <!-- 								<ul> --> 
<!-- <!-- 									<li><a href="./blog-post.php">Blog post</a> --> 
									
<!-- <!-- 									<li> --> 
								
<!-- <!-- 								</ul></li> --> 
<!-- 							<li><a href="/view/dealer-list.php">Dealer list</a> -->
<!-- 								<ul> -->
<!-- 									<li><a href="/view/dealer-details.php">Dealer details</a> -->
									
<!-- 									<li> -->
								
<!-- 								</ul></li> -->

<!-- 							<li><a href="/view/insurance.php">Insurance</a></li> -->

<!-- 							<li><a href="/view/under-construction.php">Under construction</a></li> -->

<!-- 							<li><a href="/view/contact-us.php">Contact</a></li> -->
<!-- 						</ul> -->
<!-- 					</div> -->

				</div>
		
			<?php 
					}
			?>
			
			
			
			
			<!--.layer-one-->

			<div class="layer-two">
				<nav>
					<ul>
						<li class="nav-cars current-item"><a href="/CarListController.php">Cars</a></li>
						<li class="nav-bike"><a href="/underconstructionController.php">Bikes</a></li>
					</ul>
				</nav>

				<form id="header-search" action="/CarListController.php" method="post">
					<input type="text" name="quick_search"
						onfocus="if(this.value == 'Quick Search, Ex: Mercedes-Benz E220') { this.value = ''; }"
						onblur="if(this.value == '') { this.value = 'Quick Search, Ex: Mercedes-Benz E220'; }"
						value="Quick Search, Ex: Mercedes-Benz E220" class="quick-search">
					<select name="type-option">
						<option value="cars" selected="selected">Cars</option>
						<option value="bikes">Bikes</option>
					</select>
					<div class="search-submit">
						<input type="submit" value="Search" />
					</div>
				</form>
			</div>
			<!--.layer-two-->
		</div>
	</header>