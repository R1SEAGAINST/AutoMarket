<?php 
if(!(isset($errorMessage))){
	$errorMessage="";
	session_start();
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

<link rel="stylesheet" href="http://localhost/AutoMarket/assets/css/main.css">
<link rel="stylesheet" href="http://localhost/AutoMarket/assets/css/uniform.default.css">
<link rel="stylesheet" href="http://localhost/AutoMarket/assets/css/prettyPhoto.css">
<link rel="stylesheet" href="http://localhost/AutoMarket/assets/css/stylereg.css">
<script src="http://localhost/AutoMarket/assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="http://localhost/AutoMarket/assets/js/vendor/jquery-1.8.2.min.js"></script>
<script src="http://localhost/AutoMarket/assets/js/vendor/selectivizr.js"></script>
<script src="http://localhost/AutoMarket/assets/js/vendor/PIE.js"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.placeholder.min.js"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.uniform.min.js"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.flexslider-min.js"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.prettyPhoto.js"></script>
<script src="http://localhost/AutoMarket/assets/js/plugins/jquery.countdown.js"></script>

<!--  register -->
<link href="http://localhost/AutoMarket/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://localhost/AutoMarket/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<link href="http://localhost/AutoMarket/assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="http://localhost/AutoMarket/assets/js/script.js"></script>



<script src="http://localhost/AutoMarket/assets/js/plugins.js"></script>
<script src="http://localhost/AutoMarket/assets/js/main.js"></script>
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
						<a href="http://localhost/AutoMarket/view/index.php">Automarket</a>
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
					<a href="./dealer-details.php" class="dealer-name"><?=$user->username?></a>
					<a href="../model/logout.php" class="sign-out">Sign Out</a>
				</div>

				<div class="header-buttons">
					<a href="http://localhost/AutoMarket/view/add-vehicle.php" class="add-an-offer rounded-link-box"><span
						class="box-content"><strong class="plus-sign">+</strong>&nbsp;Add
							An Offer</span></a>
					<div class="pages-top rounded-link-box">
						<a href="#" class="box-content">NAV</a>
						<ul>

							<li><a href="http://localhost/AutoMarket/view/index.php">Home page</a></li>

							<li><a href="http://localhost/AutoMarket/view/add-vehicle.php">Add an offer</a></li>

							<li><a href="http://localhost/AutoMarket/view/log-in.php">Log in page</a></li>

							<li><a href="http://localhost/AutoMarket/view/car-list.php">Car list</a>
								<ul>
									<li><a href="http://localhost/AutoMarket/view/car-details.php">Car details</a>
									
									<li>
								
								</ul></li>

<!-- 							<li><a href="./blog-overview.php">Blog</a> -->
<!-- 								<ul> -->
<!-- 									<li><a href="./blog-post.php">Blog post</a> -->
									
<!-- 									<li> -->
								
<!-- 								</ul></li> -->
							<li><a href="http://localhost/AutoMarket/view/dealer-list.php">Dealer list</a>
								<ul>
									<li><a href="http://localhost/AutoMarket/view/dealer-details.php">Dealer details</a>
									
									<li>
								
								</ul></li>

							<li><a href="http://localhost/AutoMarket/view/insurance.php">Insurance</a></li>

							<li><a href="http://localhost/AutoMarket/view/under-construction.php">Under construction</a></li>

							<li><a href="http://localhost/AutoMarket/view/contact-us.php">Contact</a></li>
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
					<a href="http://localhost/AutoMarket/view/register.php" class="add-an-offer rounded-link-box"><span
						class="box-content"><strong class="plus-sign"></strong>&nbsp;Register
							</span></a>
					<div class="pages-top rounded-link-box">
						<a href="http://localhost/AutoMarket/view/log-in.php" class="box-content">Login</a>	
					</div>
					<div class="pages-top rounded-link-box">
						<a href="#" class="box-content">NAV</a>
						<ul>

							<li><a href="http://localhost/AutoMarket/view/index.php">Home page</a></li>

							<li><a href="http://localhost/AutoMarket/view/add-vehicle.php">Add an offer</a></li>

							<li><a href="http://localhost/AutoMarket/view/log-in.php">Log in page</a></li>

							<li><a href="http://localhost/AutoMarket/view/car-list.php">Car list</a>
								<ul>
									<li><a href="http://localhost/AutoMarket/view/car-details.php">Car details</a>
									
									<li>
								
								</ul></li>

<!-- 							<li><a href="./blog-overview.php">Blog</a> -->
<!-- 								<ul> -->
<!-- 									<li><a href="./blog-post.php">Blog post</a> -->
									
<!-- 									<li> -->
								
<!-- 								</ul></li> -->
							<li><a href="http://localhost/AutoMarket/view/dealer-list.php">Dealer list</a>
								<ul>
									<li><a href="http://localhost/AutoMarket/view/dealer-details.php">Dealer details</a>
									
									<li>
								
								</ul></li>

							<li><a href="http://localhost/AutoMarket/view/insurance.php">Insurance</a></li>

							<li><a href="http://localhost/AutoMarket/view/under-construction.php">Under construction</a></li>

							<li><a href="http://localhost/AutoMarket/view/contact-us.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php 
					}
			?>
			
			
			
			
			<!--.layer-one-->

			<div class="layer-two">
				<nav>
					<ul>
						<li class="nav-cars current-item"><a href="http://localhost/AutoMarket/view/car-list.php">Cars</a></li>
						<li class="nav-bike"><a href="#">Bikes</a></li>
					</ul>
				</nav>

				<form id="header-search" action="http://localhost/AutoMarket/view/car-list.php" method="post">
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