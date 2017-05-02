
function createDealerDiv(dealer) {
	
	var countUsers = document.getElementById('countUsers');
	countUsers.innerHTML = dealer.countAllUsers+" Results";
	
	
	var dealerDivSecond = document.createElement('div');
	dealerDivSecond.className = "info-list";
	
	
	
	var dealerUl = document.createElement('ul');
	dealerUl.className = "detail-list";
	dealerDivSecond.appendChild(dealerUl);
	
	var dealerLi = document.createElement('li');
	dealerUl.appendChild(dealerLi);
	
	var dealerA = document.createElement('a');
	dealerA.className = "item-link";
	dealerA.href = "/DealerDetailsController.php?id="+dealer.id;
	dealerLi.appendChild(dealerA);
	
	var dealerSpan = document.createElement('span');
	dealerSpan.className = "overlay";
	dealerA.appendChild(dealerSpan);
	
	var dealerImg = document.createElement('img');
	dealerImg.src = "http://localhost/AutoMarket/assets/images/userimage/"+dealer.image;
	dealerImg.alt = "Picture";
	dealerA.appendChild(dealerImg);
	
	var dealerDivThird = document.createElement('div');
	dealerDivThird.className = "text-content";
	dealerLi.appendChild(dealerDivThird);
	
	var dealerDivForth = document.createElement('div');
	dealerDivForth.className = "layer-one";
	dealerDivThird.appendChild(dealerDivForth);
	
	var dealerH3 = document.createElement('h3');
	dealerH3.className = "detail-list";
	dealerH3.innerHTML = dealer.username;
	dealerDivForth.appendChild(dealerH3);
	
	var dealerAinner = document.createElement('a');
	dealerAinner.href = '/DealerDetailsController.php?id='+dealer.id
	dealerH3.appendChild(dealerAinner);
	
	var dealerSpanCount = document.createElement('span');
	dealerSpanCount.className = "amount";
	dealerSpanCount.innerHTML = dealer.countUsersPosts;
	dealerDivForth.appendChild(dealerSpanCount);
	
	var dealerUlAdd = document.createElement('ul');
	dealerUlAdd.className = "item-specs layer-two";
	dealerDivThird.appendChild(dealerUlAdd);
	
	var dealerLiAdd= document.createElement('li');
	dealerLiAdd.innerHTML =  dealer.address;
	dealerUlAdd.appendChild(dealerLiAdd);
	
	var dealerDivFifth = document.createElement('div');
	dealerDivFifth.className = "layer-three";
	dealerDivThird.appendChild(dealerDivFifth);
	
	var dealerAMap = document.createElement('a');
	dealerAMap.className = "view-on-map";
	dealerAMap.href = "";
	dealerAMap.innerHTML = "View on Map";
	dealerDivFifth.appendChild(dealerAMap);
	
	var dealerSpan2 = document.createElement('span');
	dealerSpan2.className = "phone-number";
	dealerSpan2.innerHTML = dealer.phone;
	dealerDivFifth.appendChild(dealerSpan2);
	
	var dealerALast = document.createElement('a');
	dealerALast.className = "details-link";
	dealerALast.href = '/DealerDetailsController.php?id='+dealer.id;
	dealerALast.innerHTML = "View details";
	dealerDivFifth.appendChild(dealerALast);
	
	var dealerDivFirst = document.getElementById('dealerPage');
	dealerDivFirst.appendChild(dealerDivSecond);
	
}


function listDealers() {
	
	
	var xhr = new XMLHttpRequest();
	xhr.open('GET','./ajaxControllerDealerList.php', true);

	xhr.onload = function() {
		if (xhr.status == 200) {
			
			var data = JSON.parse(xhr.responseText);
			console.log(data);
			
			for (var i = 0; i < data.length; i++) {
				console.log(data[i]);
				
				createDealerDiv(data[i]);


			}

			
		}
	}
	xhr.send(null);
}

document.addEventListener('DOMContentLoaded', function() {
	listDealers();
});
