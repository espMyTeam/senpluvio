<script>
/**
*fonction callback en cas de succes
*/

var   lat    =  14.768945 ;
var   lng    = -17.26587;
var   coords = new google.maps.LatLng(lat,lng);;
var   marker ;
var   map;
var infowindow;
var tableau=  new array();

function initialize(){
		var myOptions={
			center: coords, // centre de la carte
			zoom: 8, //zoom level à 6
			mapTypeId: google.maps.MapTypeId.ROADMAP //type de map
		};
		map = new google.maps.Map(document.getElementById('canevas_map'),myOptions); // initialisation de la map

		downloadUrl("xml/point.xml", function(data) {
		      var markers = data.documentElement.getElementsByTagName("marker");
		      for (var i = 0; i < markers.length; i++) {
			var latlng = new google.maps.LatLng(parseFloat(markers[i].getAttribute("lat")),
				                    parseFloat(markers[i].getAttribute("lng")));
			 tableau[i]=markers[i].getAttribute("id");	                    
			createMarker(markers[i].getAttribute("description"), latlng);
			
			google.maps.event.addListener(tableau[i], "click", function() {
			  document.location.href="ajouter.php"
			  
			   
				});		
		       }
		  });

}
	
function createMarker(description, latlng) {
	    var marker = new google.maps.Marker({position: latlng, map: map});
	    google.maps.event.addListener(marker, "mouseover", function() {
	      if (infowindow) infowindow.close();
	      infowindow = new google.maps.InfoWindow({content:description});
	      infowindow.open(map, marker);
	     
	    });
	    
	    //a ce niveau tu definit ce qui doit etre effectuer en cas de click
	     google.maps.event.addListener(marker, "click", function() {
			 alert("click");
	    
	    });
	  
}
	
google.maps.event.addDomListener(window, 'load', initialize);
</script>
