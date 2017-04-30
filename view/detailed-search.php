
<?php
require_once 'header.php';
?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Find a vehicle</span></h2>
					<p class="page-location">
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="">Deatailed Search</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href=""><span> Detailed Search</span></a></li>
<!-- 					<li><a href="#"><span>2. Preview</span></a></li> -->
<!-- 					<li><a href="#"><span>3. Submit</span></a></li> -->
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width sell-form <!--options-form-->">
				<form action="/CarListController.php" method="post">
					<fieldset id="vehicle-data">
						<legend><span class="bold">Choose</span> below</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory"> </span></label>
									<select name="manufacturer" id="select-manufacturer">
										<option selected="selected" disabled="">Select</option>
										<?php foreach ($brands as $manufacturer) { ?>
										<option value="<?=$manufacturer['id_brand']?>"><?=$manufacturer['brand_name']?></option>
										<?php } ?>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory"> </span></label>
									<select name="model" id="select-model">
										<option selected="selected">Select</option>
									</select>
								</div>
								<div>
									<label for="select-euro-type">Euro type:<span class="mandatory"> </span></label>
									<select name="euroType" id="select-euro-type">
										<option selected="selected">Select</option>
										<option value="Euro1">Euro1</option>
										<option value="Euro2">Euro2</option>
										<option value="Euro3">Euro3</option>
										<option value="Euro4">Euro4</option>
										<option value="Euro5">Euro5</option>
										<option value="Euro6">Euro6</option>
										
										
									</select>
								</div>
								
								<div>
									<label for="select-body-type">Body Type: <span class="mandatory"> </span></label>
									<select name="bodyType" id="select-body-type">
										<option selected="selected">Select</option>
										<option value="Cabriolet/Roadster">Cabriolet/Roadster</option>
										<option value="Small Car">Small Car</option>
										<option value="Estete Car">Estete Car</option>
										<option value="Pickup">Off-road vehicle/Pickup</option>
										<option value="Saloon">Saloon</option>
										<option value="Van/Minibus">Van/Minibus</option>
										<option value="Sports Csar">Sports Car</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</li>
							
							<li class="select-four">
								<div>
									<label for="select-fuel-type">Fuel Type: <span class="mandatory"> </span></label>
									<select name="fuelType" id="select-fuel-type">
										<option selected="selected">Select</option>
										<option value="Diesel">Diesel</option>
										<option value="Petrol">Petrol</option>
										<option value="Electric">Electric</option>
										<option value="Hybrid">Hybrid</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmission: <span class="mandatory"> </span></label>
									<select name="transmission" id="select-transmission">
										<option selected="selected">Select</option>
										<option value="Manual">Manual</option>
										<option value="Semiautomatic">Semi-automatic</option>
										<option value="Autotic">automatic transmission</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Doors: <span class="mandatory"> </span></label>
									<select name="doors" id="select-doors">
										<option selected="selected">Select</option>
										<option value="2/3">2/3</option>
										<option value="4/5">4/5</option>
										
									</select>
								</div>
								
								<div>
									<label for="select-color">Color: <span class="mandatory"> </span></label>
									<select name="color" id="select-color">
										<option selected="selected">Select</option>
										<option value="Silver">Silver</option>
										<option value="Grey">Grey</option>
										<option value="Metallic">Metallic</option>
										<option value="Blue">Blue</option>
										<option value="Brown">Brown</option>
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
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-equipment" class="checkbox-selection">
						<legend><span class="bold">Vehicle</span> equipment</legend>
						<ul class="field-content">
							<li><input type="checkbox" value="1" name="checkbox_abs" id="check-abs" /><label for="check-abs">ABS</label></li>
							<li><input type="checkbox" value="1" name="checkbox_eds" id="check-eds" /><label for="check-eds">EDS</label></li>
							<li><input type="checkbox" value="1" name="checkbox_esp" id="check-esp" /><label for="check-esp">ESP</label></li>
							<li><input type="checkbox" value="1" name="checkbox_air_conditioning" id="check-air-conditioning" /><label for="check-air-conditioning">Air conditioning</label></li>
							<li><input type="checkbox" value="1" name="checkbox_airbag" id="check-airbag" /><label for="check-airbag">Air bag</label></li>
							<li><input type="checkbox" value="1" name="checkbox_alarm" id="check-alarm" /><label for="check-alarm">Alarm</label></li>
							<li><input type="checkbox" value="1" name="checkbox_panoramic_roof" id="check-panoramic-roof" /><label for="check-panoramic-roof">Panoramic roof</label></li>
							<li><input type="checkbox" value="1" name="checkbox_protection_framework" id="check-protection-framework" /><label for="check-protection-framework">Protection framework</label></li>
							<li><input type="checkbox" value="1" name="checkbox_tow" id="checkbox-tow" /><label for="checkbox-tow">Tow</label></li>
							<li><input type="checkbox" value="1" name="checkbox_traction_control" id="checkbox-traction-control" /><label for="checkbox-traction-control">Traction control</label></li>
							<li><input type="checkbox" value="1" name="checkbox_board_computer" id="checkbox-board-computer" /><label for="checkbox-board-computer">Board computer</label></li>
							<li><input type="checkbox" value="1" name="checkbox_steering_wheel" id="checkbox-steering-wheel" /><label for="checkbox-steering-wheel">Steering wheel controls</label></li>
