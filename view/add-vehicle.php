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
						<a href="http://automarket.com">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="">Add an offer</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href=""><span> New offer</span></a></li>
<!-- 					<li><a href="#"><span>2. Preview</span></a></li> -->
<!-- 					<li><a href="#"><span>3. Submit</span></a></li> -->
				</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width light-grey-corner-box box-text-default">
				<h3>Sell ​​your car on <strong>AutoMarket </strong>and benefit from more than 1 million potential buyers every month!</h3>
				<p>Required fields are marked with * </p>
				<p>If you have difficulties in posting an offer on the website, please <a href="/ContactController.php">contact us.</a></p>
			</div>
			
			<div class="full-width sell-form <!--options-form-->">
				<form action="/PostController.php" method="post" enctype="multipart/form-data">
					<fieldset id="vehicle-data">
						<legend><span class="bold">Vehicle</span> data</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer">Manufacturer: <span class="mandatory">*</span></label>
									<select name="manufacturer" id="select-manufacturer">
										<option selected="selected" disabled="">Select</option>
										<?php foreach ($brands as $manufacturer) { ?>
										<option value="<?=$manufacturer['id_brand']?>"><?=$manufacturer['brand_name']?></option>
										<?php } ?>
									</select>
								</div>
								<div>
									<label for="select-model">Model: <span class="mandatory">*</span></label>
									<select name="model" id="select-model">
										<option selected="selected">Select</option>
									</select>
								</div>
								<div>
									<label for="select-euro-type">Euro type:<span class="mandatory">*</span></label>
									<select name="euroType" id="select-euro-type">
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
									<select name="bodyType" id="select-body-type">
										<option selected="selected">-</option>
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
									<label for="select-fuel-type">Fuel Type: <span class="mandatory">*</span></label>
									<select name="fuelType" id="select-fuel-type">
										<option selected="selected">-</option>
										<option value="Diesel">Diesel</option>
										<option value="Petrol">Petrol</option>
										<option value="Electric">Electric</option>
										<option value="Hybrid">Hybrid</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmission: <span class="mandatory">*</span></label>
									<select name="transmission" id="select-transmission">
										<option selected="selected">-</option>
										<option value="Manual">Manual</option>
										<option value="Semiautomatic">Semi-automatic</option>
										<option value="Autotic">automatic transmission</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Doors: <span class="mandatory">*</span></label>
									<select name="doors" id="select-doors">
										<option selected="selected">-</option>
										<option value="2/3">2/3</option>
										<option value="4/5">4/5</option>
										
									</select>
								</div>
								
								<div>
									<label for="select-color">Color: <span class="mandatory">*</span></label>
									<select name="color" id="select-color">
										<option selected="selected">-</option>
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
								
								<li class="select-four">
									<div id="cilindricsDiv">
										<label for="select-cilindrics">Cilindrics (in cm³): <span class="mandatory">*</span></label>
										
										<input type="text" name="cilindrics" id="input-cilindrics" class="default-input" />
											
										</select>
									</div>
								
								
							
									<div id ="hpDiv">
										<label for="select-hp-kw">Hp: <span class="mandatory">*</span></label>
										
										<input type="text" name="hp" id="input-hp" class="default-input" />
									</div>
									
									<div id="fabricDiv">
							
									<label for="select-fabrication">Fabrication: <span class="mandatory">*</span></label>
									
									<input type="text" name="fabrication" id="input-fabrication" class="default-input" />
									
								</div>
									
									
								
							</li><!-- line #3 -->
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
					
					<fieldset id="vehicle-description">
						<legend><span class="bold">Vehicle</span> description</legend>
						<div class="field-content" id="descriptDiv">
							<label for="vehicle-description-field">Some text:</label>
							<textarea id="vehicle-description-field" name="description" class="description"></textarea>
						</div>
					</fieldset>
					
					<fieldset id="vehicle-registration">
						<legend><span class="bold">Vehicle</span> registration</legend>
						<ul class="field-content">
							<li class="select-four">
							
								<div>
									<label for="select-country-registration">Country of
										registration: <span class="mandatory">*</span>
									</label> <select name="country" id="select-country-registration">
										<option selected="selected">-</option>
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

								<div>
									<label for="select-registration-year">&nbsp;</label>
									<select name="year" id="select-registration-year">
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
									<select name="condition" id="select-technical-condition">
										<option selected="selected">-</option>
										<option value="New">New</option>
										<option value="Used">Used</option>
										<option value="Damage">Demaged</option>
										<option value="Pre-registration">Pre-Registration</option>
									</select>
								</div>
								<div id="kilometersDiv">
									<label for="input-kilometers">Kilometers: <span class="mandatory">*</span></label>
									<input type="text" name="kilometers" id="input-kilometers" class="default-input" />
								</div>
								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Vehicle</span> price</legend>
						<ul class="field-content">
							<li class="select-four">
								<div id="priceDiv">
									<label for="input-price">Price: <span class="mandatory">*</span></label>
									<input type="text" name="price" id="input-price" class="default-input" />
								</div>
								<div>
									<br/>
									<p style="font-family:Verdana;" >EUR</p>				
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-photos">
						<legend><span class="bold">Vehicle</span> photos</legend>
						<ul class="field-content">
							<li class="select-six">
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
								</div>	
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
								</div>	
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
<!-- 								</div>	 -->
<!-- 							</li> -->
<!-- 							<li class="select-six"> -->
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
								</div>	
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
								</div>	
								<div>
									<div class="upload-file-container"></div>
									<input type="file" name="files[]"/>
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
								<input name="submit"  type="submit" value="submit" id="add"/>
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

