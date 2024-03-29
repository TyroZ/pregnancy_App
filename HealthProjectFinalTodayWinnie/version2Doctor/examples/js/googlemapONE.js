var map;
var geocoder;

function loadMap() {
	var pune = {lat: -24.653257, lng: 25.906792};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: pune
    });

    var marker = new google.maps.Marker({
      position: pune,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
}

function showAllColleges(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');
		
		strong.textContent = data.P_ID;
		content.appendChild(strong);

		var img = document.createElement('img');
		img.src = 'img/Leopard.jpg';
		img.style.width = '100px';
		content.appendChild(img);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.LATITUDE, data.LONGITUDE),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var LASTNAME = data.FIRSTNAME + ' ' + data.LASTNAME;
	    geocoder.geocode( { 'LASTNAME': LASTNAME}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.P_ID = data.P_ID;
	        points.LATITUDE = map.getCenter().LATITUDE();
	        points.LONGITUDE = map.getCenter().LONGITUDE();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}


function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"actionONE.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}