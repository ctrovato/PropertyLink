
$("div.searchDetails").hover(function() {
	// $( this ).fadeOut( 500 );
	// $( this ).fadeIn( 1000 );
	var latitude = $(this).attr('data-latitude');
	var longitude = $(this).attr('data-longitude');
	// console.log(longitude);

	var latitude = $(this).attr('data-latitude');
	var longitude = $(this).attr('data-longitude');
	var mapOptions = {
		zoom: 17,
		center: new google.maps.LatLng(latitude, longitude)
	};

var myLatlng = new google.maps.LatLng(latitude,longitude);
var mapOptions = {
  zoom: 17,
  center: myLatlng
}

var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


// To add the marker to the map, use the 'map' property
var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"Jello!"
});

});