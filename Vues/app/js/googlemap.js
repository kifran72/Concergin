
    jQuery(function($) {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCPQ2QXlHldfVz013YhkCluTmFMnLbF8ZM&sensor=false&callback=initialize";
    document.body.appendChild(script);
    });
    function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
    mapTypeId: 'roadmap'
    };
    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
    
    // Multiple Markers
    var markers = [
    ['77210 Avon, France', 48.416572,2.7265199999999368],
    ['77210 Samois-sur-Seine, France', 48.4222447524136,2.736743688583374],
    ['77210 Avon, France', 48.420400628583806,2.7376502752304077],
    ['77300 Fontainebleau, France', 48.4061229,2.687219300000038]
    ];
    
    // Info Window Content
    var infoWindowContent = [
    ['<div class="info_content">' +
        '<h3>Gare de Fontainebleau-Avon</h3>' +
        '<p>Situé sur le quai de la gare de Fontainebleau-Avon, le comptoir de Concierg’In vous accueille du lundi au vendredi, de 6h30 à 9h30 et de 16h30 à 19h30.</p>' +        '</div>'],
        ['<div class="info_content">' +
            '<h3>Corning S.A.S.</h3>' +
            "<p>N'hésitter pas bénéficer d'une conciergerie traditionnelle au sein de votre entreprise</p>" +
        '</div>'],
        ['<div class="info_content">' +
            "<h3>Centre d'affaire ODEON</h3>" +
            "<p>Retrouver conciergin dans le hall du centre d'affaires</p>" +
        '</div>'],
        ['<div class="info_content">' +
            "<h3>Stop & Work </h3>" +
            "<p>Retrouver conciergin dans le hall du centre d'affaires</p>" +
        '</div>']
        ];
        
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Loop through our array of markers & place each one on the map
        for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0]
        });
        
        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        infoWindow.setContent(infoWindowContent[i][0]);
        infoWindow.open(map, marker);
        }
        })(marker, i));
        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
        }
        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
        });
        
        }
