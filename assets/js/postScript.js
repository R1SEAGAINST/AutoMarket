var hpField = document.getElementById('input-hp');
var cilindricsField = document.getElementById('input-cilindrics');
var priceField = document.getElementById('input-price');
var brandField = document.getElementById('select-manufacturer');
var modelField = document.getElementById('select-model');
var kilometersField = document.getElementById('input-kilometers');
var fabricField = document.getElementById('input-fabrication');
var submit = document.getElementById('add');
var descriptField = document.getElementById("vehicle-description-field");



var hpError = false;
var cilindricsError = false;
var priceError = false;
var kilometersError = false;
var descriptError = false;
var fabricError = false;
var hasErrors = false;


submit.onclick = function (){
	
	    if ((priceField.value == "") || (brandField.value == "Select")||(modelField.value == "Select")){
	
		hasErrors = true;
	    }
		document.forms[1].onsubmit = function(event) {
			if (hasErrors) {
				event.preventDefault();
			}
		}
	
	
}

hpField.onblur = function(){
	
	if ( (isNaN(hpField.value)) || (hpField.value <=0) || (hpField.value > 1500)) {
	
			var container = document.getElementById("hpDiv");
			var errorMessage = document.createElement('span');
			errorMessage.className = 'errorr';
			errorMessage.textContent = 'HP shoud be number between 0 and 1500!';
			container.appendChild(errorMessage);
			hpError = true;
		} else {
			hpError = false;
			
		}
	
};

hpField.onfocus = function() {
	var errorMessage = document.querySelector("#hpDiv > .errorr");
	if (errorMessage) {
		errorMessage.parentNode.removeChild(errorMessage);
		hpError = false;
	}
};

fabricField.onblur = function(){
	if(!(isNaN(fabricField.value.trim()))){
	
					var container = document.getElementById("fabricDiv");
					var errorMessage = document.createElement('span');
					errorMessage.className = 'errorr';
					errorMessage.textContent = 'Pleace write some text!';
					container.appendChild(errorMessage);
					
					
					fabricError = true;
				} else {
					
					fabricError = false;
					
					
									
				}
		
};
	
	fabricField.onfocus = function() {
		var errorMessage = document.querySelector("#fabricDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			fabricError = false;
		}
	};
	


	
	cilindricsField.onblur = function(){
		
		if( (isNaN(cilindricsField.value)) || (cilindricsField.value <= 0 ) || (cilindricsField.value > 10000)) {
		
				var container = document.getElementById("cilindricsDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Cilindrics shoud be a number between 0 and 10000!';
				container.appendChild(errorMessage);
				cilindricsError = true;
			} else {
				cilindricsError = false;
				
			}
		
	};

	

cilindricsField.onfocus = function() {
		var errorMessage = document.querySelector("#cilindricsDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			cilindricsError = false;
		}
	};

	priceField.onblur = function(){
		
		if ((isNaN(pricefield.value)) ||(priceField.value < 0) || (priceField.value > 1000000)) {
		
				var container = document.getElementById("priceDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Price is incorrect!';
				container.appendChild(errorMessage);
				priceError = true;
			} else {
				priceError = false;
				
			}
		
	};
	priceField.onfocus = function() {
		var errorMessage = document.querySelector("#priceDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			priceError = false;
		}
	};
	
	kilometersField.onblur = function(){
		
		if ((isNaN(kilometersfield.value)) ||(kolometersField.value < 0) || (kilometersField.value > 1000000)) {
		
				var container = document.getElementById("kilometersDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Choose country, pleace!';
				container.appendChild(errorMessage);
				kilometersError = true;
			} else {
				kilometersError = false;
				
			}
		
	};

	kilometersField.onfocus = function() {
		var errorMessage = document.querySelector("#kilometersDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			kilometersError = false;
		}
	};

	
	
	
descriptField.onblur = function(){
		
		if (!isNaN(descriptField.value)) {
		
				var container = document.getElementById("descriptDiv");
				var errorMessage = document.createElement('span');
				errorMessage.className = 'errorr';
				errorMessage.textContent = 'Pleace write some text!';
				container.appendChild(errorMessage);
				descriptError = true;
			} else {
				descriptError = false;
				
			}
		
	};

	descriptField.onfocus = function() {
		var errorMessage = document.querySelector("#descriptDiv > .errorr");
		if (errorMessage) {
			errorMessage.parentNode.removeChild(errorMessage);
			descriptError = false;
		}
	};
	
document.forms[1].onsubmit = function(event) {
	if( (hasErrors) || (priceError) || (cilindricsError) || (hpError) || (kolometersError) || (descriptError) || (fabricError)){
		event.preventDefault();
	}

};

