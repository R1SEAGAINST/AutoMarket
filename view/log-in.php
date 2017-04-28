<?php 
require_once 'header.php';
?>	
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">LOGIN</span> user</h2>
					<p class="page-location"> 
						<a href="http://localhost/AutoMarket/view/index.php">Home </a> 
						<span class="greater-than">&gt;&gt;</span> 
						<a href="#">Login or Register</a> 
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

					<form action="/LoginController.php" method="post" id="returning-user" class="grey-corner-box">

					

						<fieldset>
							<legend><span class="bold">Login</span> user</legend>
							<ul>
								<li class="select-two">
									<div id="user_emailDiv">
										<label for="user_email">Email:</label>
										<input type="text" name="email" id="user_email" />
									</div>
									<div id="user_passDiv">
										<label for="user_password">Password:</label>
										<input type="password" name="password" id="user_password" />								
									</div>
								</li>
								<li>
									<div class="checkbox-custom submit-field">
										<span class="submit"><input type="submit" value="Log in" name="submit" id="log-submit"/></span>
									</div>
								</li>
							</ul>
							
						</fieldset>
							<div class="errorr"><?=$errorMessage?></div>
					</form>
				
					
			</div> 
			
				
				
			<div class="one-half col-539" id="folatRight"> 
					<form id="new-user" class="grey-corner-box"> 
						<fieldset> 
						<legend><span class="bold">New</span> user</legend> 
						
 								
 								
 								
					<a href="/RegisterController.php" class="" id="newUserButon"><span
						class="box-content"><strong class="plus-sign"></strong>&nbsp;Register
							</span></a>
					
							
 						</fieldset> 
				
					</form>
				</div>
				
				
				
				
				
				
			</div>
		</div>
	</section><!--#search-list-->
	
</div><!--#page-content-->
<!-- <script src="http://localhost/AutoMarket/assets/js/jquery-3.1.1.min.js"></script> -->
<script src="http://localhost/AutoMarket/assets/js/logScript.js"></script>

	
<?php 
require_once 'footer.php';
?>
	