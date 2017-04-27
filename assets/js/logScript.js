
var emailField = document.getElementById('user_email');

var passField = document.getElementById('user_password');

var submit = document.getElementById('log-submit');

var isEmpty = true;
var hasErrors = false;


submit.onclick = function (){
	
	if( emailField.value =="" || passField.value ==""){

		hasErrors = true;
				
	}
	document.forms[1].onsubmit = function(event) {
		if (hasErrors) {
			event.preventDefault();
		}
	}
	
}


function isValidEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}



emailField.onblur = function(){
	if(!(isValidEmail(emailField.value))){
	
					var container = document.getElementById("user_emailDiv");
					var errorMessage = document.createElement('span');
					errorMessage.className = 'errorr';
					errorMessage.textContent = 'Email is not valid!';
					container.appendChild(errorMessage);
					
					
					hasErrors = true;
				} else {
					
					hasErrors = false;									
									
				}
		
};
	
	emailField.onfocus = function() {
		var errorMessage = document.querySelector("#user_emailDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};
	



	passField.onblur = function(){
		
		if ((passField.value.trim().length < 8)) {
		
				var container = document.getElementById("user_passDiv");
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
		var errorMessage = document.querySelector("#user_passDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			hasErrors = false;
		}
	};
	
	
	
document.forms[1].onsubmit = function(event) {
	if (hasErrors) {
		event.preventDefault();
	}

};