<!-- 								new -->
							<li><input type="checkbox" value="1" name="checkbox_gps" id="check-gps" /><label for="check-abs">GPS tracking system</label></li>
							<li><input type="checkbox" value="1" name="checkbox_adaptive_lights" id="check-adaptive-lights" /><label for="check-eds">Adaptive Lights</label></li>
							<li><input type="checkbox" value="1" name="checkbox_smart_tire" id="check-smart-tire" /><label for="check-esp">Smart Tire</label></li>
							<li><input type="checkbox" value="1" name="checkbox_aps" id="check-aps" /><label for="check-aps">APS</label></li>
							<li><input type="checkbox" value="1" name="checkbox_distronic" id="check-distronic" /><label for="check-distronic">Distronic</label></li>
							<li><input type="checkbox" value="1" name="checkbox_ass" id="check-ass" /><label for="check-ass">ASS</label></li>
							<li><input type="checkbox" value="1" name="checkbox_dvd" id="check-dvd" /><label for="check-dvd">DVD</label></li>
							<li><input type="checkbox" value="1" name="checkbox_airmatic" id="check-airmatic" /><label for="check-eds">Airmatic</label></li>
							<li><input type="checkbox" value="1" name="checkbox_keylessgo" id="check-keylessgo" /><label for="check-keylessgo">Keyless Go</label></li>
							<li><input type="checkbox" value="1" name="checkbox_adjustable_wheel" id="check-adjustable-wheel" /><label for="check-adjustable-wheel">Adjustable wheel</label></li>
							<li><input type="checkbox" value="1" name="checkbox_four_wheel" id="check-four-wheel" /><label for="check-four-wheel">Four Wheel Drive</label></li>
							<li><input type="checkbox" value="1" name="checkbox_seven_seats" id="check-seven-seats" /><label for="seven-seats">Seven Seats</label></li>
							<li><input type="checkbox" value="1" name="checkbox_leather_seats" id="check-leather-seats" /><label for="check-leather-seats">Leather seats</label></li>
							<li><input type="checkbox" value="1" name="checkbox_velour_seats" id="check-velour-seats" /><label for="check-velour-seats">Velour Seats/label></li>
							<li><input type="checkbox" value="1" name="checkbox_service_history" id="check-service-history" /><label for="check-service-history">Service History</label></li>
							<li><input type="checkbox" value="1" name="checkbox_led_lights" id="check-led-lights" /><label for="check-led-lights">LED lights</label></li>
							<li><input type="checkbox" value="1" name="checkbox_dsa" id="check-dsa" /><label for="check-dsa">DSA</label></li>
							<li><input type="checkbox" value="1" name="checkbox_traction_control" id="check-traction-control" /><label for="seven-traction-control">Traction control</label></li>
