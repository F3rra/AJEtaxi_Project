<!DOCTYPE html>
<html>
    <head>
        <title>AJEtaxi - Car Pooling Service</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <link rel="stylesheet" href="style.css">
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    </head>
    <body>
        <header>
            AJEtaxi
        </header>
        <div id="map"></div>
        <footer>
            © 2025 AJEtaxi - Tutti i diritti riservati
        </footer>
        <script>
            var map = L.map('map').setView([44.4056, 8.9463], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
            }).addTo(map);
            map.setZoom(15);
            // Aggiungi un marker per indicare una posizione
            var marker = L.marker([44.4056, 8.9463]).addTo(map);
            marker.bindPopup("<b>Benvenuto su AJEtaxi!</b><br>Inizia il tuo viaggio con noi.").openPopup();
        </script>
    </body>
</html>