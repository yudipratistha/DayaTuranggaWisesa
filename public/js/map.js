// Create the map and set the view and some properties
var myMap = L.map('mapid').setView([-8.6887329, 115.1911576], 17);
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
        "stemburo": "Sporthal Nieuwland",
        "aantal_stemmen": 3753,
        "lat": -8.6887329,
        "lng": 115.1911576,
        "Actief": 34,
        "Amersfoort 2014": 348,
        "Blanco lijst Chel": 5,
        "Burger Partij Amersfoort": 258,
        "Christen Democratisch App\u00e9l": 556,
        "ChristenUnie": 350,
        "DENK": 117,
        "Democraten 66": 525,
        "GroenLinks": 345,
        "Partij van de Arbeid": 239,
        "Socialistische Partij": 189,
        "Staatkundig Gereformeerde Partij": 42,
        "Volkspartij voor Vrijheid en Democratie": 717,
        "Vrede en Recht": 28
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          -8.6887329,
          115.1911576
        ]
      }
    }
  ]
};

// map over the dataset features, create a marker for each and link a popup.
dataset.features.map(function(feature) {
	const location = feature.geometry.coordinates;
  let partijen = Object
  	.keys(feature.properties)
    .filter(item => !['stemburo', 'lat', 'lng'].includes(item));
  
  const popupContent = 
  	'<h2>' + 
    	feature.properties.stemburo + 
    '</h2>' + 
    partijen.map((naam) => '<p><strong>' + naam + '</strong>: ' + feature.properties[naam] + '</p>').join('');
  
  // add the marker and popup to the map.
  L.marker(location).addTo(myMap).bindPopup(popupContent);
});