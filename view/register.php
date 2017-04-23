



<body>

	
	<div class="signin-form">
    <div class="container">
        <form class="form-signin" method="post" id="register-form" action="../controller/registerController.php">
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
	<script src="js/bootstrap.min.js"></script>


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
