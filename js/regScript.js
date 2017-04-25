var nameField = document.getElementById('name');
var emailField = document.getElementById('email');
var phoneField = document.getElementById('phone');
var passField = document.getElementById('password');
var repPassField = document.getElementById('repeatPass');
var countryField = document.getElementById('country');




var hasErrors = false;


nameField.onblur = function(){
	
	if ((nameField.value.trim().length < 3)) {
	
			var container = document.getElementById("nameDiv");
			var errorMessage = document.createElement('span');
			errorMessage.className = 'errorr';
			errorMessage.textContent = 'Name shoud be at least 3 smbols!';
			container.appendChild(errorMessage);
			hasErrors = true;
		} else {
			hasErrors = false;
			
		}
	
};

nameField.onfocus = function() {
	var errorMessage = document.querySelector("#nameDiv > .errorr");
	if (errorMessage) {
		errorMessage.parentNode.removeChild(errorMessage);
		hasErrors = false;
	}
};





function isValidEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


emailField.onblur = function(){
	if(!(isValidEmail(emailField.value))){
	
					var container = document.getElementById("emailDiv");
					var errorMessage = document.createElement('span');
					errorMessage.className = 'errorr';
					errorMessage.textContent = 'Email is not valid!';
					container.appendChild(errorMessage);
					document.getElementById('email').style.border = "1px solid red";
					
					hasErrors = true;
				} else {
					
					hasErrors = false;
					document.getElementById('email').style.border = "1px solid black";
				}
		
				
};
	
	emailField.onfocus = function() {
		var errorMessage = document.querySelector("#emailDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};
	
	

emailField.onblur = function(){
	$.get('http://localhost/AutoMarket/model/checkEmail.php?email=' + emailField.value,
			function(data){
				if (data == 'true') {
					var container = document.getElementById("emailDiv");
					var errorMessage = document.createElement('span');
					errorMessage.className = 'errorr';
					errorMessage.textContent = 'Existing email!';
					container.appendChild(errorMessage);
					
					
					hasErrors = true;
				} else {
					
					hasErrors = false;
					
				}
		

});
	
	emailField.onfocus = function() {
		var errorMessage = document.querySelector("#emailDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};
	
	
	
	phoneField.onblur = function(){
		
		if ((phoneField.value.trim().length < 6)) {
		
				var container = document.getElementById("phoneDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Phone shoud be at least 6 symbols!';
				container.appendChild(errorMessage);
				hasErrors = true;
			} else {
				hasErrors = false;
				
			}
		
	};

	phoneField.onfocus = function() {
		var errorMessage = document.querySelector("#phoneDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};

	passField.onblur = function(){
		
		if ((passField.value.trim().length < 8)) {
		
				var container = document.getElementById("passDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Password shoud be at least 8 symbols!';
				container.appendChild(errorMessage);
				hasErrors = true;
			} else {
				hasErrors = false;
				
			}
		
	};

	passField.onfocus = function() {
		var errorMessage = document.querySelector("#passDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
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
				hasErrors = true;
			} else {
				hasErrors = false;
				
			}
		
	};

	repPassField.onfocus = function() {
		var errorMessage = document.querySelector("#repeatDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};
	
document.forms[1].onsubmit = function(event) {
	if (hasErrors) {
		event.preventDefault();
	}
}
};

