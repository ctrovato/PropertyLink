
$( "div.searchDetails" ).hover(function() {
  // $( this ).fadeOut( 500 );
  // $( this ).fadeIn( 1000 );
  var latitude = $(this).attr('data-latitude');
  var longitude = $(this).attr('data-longitude');
  // console.log(longitude);

});


function initialize() {

  var latitude = $(this).attr('data-latitude');
  var longitude = $(this).attr('data-longitude');
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(latitude, longitude)
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);



