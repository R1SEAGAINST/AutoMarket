$(document).ready(function() {
	$('.placeholder-input').placeholder();
	$("select, input[type='radio'], input[type='checkbox']").uniform();
	
	$('#slides').flexslider({
		animation: "slide",
		controlNav: false,
		slideshow: false
	});
	
	$('.post-image-slides').flexslider({
		animation: "slide",
		controlNav: false,
		slideshow: false
	});
	
	
	$.fn.carouFredSel.defaults.items.visible = 1;
	jQuery(".latest-offers .offer-list").carouFredSel({
		circular: true,
		height: 517,
		direction: "vertical",
		infinite: true,
		align: false,
		auto    : false,
		scroll	: {
			items	: 'page'
		},
		next	: {
			button	: ".scroll-down"
			//key		: 'down'
		},
		prev	: {
			button	: ".scroll-up"
			//key		: 'up'
		}
	});
	
	$(".list-content > ul, .offer-small").on("mouseenter mouseleave", "li a", function(e) {
    if (e.type === "mouseenter") {
        $(this).children(".entry-overlay").fadeIn(300);
    }
    else {
        $(this).children(".entry-overlay").fadeOut(300);
    }
	});
	
	
	$(".list-content > ul, .offer-small").on("mouseenter mouseleave", ".v-sign", function(e) {
		if (e.type === "mouseenter") {
			
			if($(this).closest("li").find(".dealer-data").length) {
				position_now = $(this).closest("li").position(".list-content");
				position_left = $(this).closest(".list-content").width() + 10;
				dealer_name = $(this).parent("li").find(".dealer-data").html();
				// Check the position of the li you hover over, relative to the parent ul
				position_now = $(this).closest("li").position(".list-content");
				position_left = $(this).closest(".list-content").width() + 10;
				if($(".latest-offers .headline").length) {
					add_offset = $(".latest-offers .headline").height();
				}
				
				else {
					add_offset = 0;
				}
				$(".dealer-tooltip div a").html(dealer_name);
				$(".dealer-tooltip").css("top", position_now.top + add_offset);
				$(".dealer-tooltip").css("left", position_left + "px");
				var timeoutid = setTimeout(function(){
					$(".dealer-tooltip").fadeIn("fast");
				},1000);
			}
		}
		else {
			var cleartimeout = setTimeout(function(){
				$(".dealer-tooltip").fadeOut("fast");
			}, 300);
		}
	});
	
	if ($('.pages-top > ul').length) {
		$('.pages-top > ul > li').each(function() {
			if($(this).children("ul").length) {
				$(this).addClass("hasSubmenu");
			}
		});
	}
	
	var old_item;
	var timeout;
	
	$("header .header-buttons .pages-top").mouseenter(function(){
		var item_selected = $(this).children("ul").first();
		$("div.selector").css("position", "inherit");
		clearTimeout(timeout);
		if(old_item){ old_item.hide();}
		item_selected.show();      
	});

	$("header .header-buttons .pages-top").mouseleave(function(){
		var item_selected = $(this).children("ul").first();
		old_item = item_selected;
		timeout= window.setTimeout(function(){
			item_selected.hide();
			$("div.selector").css("position", "relative");
		}, 500);
	});
	
	
	$("#sort-type, #view-count").click(function() {
		$(this).closest(".dropdown-options").children("ul").toggle();
		return false;
	});
	
	$(".images-navigation li a").click(function() {
		full_image = $(this).attr("href");
		$(".main-image img").attr("src", full_image);
		return false;
	});
	
	// preload images
	if($(".images-navigation li").length) {
		var $preloader = $('#preloader');
			$('.images-navigation li a').each(function () {
				$('<a/>', {
					href: $(this).attr('href'),
					rel: "prettyPhoto[gallery1]"
				}).appendTo($preloader);
			});
		$("a[rel^='prettyPhoto']").prettyPhoto({ animation_speed:'fast', slideshow:10000,  hideflash: true});
	}
	
	$(".main-image a").click(function() {
		link_current_image = $(this).children("img").attr("src");
		some_image = $("#preloader a[href^='" + link_current_image + "']");
		$(some_image).click();
		return false;
	});

	function initializeMaps(marker) {
		var marker;
		var myLatlng = new google.maps.LatLng(45.744991,21.226852);
		var mapOptions = {
			zoom: 14,
			center: myLatlng,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		google.maps.event.trigger(map, 'resize');
		map.setZoom( map.getZoom() );
		
		if(marker == "dealer") {
			var marker = new google.maps.Marker({
				icon: "images/icon_google_maps.png",
				position: myLatlng,
				map: map,
				title:"Dealer Name"
			});
		}
		else if (marker == "contact") {
			var marker = new google.maps.Marker({
				icon: "images/icon_contact_maps.png",
				position: myLatlng,
				map: map,
				title:"Contact Name"
			});		
		}
		
		marker.setMap(map);
		google.maps.event.addListener(marker, "click", function() {
			// Add optionally an action for when the marker is clicked
		});
	}
	
	
	if ($(".contact-maps").length) {
		marker = "contact";
		initializeMaps(marker);
	}
	
	$(".click-to-share").click(function() {
		$("body").css("position", "relative");
		$("body").append("<div id='overlay-all'></div>");
		$(".social-icons-round").show();
		return false;
	});
	
	if($(".social-icons-round").length) {
		$(document).mouseup(function (e) {
			var container = $(".social-icons-round");
			if(container.has(e.target).length === 0) {
				$("#overlay-all").remove();
				container.hide();
			}
		});
	}
	
	$('.upload-file-container').mousemove(function(e) {
		$('.upload-file-container span').css('left', e.pageX - 10);
		$('.upload-file-container span').css('top', e.pageY - 10);
	});
	
	// Check for the various File API support, in case you would like to use the file API.
	if (window.File && window.FileReader && window.FileList && window.Blob) {
		// Great success! All the File APIs are supported.
		
	} else {
		//alert('The File APIs are not fully supported in this browser.');
	}
	
	// In case a certain action should take place when the file was selected
	$('.upload-file-container input').change(function(){ handleFileSelect(); });
	
	function handleFileSelect(evt) {
		// action when file input changes
	}
	
	
	function addCountdown() {
		var austDay = new Date();
		austDay = new Date(austDay.getFullYear() + 1, 2 , 12);
		$('#defaultCountdown').countdown({until: austDay});
		$('#year').text(austDay.getFullYear());
	}
	
	if($("#defaultCountdown").length) {
		addCountdown();
	}
	
	// make sure that the li contents are vertically aligned
	$.each(jQuery("#contact-details ul.icon-list li span, #dealer-details ul.icon-list li span"), function() {
		if($(this).height() == 30) {
			jQuery(this).addClass("two-lines");
		}
	});	
	
	if($(".tabbed-content").length) {
		$(".tabbed-content .tabs a").click(function() { 
			var count = $(this).index() + 1;
			$(".tabbed-content .tabs a").removeClass("current-item");
			$(this).addClass("current-item");
			$(".tabbed-content .content-all .tab-content").css("display", "none");
			$(".tabbed-content .content-all .tab-content:nth-child(" + count + ")").fadeIn("slow");
			return false;
		});
	}
	
	if($(".accordion-widget").length) {
		$(".accordion-widget ul li:first-child").addClass("current-item");
		$(".accordion-widget ul li.current-item .item-content").slideDown("fast");
		
		$(".accordion-widget ul li a").click(function() {
		
			if($(this).closest("li").hasClass("current-item")) {
				$(this).closest(".current-item").children(".item-content").slideUp("fast");
				$(this).closest(".current-item").removeClass("current-item");
			} else {
				$(this).closest("li").addClass("current-item");
				$(this).closest(".current-item").children(".item-content").slideDown("fast");
			}
			return false;
		});
	}
	
	$(".view-all-link").click(function() {
		if($(this).hasClass("displaying-all")) {
			$(".view-all-content").slideUp("slow");
			$(this).html("View all");
			$(this).removeClass("displaying-all");
		}
		else {
			$(".view-all-content").slideDown("slow");
			$(this).html("Displaying all");
			$(this).addClass("displaying-all");
		}
		return false;
	});
	
	
	$(".view-select-tabs a").click(function() {
		new_view = $(this).attr("id");
		if($(".list-content").hasClass(new_view)) {
			// Same icon
			return false;
		}
		else {
			var car_item = [];
			$(".list-content > ul > li:not(.dealer-tooltip)").each(function() {
				car_item.push({
					link: $(this).find(".item-link").attr("href"),
					image: $(this).find("img").attr("src"),
					title: $(this).find(".car-title").html(),
					price: $(this).find(".price-tag").html(),
					location: $(this).find(".location-car").html(),
					list_items: $(this).find(".item-specs").html(),
					verified: $(this).find(".v-sign").html(),
					dealer_name: $(this).find(".dealer-data").html()
				});
			});
			var view_html = "";
			if(new_view == "grid-view") {
				// Convert list-view to grid-view
				$("#list-view").removeClass("current");
				$("#grid-view").addClass("current");
				$(".list-content").removeClass("list-view");
				$(".list-content").addClass("grid-view");
				$(".list-content > ul").removeClass("detail-list");
				$(".list-content > ul").addClass("offer-small");
				$(car_item).each(function(k, data) {
					view_html += "<li><a href='"+ data["link"] +"' class='item-link'>";
					view_html += "<img src='" + data["image"] +  "' alt='" + data["title"] + "' />";
					view_html += "<div class='entry-label'>";
					view_html += "<h4 class='car-title'>"+ data["title"] + "</h4>";
					view_html += "<span class='price-tag'>"+ data["price"] +"</span>"
					view_html += "<span class='location-car'>"+ data["location"] + "</span>";
					view_html += "</div>";
					view_html += "<div class='entry-overlay'>";
					view_html += "<ul class='item-specs'>"+ data["list_items"] + "</ul>";
					view_html += "</div>";
					data["verified"] == "V" ? view_html += "<span class='v-sign'>V</span><span class='dealer-data'>"+ data["dealer_name"] +"</span>" : "";
					view_html += "</a></li>";
				});
			}
			else {
				// Convert grid-view to list-view
				$("#grid-view").removeClass("current");
				$("#list-view").addClass("current");
				$(".list-content").addClass("list-view");
				$(".list-content").removeClass("grid-view");
				$(".list-content > ul").removeClass("offer-small");
				$(".list-content > ul").addClass("detail-list");
				$(car_item).each(function(k, data) {
					view_html += "<li><a href='"+ data["link"] + "' class='item-link'>";
					view_html += "<span class='overlay'>Overlay</span>";
					view_html += "<img src='"+ data["image"] +"' alt='"+ data["title"] + "'/>"
					data["verified"] == "V" ? view_html += "<span class='v-sign'>V</span><span class='dealer-data'>"+ data["dealer_name"] +"</span>" : "";
					view_html += "</a>";
					view_html += "<div class='text-content'>";
					view_html += "<div class='layer-one'>";
						view_html += "<h3><a href='"+ data["link"] + "' class='car-title'>"+ data["title"] +"</a></h3>";
						view_html += "<span class='price-tag'>"+ data["price"] +"</span>";
					view_html += "</div>";
					view_html += "<ul class='item-specs layer-two'>"+ data["list_items"] +"</ul>";
					view_html += "<div class='layer-three'>";
					view_html += "<span class='location-car'>"+ data["location"] +"</span>";
					view_html += "<a href='"+ data["link"] +"' class='details-link'>View details</a>";
					view_html += "</div>";
					view_html += "</div>";
					view_html += "</li>";
				});
			}
			view_html += "<li class='dealer-tooltip'><div><a href='#'>Dealer Name</a></div></li>";
			$(".list-content > ul").hide();
			$(".list-content > ul").html("");
			$(".list-content > ul").html(view_html);
			$(".list-content > ul").fadeIn("fast");
		}
		return false;	
	});
	
	
	$("#search-filters .search-button").click(function() {
		return false;
		var list_data = [];
		// used as example for data that should be retrieved by ajax call
		list_data = getJsonList();
		// If there are 1 or more results
		if(list_data.length > 0) {
			$(".list-content > ul").hide();
			$(".list-content > ul").html("");
			var view_html = "";
			// If the current view-mode is grid-view
			if($(".view-select-tabs a.current").is("#grid-view")) {
				$.each(list_data, function(k, data) {
						view_html += "<li><a href='"+ data["link"] +"' class='item-link'>";
						view_html += "<img src='" + data["image"] +  "' alt='" + data["title"] + "' />";
						view_html += "<div class='entry-label'>";
						view_html += "<h4 class='car-title'>"+ data["title"] + "</h4>";
						view_html += "<span class='price-tag'>"+ data["price"] +" Euro</span>"
						view_html += "<span class='location-car'>Location: "+ data["location"] + "</span>";
						view_html += "</div>";
						view_html += "<div class='entry-overlay'>";
						view_html += "<ul class='item-specs'>";
							data["registration"] ? view_html += "<li>Registration " + data["registration"] + "</li>" : "";
							data["fuel"] ? view_html += "<li>" + data["fuel"] + "</li>" : "";
							data["hp"] ? view_html += "<li>" + data["hp"] + " HP</li>" : "";
							data["body"] ? view_html += "<li>Body " + data["body"] + "</li>" : "";
							data["km"] ? view_html += "<li>" + data["km"] + " KM</li>" : "";
						view_html += "</ul>";
						view_html += "</div>";
							data["verified"] == "yes" ? view_html += "<span class='v-sign'>V</span><span class='dealer-data'>"+ data["dealer_name"] +"</span>" : "";
					view_html += "</a></li>";
				});
			}
			// If the current view-mode is list-view
			else {
				$.each(list_data, function(k, data) {
						view_html += "<li><a href='"+ data["link"] + "' class='item-link'>";
						view_html += "<span class='overlay'>Overlay</span>";
						view_html += "<img src='"+ data["image"] +"' alt='"+ data["title"] + "'/>"
						data["verified"] == "yes" ? view_html += "<span class='v-sign'>V</span><span class='dealer-data'>"+ data["dealer_name"] +"</span>" : "";
						view_html += "</a>";
						view_html += "<div class='text-content'>";
						view_html += "<div class='layer-one'>";
							view_html += "<h3><a href='"+ data["link"] + "' class='car-title'>"+ data["title"] +"</a></h3>";
							view_html += "<span class='price-tag'>"+ data["price"] +" Euro</span>";
						view_html += "</div>";
						view_html += "<ul class='item-specs layer-two'>";
							data["registration"] ? view_html += "<li>Registration " + data["registration"] + "</li>" : "";
							data["fuel"] ? view_html += "<li>" + data["fuel"] + "</li>" : "";
							data["hp"] ? view_html += "<li>" + data["hp"] + " HP</li>" : "";
							data["body"] ? view_html += "<li>Body " + data["body"] + "</li>" : "";
							data["km"] ? view_html += "<li>" + data["km"] + " KM</li>" : "";
						view_html += "</ul>";
						view_html += "<div class='layer-three'>";
						view_html += "<span class='location-car'>Location: "+ data["location"] +"</span>";
						view_html += "<a href='"+ data["link"] +"' class='details-link'>View details</a>";
						view_html += "</div>";
						view_html += "</div>";
						view_html += "</li>";
				});
			}
			$(".list-content > ul").html(view_html);
			$(".list-content > ul").fadeIn("fast");
		}
		else {
			alert("Your search did not return any results.");
		}
		return false;
	});
	
	function getJsonList() {
			// get random amount of results 1-20, next line irrelevant to searching
			var randomnumber = Math.floor(Math.random()*20) + 1;
			// Example, populate jsonString by usage of $.ajax and assigning retrieved values to jsonString
			jsonString = [];
			for(i = 0; i < randomnumber; ++i)
			jsonString.push(
				{
					"title" : "Mercedes-Benz 1",
					"image" : "images/mercedes-thumb.jpg",
					"price" : "4980",
					"registration" : "2002",
					"fuel" : "3.0 diesel",
					"hp" : "230",
					"body" : "coupe",
					"km" : "120.000",
					"location" : "Berlin, Germany",
					"link" : "car-details.html"
				},
				{
					"title" : "Mercedes-Benz 1",
					"image" : "images/mercedes-thumb.jpg",
					"price" : "4980",
					"registration" : "2002",
					"fuel" : "3.0 diesel",
					"hp" : "230",
					"body" : "coupe",
					"km" : "120.000",
					"dealer_name" : "Vehicle Dealer",
					"verified" : "yes",
					"location" : "Berlin, Germany",
					"link" : "car-details.html"
				}
			);
			return jsonString;
	}
	
	$("#vehicle-toggle li a").click(function() {
		if($(this).closest("li").hasClass("current-item")) {
			// same icon
			return false;
		}
		else {
			visible_content = $(this).closest("li").attr("id");
			hidden_content = $("#vehicle-toggle li.current-item").attr("id");
			$("#vehicle-toggle li").removeClass("current-item");
			$(this).closest("li").addClass("current-item");
			$("."+hidden_content).hide();
			$("."+visible_content).fadeIn("fast");
			
			if(visible_content == "vehicle-location") {
				initializeMaps("dealer");
			}
		}
		return false;
	});
	
	$("#loan-calculator input[type='submit']").click(function() {
		var loan_amount = $("#loan-amount").val();
		var down_payment = $("#down-payment").val();
		var annual_rate = $("#annual-rate").val();
		var loan_period = $("#loan-period").val();
		rate_value = ((loan_amount - down_payment) / loan_period) * annual_rate;
		rate_value = Math.round(rate_value);
		
		if(!isNaN(rate_value) && rate_value > 0) {
			$(".rate-value .amount-value").html("$" +rate_value+",00");
			$(".rate-value .amount-value").hide();
			$(".rate-value .amount-value").fadeIn("fast");
		}
		else {
			alert("Please correct the field values");
		}
		return false;
	});
	
		
	jQuery('#contact-us-form').submit(function() {
		var content = jQuery("#contact-us-form").serialize();
		
		jQuery.ajax({
			type: "POST",
			url: "mail.php",
			data: {
				value: content
			},
			success: function(response) {
				alert("Thanks for submitting this form");
			},
			error:function(xhr, ajaxOptions, throwError) {
				alert("Not all fields filled in correctly.");
			}
			
		});
	return false;
	});
	

});
