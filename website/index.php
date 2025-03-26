<!DOCTYPE html>
<html>
    <head>
        <title>Car Pooling Service</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-oH+m3keP8BQJK4UHpFSPFzZhvzB+B7cmCMjFVlFGviY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-pNtGXX7f1peO7F6+KQQjJqzA5dFEIgpETLKNUO3utnA=" crossorigin=""></script>
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
    // Inizializza la mappa e impostala al centro di una posizione specifica
            var map = L.map('map').setView([41.9028, 12.4964], 13); // Coordinate di Roma (lat, long)

    // Aggiungi le tile OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18,
        }).addTo(map);

    // Aggiungi un marker (opzionale)
        var marker = L.marker([41.9028, 12.4964]).addTo(map)
        .bindPopup('Roma, Italia')
        .openPopup();
</script>
    </body>
</html>