<!-- 								/new  -->
						</ul>
					
					</fieldset>	
					<fieldset id="vehicle-registration">
						<legend><span class="bold">Vehicle</span> registration</legend>
						<ul class="field-content">
							<li class="select-four">
							
								<div>
									<label for="select-country-registration">Country of
										registration: <span class="mandatory"> </span>
									</label> <select name="country" id="select-country-registration">
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

								<div>
										<label for="min-year">Min Year:</label>
										<select name="min-year" id="min-year">
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
									<div>
										<label for="max-year">Max Year:</label>
										<select name="max-year" id="max-year">
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
									<label for="select-technical-condition">Technical condition: <span class="mandatory"> </span></label>
									<select name="condition" id="select-technical-condition">
										<option selected="selected">Select</option>
										<option value="New">New</option>
										<option value="Used">Used</option>
										<option value="Damage">Demaged</option>
										<option value="Pre-registration">Pre-Registration</option>
									</select>
								</div>
								<div id="kilometersDiv">
										<label for="kilometersDiv">Kilometers:</label>
										<select name="kilometers" id="kilometers">
											<option selected="selected">Select</option>
											<option value="9999">Less than 10000</option>	
											<?php 
										for($index=10000; $index <= 150000; $index+=10000){
											echo "<option value=".$index."> Over ".$index."</option>";
										}
										?>
											
									</select>
								</div>
								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Vehicle</span> price</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
										<label for="min-price">Min Price:</label>
										<select name="min-price" id="min-price">
										<option selected="selected">Select</option>
										<?php 
										for($index=0; $index <= 20000; $index+=500){
											echo "<option value=".$index.">".$index."</option>";
										}
										?>
										</select>
									</div>
									<div>
										<label for="max-price">Max Price:</label>
										<select name="max-price" id="max-price">
											<option selected="selected">Select</option>
											<?php 
										for($index=10000; $index <= 200000; $index+=10000){
											echo "<option value=".$index.">".$index."</option>";
										}
										?>
										</select>					
									</div>
								<div>
									<br/>
									<p style="font-family:Verdana;" >EUR</p>				
								</div>
							</li>
						</ul>
					</fieldset>
					
			
					<fieldset id="vehicle-submit" class="checkbox-selection">
						<div>
							<div class="agree-checkbox">
								<input type="checkbox" value="agreed" id="check-agreed" /><label for="check-agreed">Show posts with pictures. </label>
							</div>
							<div class="submit-vehicle default-submit">
								<input name="submit"  type="submit" value="Search" id="add"/>
							</div>
						</div>
							
					</fieldset>
					<div class="errorr"><?=$errorMessage?></div>
				</form>				
			</div>
			
		</div>
	</section>
	
</div><!--#page-content-->

<script src="http://localhost/AutoMarket/assets/js/postScript.js"></script>


<script type="text/javascript">
	$(function() {
		$('#select-manufacturer').on('change', function() {
			var brandid = $('#select-manufacturer').val();

			$.getJSON('/ajaxController.php', { brandid: brandid }, function(response) {
				var modelSelect = $('#select-model');

				$(modelSelect).find('option').remove();
				$(modelSelect).append('<option selected="selected">Select</option>');

				$(modelSelect).val('Select').change();

				if (response) {
					$.each(response, function(key, value) {
						var option = '<option value="'+value.id_model+'">'+value.model_name+'</option>';
						$(modelSelect).append(option);
					});
				}
			});
		});
	});
</script>

	
<?php 
require_once('footer.php');
?>

