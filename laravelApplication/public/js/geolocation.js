$("div.searchDetails").hover(function() {
	// $( this ).fadeOut( 500 );
	// $( this ).fadeIn( 1000 );
	var latitude = $(this).attr('data-latitude');
	var longitude = $(this).attr('data-longitude');
	// console.log(longitude);

	var latitude = $(this).attr('data-latitude');
	var longitude = $(this).attr('data-longitude');
	var mapOptions = {
		zoom: 19,
		center: new google.maps.LatLng(latitude, longitude)
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

});