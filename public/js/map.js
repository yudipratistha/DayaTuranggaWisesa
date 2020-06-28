// Create the map and set the view and some properties
var myMap = L.map('mapid', {
  zoomControl:false
}).setView([$('#pt-lat').val(), $('#pt-lng').val()], 17);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
  // maxZoom: 5,
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  id: 'mapbox.streets'
}).addTo(myMap);

var dataset = {
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "Name": $('#pt-name').val(),
        "Telephone" : $('#pt-telephone').val() ,
        "Fax" : $('#pt-fax').val() ,
        "Address": $('#pt-address').val(),
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          $('#pt-lat').val(),
          $('#pt-lng').val()
        ]
      }
    }
  ]
};

// map over the dataset features, create a marker for each and link a popup.
dataset.features.map(function(feature) {
	const location = feature.geometry.coordinates;
  let key = Object
  	.keys(feature.properties)
    .filter(item => !['Name'].includes(item));
  const popupContent = 
  	'<h5 style="color: #333; margin-bottom:10px;">' + 
    	feature.properties.Name + 
    '</h5>' + 
    key.map((name) => '<p><strong>' + name + '</strong>: ' + feature.properties[name] + '</p>').join('');
  
  // add the marker and popup to the map.
  marker = L.marker(location).addTo(myMap).bindPopup(popupContent);
  marker.openPopup();
});