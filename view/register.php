<?php
require_once 'header.php';
?>

<body>



<section id="reg-out">
	<div class="content-holder">
			<div class="full-width">
		<div class="reg-in">
			
				<form action="/AutoMarket/controller/RegisterController.php/" method='post' class="grey-corner-box">
				
				
						<fieldset id="regform">
							<legend id="new-user"><span class="bold">New</span> user</legend>
				
				
					<div id="nameDiv" class="regfield">
						 <input id="name" type="text" placeholder="Your Name" name="user_name" />
					</div>
					
					
					
					
					<div id="emailDiv" class="regfield">
						  <input id="email" type="email"  placeholder="Email" name="user_email"/>
					</div>
					
						
					<div id="phoneDiv" class="regfield">
						
						 <input id="phone" type="text" placeholder="Your Phone"  name="user_phone"/> 
					</div>
					<div id="countryDiv" class="regfield">
					 <select id="country" name="user_country" name="user_country">
										
										<option selected="selected">Select Coutry</option>
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
						
							
						
				<div id="addressDiv" class="regfield">
					
					 <input id="address" type="text"  placeholder="Your Address" name="user_address"/> 
				</div>
					
					
					
				<div id="passDiv" class="regfield">
					
					 <input id="password" type="password"  placeholder="Enter Password" name="password"/> 
				</div>
				<div id="repeatDiv" class="regfield">
				
						
			
						<input id="repeatPass" type="password" placeholder="Repeat Password"/> <span id="CheckPasswordMatch"></span>
				</div>
				<div class="checkbox-custom submit-field" id="mysubmit">
										<span class="submit">
						<input type="submit" value="Create Account" id="reg-reg" name="btn-save"/></span>
				</div>
				
				</fieldset>
			</form>
</div>
</div>
	</div>
	</section>
	
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/regScript.js"></script>

</body>
</html>

<?php
require_once 'footer.php';
?>

