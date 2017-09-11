var map, marker, geocoder;

$(document).ready(function(){
	initMap();

	d3.csv('./Tech Companies in SF - Sheet1.csv', function(companies){
		// companies is an array of json objects containing the data in from the csv
		console.log(companies);
		placeMarkers(companies);
	});
});

// create map
function initMap() {
	geocoder = new google.maps.Geocoder();
	map = new google.maps.Map(document.getElementById('map'), {
	  center: { lat: 37.789436, lng: -122.401163 },
	  zoom: 12
	});
}

// place markers
function placeMarkers(companies){
	(function myLoop (i) {          
		setTimeout(function () {  
			var address = companies[i].address;
			console.log(address) 
			geocoder.geocode( { 'address': address }, function(results, status) {
	    		if (status == 'OK') {
					var marker = new google.maps.Marker({
					    map: map,
					    position: results[0].geometry.location
					});
				} else {
				console.error('Geocode was not successful for the following reason: ' + status);
				}
        	});
	  		if (--i) myLoop(i);    
		}, 500)
	})(companies.length - 1); 
}





