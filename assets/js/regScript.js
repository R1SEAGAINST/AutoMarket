var nameField = document.getElementById('name');
var emailField = document.getElementById('email');
var phoneField = document.getElementById('phone');
var passField = document.getElementById('password');
var repPassField = document.getElementById('repeatPass');
var countryField = document.getElementById('country');
var addressField = document.getElementById('address');
var submit = document.getElementById('reg-reg');
//var allNamesArr = document.getElementsByClassName("regfields");



var nameError = false;
var emailError = false;
var phoneError = false;
var passError = false;
var repPassError = false;
var countryError = false;
var hasErrors = false;

//var isEmpty = true;
submit.onclick = function (){
	
	    if ((nameField.value == "") || (emailField.value == "")||(phoneField.value == "") ||
	    	 (passField.value == "") || (repPassField.value == "") || (countryField.value == "Select Country")){
	
		hasErrors = true;
	    }
		document.forms[1].onsubmit = function(event) {
			if (hasErrors) {
				event.preventDefault();
			}
		}
	
	
}

nameField.onblur = function(){
	
	if ((nameField.value.trim().length < 3) || (/d+/.test(nameField.value))) {
	
			var container = document.getElementById("nameDiv");
			var errorMessage = document.createElement('span');
			errorMessage.className = 'errorr';
			errorMessage.textContent = 'Name shoud be at least 3 letters!';
			container.appendChild(errorMessage);
			nameError = true;
		} else {
			nameError = false;
			
		}
	
};

nameField.onfocus = function() {
	var errorMessage = document.querySelector("#nameDiv > .errorr");
	if (errorMessage) {
		errorMessage.parentNode.removeChild(errorMessage);
		nameError = false;
	}
};





function isValidEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function isExistingEmail(email){
		
		$.get('http://localhost/AutoMarket/model/checkEmail.php?email=' + emailField.value,
				function(data){
					if (data == 'true') {
						var container = document.getElementById("emailDiv");
						var errorMessage = document.createElement('span');
						errorMessage.className = 'errorr';
						errorMessage.textContent = 'Existing email!';
						container.appendChild(errorMessage);
						
						
						emailError = true;
					} else {
						
						emailError = false;						
					}
			
	});
		
		emailField.onfocus = function() {
			var errorMessage = document.querySelector("#emailDiv > .errorr");
			if (errorMessage) {
				errorMessage.parentNode.removeChild(errorMessage);
				emailError = false;
			}
		};				
}


emailField.onblur = function(){
	if(!(isValidEmail(emailField.value))){
	
					var container = document.getElementById("emailDiv");
					var errorMessage = document.createElement('span');
					errorMessage.className = 'errorr';
					errorMessage.textContent = 'Email is not valid!';
					container.appendChild(errorMessage);
					
					
					emailError = true;
				} else {
					
					emailError = false;
					
					isExistingEmail(emailField.value);
									
				}
		
};
	
	emailField.onfocus = function() {
		var errorMessage = document.querySelector("#emailDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			emailError = false;
		}
	};
	
	
	function isValid(phone) {
		  var phoneRe = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/;
		  var digits = phone.replace(/\D/g, "");
		  return phoneRe.test(digits);
		}

	
	phoneField.onblur = function(){
		
		if((phoneField.value.length < 6 ) || !(isValid(phoneField.value)) ) {
		
				var container = document.getElementById("phoneDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Phone is not valid!';
				container.appendChild(errorMessage);
				phoneError = true;
			} else {
				phoneError = false;
				
			}
		
	};

	

	phoneField.onfocus = function() {
		var errorMessage = document.querySelector("#phoneDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			phoneError = false;
		}
	};

	passField.onblur = function(){
		
		if ((passField.value.trim().length < 8)) {
		
				var container = document.getElementById("passDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Password shoud be at least 8 symbols!';
				container.appendChild(errorMessage);
				passError = true;
			} else {
				passError = false;
				
			}
		
	};
	passField.onfocus = function() {
		var errorMessage = document.querySelector("#passDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			passError = false;
		}
	};
	
	countryField.onblur = function(){
		
		if (countryField.value == 'Select Country') {
		
				var container = document.getElementById("countryDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Choose country, pleace!';
				container.appendChild(errorMessage);
				countryError = true;
			} else {
				countryError = false;
				
			}
		
	};

	countryField.onfocus = function() {
		var errorMessage = document.querySelector("#countryDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			countryError = false;
		}
	};

	
	
	
	$(function() {
	    $("#repeatPass").keyup(function() {
	        var password = $("#password").val();
	        $("#CheckPasswordMatch").html(password == $(this).val() ? "Passwords match." : "Passwords do not match!");
	    });

	});

	
	
repPassField.onblur = function(){
		
		if ((repPassField.value.trim().length < 8)) {
		
				var container = document.getElementById("repeatDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Passwords do not match!';
				container.appendChild(errorMessage);
				repPassError = true;
			} else {
				repPassError = false;
				
			}
		
	};

	repPassField.onfocus = function() {
		var errorMessage = document.querySelector("#repeatDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			repPassError = false;
		}
	};
	
document.forms[1].onsubmit = function(event) {
	if( (hasErrors) || (nameError) || (emailError) || (passError) || (repPassError) || (coutryError) || (phoneError)){
		event.preventDefault();
	}

};

