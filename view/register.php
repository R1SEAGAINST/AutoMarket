
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 lt-ie8 lt-ie9"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Automarket - Log In</title>
<meta name="description" content="Automarket">

<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/uniform.default.css">
<link rel="stylesheet" href="../css/prettyPhoto.css">
<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
<script src="../js/vendor/jquery-1.8.2.min.js"></script>
<script src="../js/vendor/selectivizr.js"></script>
<script src="../js/vendor/PIE.js"></script>
<script src="../js/plugins/jquery.placeholder.min.js"></script>
<script src="../js/plugins/jquery.uniform.min.js"></script>
<script src="../js/plugins/jquery.flexslider-min.js"></script>
<script src="../js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="../js/plugins/jquery.prettyPhoto.js"></script>
<script src="../js/plugins/jquery.countdown.js"></script>

<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript"
	src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js">
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css"
	media="screen">
<script type="text/javascript" src="../js/script.js"></script>

<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>
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
						<a href="./index.php">Automarket</a>
					</h1>
					<p class="sub-title">This is a title</p>
				</div>

				<div class="dealer-login">
					<a href="./dealer-details.php" class="dealer-name">Dealer Name</a>
					<a href="#" class="sign-out">Sign Out</a>
				</div>

				<div class="header-buttons">
					<a href="./add-vehicle.php" class="add-an-offer rounded-link-box"><span
						class="box-content"><strong class="plus-sign">+</strong>&nbsp;Add
							An Offer</span></a>
					<div class="pages-top rounded-link-box">
						<a href="#" class="box-content">Pages</a>
						<ul>

							<li><a href="./index.php">Home page</a></li>

							<li><a href="./add-vehicle.php">Add an offer</a></li>

							<li><a href="./log-in.php">Log in page</a></li>

							<li><a href="./car-list.php">Car list</a>
								<ul>
									<li><a href="./car-details.php">Car details</a>
									
									<li>
								
								</ul></li>

							<li><a href="./blog-overview.php">Blog</a>
								<ul>
									<li><a href="./blog-post.php">Blog post</a>
									
									<li>
								
								</ul></li>
							<li><a href="./dealer-list.php">Dealer list</a>
								<ul>
									<li><a href="./dealer-details.php">Dealer details</a>
									
									<li>
								
								</ul></li>

							<li><a href="./insurance.php">Insurance</a></li>

							<li><a href="./under-construction.php">Under construction</a></li>

							<li><a href="./contact-us.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--.layer-one-->

			<div class="layer-two">
				<nav>
					<ul>
						<li class="nav-cars current-item"><a href="./car-list.php">Cars</a></li>
						<li class="nav-bike"><a href="#">Bikes</a></li>
						<li class="nav-truck"><a href="#">Trucks</a></li>
						<li class="nav-parts"><a href="#">Parts</a></li>
					</ul>
				</nav>

				<form id="header-search" action="./car-list.php" method="post">
					<input type="text" name="quick_search"
						onfocus="if(this.value == 'Quick Search, Ex: Mercedes-Benz E220') { this.value = ''; }"
						onblur="if(this.value == '') { this.value = 'Quick Search, Ex: Mercedes-Benz E220'; }"
						value="Quick Search, Ex: Mercedes-Benz E220" class="quick-search">
					<select name="type-option">
						<option value="cars" selected="selected">Cars</option>
						<option value="bikes">Bikes</option>
						<option value="trucks">Trucks</option>
						<option value="Parts">Parts</option>
					</select>
					<div class="search-submit">
						<input type="submit" value="Search" />
					</div>
				</form>
			</div>
			<!--.layer-two-->
		</div>
	</header>


<body>
<div class="signin-form">
    <div class="container">
        <form class="form-signin" method="post" id="register-form">
            <h2 class="form-signin-heading">Sign Up</h2><hr />
            <div id="error">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                <span id="check-e"></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
            </div>
            <hr />
                <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                </button>
            </div>
        </form>
    </div>
</div>
</body>

<footer>
	<div class="layer-one">
		<div class="content-holder">
			<nav>
				<ul>
					<li><a href="#"><span class="bold">About</span> us</a>
						<ul>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Our Partners</a></li>
							<li><a href="#">Advertising Online</a></li>
							<li><a href="#">Site Map</a></li>
						</ul></li>
					<li><a href="#"><span class="bold">Need</span> Help?</a>
						<ul>
							<li><a href="#">How do I add an offer?</a></li>
							<li><a href="#">How do I find a vehicle</a></li>
							<li><a href="#">Price list</a></li>
							<li><a href="#">Office for car dealers</a></li>
						</ul></li>
					<li><a href="#"><span class="bold">User</span> area</a>
						<ul>
							<li><a href="#">Add an offer</a></li>
							<li><a href="#">Register dealder</a></li>
							<li><a href="#">Login Dealer</a></li>
							<li><a href="#">News</a></li>
						</ul></li>
				</ul>
			</nav>

			<div class="find-us-here col-amount">
				<h3>
					<span class="bold">Find</span> us here
				</h3>
				<ul class="social-list">
					<li class="social-facebook"><a href="#">Facebook</a></li>
					<li class="social-twitter"><a href="#">Twitter</a></li>
					<li class="social-google"><a href="#">Google</a></li>
				</ul>
				<p class="note">Become our fan, and we will love you forever</p>
			</div>
		</div>
	</div>
	<!--.layer-one-->

	<div class="layer-two">
		<div class="content-holder">
			<p class="copyright">&copy; 2012 Automarket. All Rights Reserved</p>
			<p class="webdesign-author">
				Webdesign by <a href="#">ClaPat Studio</a>
		
		</div>
	</div>
	<!--.layer-two-->
</footer>

</body>
</html>
