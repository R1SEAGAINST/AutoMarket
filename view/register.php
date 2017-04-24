<?php 
require_once 'header.php';


?>

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
             <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone number" name="user_phone" id="user_phone" />
                <span id=""></span>
            </div>
				<div>
					<label for="select-country-origin">Country: <span
						class="mandatory">*</span></label> <br/> <select
						id="select-country-origin" name="user_country">
						
						<option selected="selected">Select</option>
						<option value="AL">Albania</option>
						<option value="AD">Andorra</option>
						<option value="AT">Austria</option>
						<option value="BY">Belarus</option>
						<option value="BE">Belgium</option>
						<option value="BA">Bosnia and Herzegovina</option>
						<option value="BR">Brazil</option>
						<option value="BG">Bulgaria</option>
						<option value="CA">Canada</option>
						<option value="HR">Croatia</option>
						<option value="CY">Cyprus</option>
						<option value="CZ">Czech Republic</option>
						<option value="DK">Denmark</option>
						<option value="EG">Egypt</option>
						<option value="EE">Estonia</option>
						<option value="ET">Ethiopia</option>
						<option value="FO">Faroe Islands</option>
						<option value="FI">Finland</option>
						<option value="FR">France</option>
						<option value="DE">Germany</option>
						<option value="GR">Greece</option>
						<option value="HU">Hungary</option>
						<option value="IS">Iceland</option>
						<option value="IE">Ireland</option>
						<option value="IL">Israel</option>
						<option value="IT">Italy</option>
						<option value="JP">Japan</option>
						<option value="JO">Jordan</option>
						<option value="KW">Kuwait</option>
						<option value="LV">Latvia</option>
						<option value="LB">Lebanon</option>
						<option value="LI">Liechtenstein</option>
						<option value="LT">Lithuania</option>
						<option value="LU">Luxembourg</option>
						<option value="MK">Macedonia</option>
						<option value="MT">Malta</option>
						<option value="MX">Mexico</option>
						<option value="MD">Moldova</option>
						<option value="MC">Monaco</option>
						<option value="ME">Montenegro</option>
						<option value="MA">Morocco</option>
						<option value="NL">Netherlands</option>
						<option value="NZ">New Zealand</option>
						<option value="NG">Nigeria</option>
						<option value="NO">Norway</option>
						<option value="OM">Oman</option>
						<option value="PL">Poland</option>
						<option value="PT">Portugal</option>
						<option value="RO">Romania</option>
						<option value="RU">Russian Federation</option>
						<option value="SM">San Marino</option>
						<option value="SA">Saudi Arabia</option>
						<option value="RS">Serbia</option>
						<option value="SK">Slovakia</option>
						<option value="SI">Slovenia</option>
						<option value="ZA">South Africa</option>
						<option value="KR">South Korea</option>
						<option value="ES">Spain</option>
						<option value="SE">Sweden</option>
						<option value="CH">Switzerland</option>
						<option value="TW">Taiwan</option>
						<option value="TN">Tunisia</option>
						<option value="TR">Turkey</option>
						<option value="UA">Ukraine</option>
						<option value="AE">United Arab Emirates</option>
						<option value="GB">United Kingdom</option>
						<option value="US">USA</option>
					</select>
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
