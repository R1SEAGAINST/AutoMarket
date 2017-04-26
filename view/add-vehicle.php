	

<?php 
require_once 'header.php';
?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Sell your vehicle</span></h2>
					<p class="page-location">
						<a href="http://localhost/AutoMarket/view/index.php">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Add an offer</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#"><span>1. New offer</span></a></li>
					<li><a href="#"><span>2. Preview</span></a></li>
					<li><a href="#"><span>3. Submit</span></a></li>
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width light-grey-corner-box box-text-default">
				<h3>Sell ​​your car on <strong>AutoMarket </strong>and benefit from more than 1 million potential buyers every month!</h3>
				<p>Required fields are marked with * </p>
				<p>Please post offers only on the car (parts are a special category).</p>
				<p>If you are a dealer, please visit the dealers section</p>
				<p>If you have difficulties in posting an offer on the website, please call 0742 016 570</p>
			</div>
			
			<div class="full-width sell-form <!--options-form-->">
				<form>
					<fieldset id="vehicle-data">
						<legend><span class="bold">Vehicle</span> data</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory">*</span></label>
									<select id="select-manufacturer">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory">*</span></label>
									<select id="select-model">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-euro-type">Euro type:<span class="mandatory">*</span></label>
									<select id="select-euro-type">
										<option selected="selected">-</option>
										<option value="Euro1">Euro1</option>
										<option value="Euro2">Euro2</option>
										<option value="Euro3">Euro3</option>
										<option value="Euro4">Euro4</option>
										<option value="Euro5">Euro5</option>
										<option value="Euro6">Euro6</option>
										
										
									</select>
								</div>
								
								<div>
									<label for="select-body-type">Body Type: <span class="mandatory">*</span></label>
									<select id="select-body-type">
										<option selected="selected">-</option>
										<option value="Cabriolet/Roadster">Cabriolet/Roadster</option>
										<option value="Small Car">Small Car</option>
										<option value="Estete Car">Estete Car</option>
										<option value="Off-road Vehicle/Pickup">Off-road vehicle/Pickup</option>
										<option value="Saloon">Saloon</option>
										<option value="Van/Minibus">Van/Minibus</option>
										<option value="Sports Csar">Sports Car</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</li>
							
							<li class="select-four">
								<div>
									<label for="select-fuel-type">Fuel Type: <span class="mandatory">*</span></label>
									<select id="select-fuel-type">
										<option selected="selected">-</option>
										<option value="Diesel">Diesel</option>
										<option value="Petrol">Petrol</option>
										<option value="Electric">Electric</option>
										<option value="Hybrid">Hybrid</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmission: <span class="mandatory">*</span></label>
									<select id="select-transmission">
										<option selected="selected">-</option>
										<option value="Manuel">Manuel</option>
										<option value="Semi-automatic">Semi-automatic</option>
										<option value="Autotic trnsmission">automatic transmission</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Doors: <span class="mandatory">*</span></label>
									<select id="select-doors">
										<option selected="selected">Select</option>
										<option value="2/3">2/3</option>
										<option value="4/5">4/5</option>
										
									</select>
								</div>
								
								<div>
									<label for="select-color">Color: <span class="mandatory">*</span></label>
									<select id="select-color">
										<option selected="selected">-</option>
										<option value="Silver">Silver</option>
										<option value="Grey">Grey</option>
										<option value="Metalic">Metalic</option>
										<option selected="Blue">Blue</option>
										<option value="Broun">Broun</option>
										<option value="Orange">Orange</option>
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Black">Black</option>
										<option value="Green">Green</option>
										<option value="Gold">Gold</option>
										<option value="Yellow">Yellow</option>
										<option value="Beage">Beage</option>
									</select>
								</div>
								
								</li><!-- line #2 -->
								
								<li class="select-four">
									<div>
										<label for="select-cilindrics">Cilindrics (in cm³): <span class="mandatory">*</span></label>
										
										<input type="text" name="chassis_number" id="input-cilidrics" class="default-input" />
											
										</select>
									</div>
								
								
							
									<div>
										<label for="select-hp-kw">Hp / Kw: <span class="mandatory">*</span></label>
										
										<input type="text" name="chassis_number" id="input-hp" class="default-input" />
									</div>
									
									<div>
									<label for="select-fabrication">Fabrication: <span class="mandatory">*</span></label>
									
									<input type="text" name="chassis_number" id="input-fabrication" class="default-input" />
									
								</div>
									
									
								
							</li><!-- line #3 -->
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-equipment" class="checkbox-selection">
						<legend><span class="bold">Vehicle</span> equipment</legend>
						<ul class="field-content">
							<li><input type="checkbox" value="checkbox_abs" id="check-abs" /><label for="check-abs">ABS</label></li>
							<li><input type="checkbox" value="checkbox_eds" id="check-eds" /><label for="check-eds">EDS</label></li>
							<li><input type="checkbox" value="checkbox_esp" id="check-esp" /><label for="check-esp">ESP</label></li>
							<li><input type="checkbox" value="checkbox_air_conditioning" id="check-air-conditioning" /><label for="check-air-conditioning">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_airbag" id="check-airbag" /><label for="check-airbag">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_alarm" id="check-alarm" /><label for="check-alarm">Air conditioning</label></li>
							<li><input type="checkbox" value="checkbox_panoramic_roof" id="check-panoramic-roof" /><label for="check-panoramic-roof">Panoramic roof</label></li>
							<li><input type="checkbox" value="checkbox_protection_framework" id="check-protection-framework" /><label for="check-protection-framework">Protection framework</label></li>
							<li><input type="checkbox" value="checkbox_tow" id="checkbox-tow" /><label for="checkbox-tow">Tow</label></li>
							<li><input type="checkbox" value="checkbox_traction_control" id="checkbox-traction-control" /><label for="checkbox-traction-control">Traction control</label></li>
							<li><input type="checkbox" value="checkbox_board_computer" id="checkbox-board-computer" /><label for="checkbox-board-computer">Board computer</label></li>
							<li><input type="checkbox" value="checkbox_steering_wheel" id="checkbox-steering-wheel" /><label for="checkbox-steering-wheel">Steering wheel controls</label></li>
						</ul>
					
					</fieldset>
					
					<fieldset id="vehicle-description">
						<legend><span class="bold">Vehicle</span> description</legend>
						<div class="field-content">
							<label for="vehicle-description-field">Some text:</label>
							<textarea id="vehicle-description-field" name="description" class="description"></textarea>
						</div>
					</fieldset>
					
					<fieldset id="vehicle-registration">
						<legend><span class="bold">Vehicle</span> registration</legend>
						<ul class="field-content">
							<li class="select-four">
							
								<div>
									<label for="select-country-registration">Country of registration: <span class="mandatory">*</span></label>
									<select id="select-country-registration">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							
								<div>
									<label for="select-registration-year">&nbsp;</label>
									<select id="select-registration-year">
										<option selected="selected">Year</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1985">1985</option>
										<option value="1980">1980</option>
										<option value="1975">1975</option>
										<option value="1970">1970</option>
										<option value="1965">1965</option>
										<option value="1960">1960</option>
										<option value="1900">1900</option>
										
									
									</select>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-condition">
						<legend><span class="bold">Vehicle</span> condition</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-technical-condition">Technical condition: <span class="mandatory">*</span></label>
									<select id="select-technical-condition">
										<option selected="selected">Select</option>
										<option value="New">New</option>
										<option value="Used">Used</option>
										<option value="Damage">Damage</option>
										<option value="Damage">Pre-Registration</option>
									</select>
								</div>
								<div>
									<label for="input-kilometers">Kilometers: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-kilometers" class="default-input" />
								</div>
								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Vehicle</span> price</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-price">Price: <span class="mandatory">*</span></label>
									<input type="text" name="chassis_number" id="input-price" class="default-input" />
								</div>
								<div>
									<label for="select-currency">Currency: <span class="mandatory">*</span></label>
									<select id="select-currency">
										<option selected="selected">Euro</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div class="checkbox-custom">
									<div><input type="checkbox" value="checkbox_abs" id="check-price-negotiable"/></div>
									<label for="check-price-negotiable">&nbsp; Price Negotiable</label>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-photos">
						<legend><span class="bold">Vehicle</span> photos</legend>
						<ul class="field-content">
							<li class="select-six">
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>
								<div class="upload-file-container">
									<span>
										<input type="file" name="files[]" />
									</span>
								</div>								
							</li>
						</ul>
					</fieldset>
					
					
					
					<fieldset id="vehicle-submit" class="checkbox-selection">
						<div>
							<div class="agree-checkbox">
								<input type="checkbox" value="agreed" id="check-agreed" /><label for="check-agreed">I agree to the Terms and Conditions. </label>
							</div>
							<div class="submit-vehicle default-submit">
								<input type="submit" value="submit" />
							</div>
						</div>
							
					</fieldset>
					
				</form>				
			</div>
			
		</div>
	</section>
	
</div><!--#page-content-->
	
<?php 

