<!DOCTYPE html>
<html>
    <head>
        <title>Car Pooling Service</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    </head>
    <body>
        <div id="map"></div>
    </body>
    <script>
        var map = L.map('map').setView([44.4056, 8.9463], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 30, 
        }).addTo(map);
        map.setZoom(15).addTo(map);

        //var marker = L.marker([44.4056, 8.9463]).addTo(map);
    </script>
</html>