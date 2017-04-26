<?php 

require_once 'header.php';


?>
	
	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Vehicle</span> Insurance</h2>
					<p class="page-location">
						<a href="#">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Vehicle Insurance</a>
					</p>
				</div>
			
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#">Choose from below</a></li>
				</ul>
			</nav>
		</div>
	</section><!--#car-pagination -->
		
	<section id="log-in">
		<div class="content-holder">
			<div class="full-width">
				
				<div class="one-half col-539">

					<form action="../controller/LoginController.php" method="post" id="returning-user" class="grey-corner-box">

					

						<fieldset>
							<legend><span class="bold">Returning</span> user</legend>
							<ul>
								<li class="select-two">
									<div>
										<label for="username">Email:</label>
										<input type="text" name="email" id="username" />
									</div>
									<div>
										<label for="password">Password:</label>
										<input type="password" name="password" id="password" />								
									</div>
								</li>
								<li>
									<div class="checkbox-custom submit-field">
										<span class="submit"><input type="submit" value="Log in" name="submit"/></span>
										<input type="checkbox" value="remember_me" id="remember-me" checked="checked" />
										<label for="remember-me">Remember me</label>
									</div>
								</li>
							</ul>
							
						</fieldset>
					
					
					</form>
				</div>
				
				
				<div class="one-half col-539">
					<form id="new-user" class="grey-corner-box">
						<fieldset>
							<legend><span class="bold">New</span> user</legend>
							<ul>
								<li class="select-two">
									<div>
										<input type="radio" name="type" value="register" id="register" />
										<label for="register">Register<span class="description">Create an account for dealers</span></label>
									</div>
									<div>
										<input type="radio" name="type" value="add-offer" id="add-offer" />
										<label for="add-offer">Add an offer<span class="description">Submit your personal offer</span></label>
									</div>
								</li>
								<li>
									<div class="checkbox-custom submit-field">
										<span class="submit"><input type="submit" value="Register" /></span>
									</div>
								</li>
							
							
							</ul>
							
							
						</fieldset>
						<div class="error"><?=$errorMessage?></div>
					
					</form>
				</div>
				
				
				
				
				
				
			</div>
		</div>
	</section><!--#search-list-->
	
</div><!--#page-content-->
	
<?php 
require_once 'footer.php';

?>
	