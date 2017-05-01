<?php
require_once 'header.php';
?>

<body>
<section id="reg-out">
	<div class="content-holder">
			<div class="full-width">
		<div class="reg-in">
			
				<form action="/RegisterController.php" method='post' enctype="multipart/form-data" class="grey-corner-box">
				
				
						<fieldset id="regform">
							<legend id="new-user"><span class="bold">New</span> user</legend>
				
				
					<div id="nameDiv" class="regfield">
						 <input id="name" type="text" placeholder="Your Name" name="user_name" class="regfields"/>
					</div>
					
					
					
					
					<div id="emailDiv" class="regfield">
						  <input id="email" type="email"  placeholder="Email" name="user_email" class="regfields"/>
					</div>
					
						
					<div id="phoneDiv" class="regfield">
						
						 <input id="phone" type="text" placeholder="Your Phone"  name="user_phone" class="regfields"/> 
					</div>
					
					
					<fieldset id="vehicle-photos">
						
						<ul class="field-content">
							<li class="select-six">
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
								</div>	
								<div>
								
							</li>
						</ul>
					</fieldset>
					
					
					
					
					<div id="countryDiv" class="regfield">
					 <select id="country" name="user_country"  class="regfields">
										
										<option selected="selected">Select Country</option>
									
										<option value="Albaia">Albania</option>
										<option value="Andorra">Andorra</option>
										<option value="Austria">Austria</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Brazil">Brazil</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Canada">Canada</option>
										<option value="Croatia">Croatia</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Egypt">Egypt</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="Germany">Germany</option>
										<option value="Greece">Greece</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Malta">Malta</option>
										<option value="Mexico">Mexico</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Morocco">Morocco</option>
										<option value="Netherlands">Netherlands</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="San Marino">San Marino</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Serbia">Serbia</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Korea">South Korea</option>
										<option value="Spain">Spain</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="USA">USA</option>
									</select>
								</div>
						
							
						
				<div id="addressDiv" class="regfield">
					
					 <input id="address" type="text"  placeholder="Your Address" name="user_address" class="regfields"/> 
				</div>
					
					
					
				<div id="passDiv" class="regfield">
					
					 <input id="password" type="password"  placeholder="Enter Password" name="password" class="regfields"/> 
				</div>
				<div id="repeatDiv" class="regfield" >
				
						
			
						<input id="repeatPass" type="password" placeholder="Repeat Password" class="regfields" /> <span id="CheckPasswordMatch"></span>
				</div>
				<div class="checkbox-custom submit-field" id="mysubmit">
										<span class="submit">
						<input type="submit" value="Create Account" id="reg-reg" name="btn-save" /></span>
				</div>
				<br/>
			<div class="errorr"><?=$errorMessage?></div>
				
				</fieldset>
				
			</form>
</div>
</div>
	</div>
	</section>
	


	<script src="http://localhost/AutoMarket/assets/js/regScript.js"></script>

<?php
require_once 'footer.php';
?>