<!DOCTYPE html>
<html>
    <head>
        <title>Car Pooling Service</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    </head>
    <body>
        <header>
            <h1>Welcome to AJEtaxi</h1>
        </header>
        <main>
            <div id="map"></div>
        </main>
        <footer>
            <p>&copy; 2023 AJEtaxi</p>
        </footer>
        <script>
            // Initialize the map
            var map = L.map('map').setView([51.505, -0.09], 13);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add a marker
            var marker = L.marker([51.505, -0.09]).addTo(map);
            marker.bindPopup("<b>Welcome!</b><br>This is your starting point.").openPopup();
        </script>
    </body>
</html>