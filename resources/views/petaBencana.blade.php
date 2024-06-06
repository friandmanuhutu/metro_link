<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetroLink</title>
    <link rel="stylesheet" href="/css/service.css">
    <link rel="icon" href="/assets/logo-01.png" type="image/x-icon">
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <style>
        #map { height: 50vh; }
        .dokumentasi-category{
        margin: 50px 0px 0px 0px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-size: 45px;
        color: #000000;
        }
    </style>
</head>
<body>
    <div class="all">
        <header>
            <a href="#" class="logo">
                <img src="/assets/logo-01.png">
            </a>
            <ul class="nav-list">
                <li><a href="/metrolink">Home</a></li>
                <li><a href="/metrolink/service">Service</a></li>
                <li><a href="/metrolink/agenda_kota">Agenda Kota</a></li>
                <li><a href="/metrolink/peta_bencana">Peta Bencana</a></li>
                <li><a href="/metrolink/about_us">About Us</a></li>
                <li><a href="/metrolink/galery">Gallery</a></li>
            </ul>
            <li><a href="/logout" style="background-color: #a60000;border-radius: 40px; color: white;padding: 8px 20px; font-size: 15px;font-weight: 600;border-bottom: 2px solid transparent; transition: all .55s ease;">Logout</a></li>
            <div class="bx bx-menu" id="menu-icon"></div>
        </header>

    <div class="container">
        <div class="content">
            <h1>Peta Bencana</h1>
            <p>Hindari segera musibah yang ada!</p>
            <a href="/metrolink">Home</a>
            <span>/ <a href="/metrolink/peta">Peta Bencana</a></span>
        </div>
    </div>
    <section class="Ttgkami">
        <h2 class="dokumentasi-category">Peta</h2>
        <div class="line"></div>
    </section>
    <div id="map"></div>

    <div class="scroll-up">
        <a href="#"><i class="ri-arrow-up-s-fill"></i></a>
    </div>
    <footer>
        <div class="footer-content">
            <div class="row">
                <div class="col">
                    <img src="/assets/logo-01.png" class="logo">
                    <p>Surabaya merupakan sebuah daerah yang menjadi Ibu Kota Provinsi Jawa Timur. Surabaya memiliki hari jadi pada tanggal 31 Mei 1293. Kota Surabaya juga menjadi kota metropolitan terbesar di Provinsi Jawa Timur.</p>
                </div>
                <div class="col">
                    <h3>Teams</h3>
                    <p>Ahmad Hazli</p>
                    <p>Arya Arief</p>
                    <p>Friand Jacnus</p>
                    <p class="email-id">metrolink@outlook.com</p>
                    <h4>Telkom University Surabaya</h4>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="/metrolink">Home</a></li>
                        <li><a href="/metrolink/service">Service</a></li>
                        <li><a href="/metrolink/agenda_kota">Agenda Kota</a></li>
                        <li><a href="/metrolink/about_us">About Us</a></li>
                        <li><a href="/metrolink/galery">Gallery</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter</h3>
                    <form>
                        <i class="fa fa-envelope-o"></i>
                        <input class="footer-email" type="email" id="" placeholder="Enter your email id">
                        <button type="submit"><i class="fa fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-whatsapp"></i>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copy-right">Student of Telkom University Surabaya © 2024 - All Rights Reserved</p>
        </div>
    </footer>
    </div>

    <script src="/js/script.js"></script>
    <script>
        const map = L.map('map'); 
        // Initializes map

        map.setView([-2.5489, 118.0149], 5); 
        // Sets initial coordinates to Indonesia and zoom level

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap metro-link'
        }).addTo(map); 
        // Sets map data source and associates with map

        let marker, circle, zoomed;

        navigator.geolocation.watchPosition(success, error);

        function success(pos) {

            const lat = pos.coords.latitude;
            const lng = pos.coords.longitude;
            const accuracy = pos.coords.accuracy;

            if (marker) {
                map.removeLayer(marker);
                map.removeLayer(circle);
            }
            // Removes any existing marker and circule (new ones about to be set)

            marker = L.marker([lat, lng]).addTo(map);
            circle = L.circle([lat, lng], { radius: accuracy }).addTo(map);
            // Adds marker to the map and a circle for accuracy

            if (!zoomed) {
                zoomed = map.fitBounds(circle.getBounds()); 
            }
            // Set zoom to boundaries of accuracy circle

            map.setView([lat, lng]);
            // Set map focus to current user position

        }

        function error(err) {

            if (err.code === 1) {
                alert("Please allow geolocation access");
            } else {
                alert("Cannot get current location");
            }

        }

        // Contoh data bencana alam (koordinat dan jenis)
        const disasters = [
            { lat: -7.10167, lng: 112.166, type: 'Banjir', location: 'Kadung Rembung (Lamongan)' },
            { lat: -7.12362, lng: 112.312, type: 'Banjir', location: 'Babat (Lamongan)' },
            // tambahkan data bencana alam lainnya jika ada
        ];

        // Loop melalui setiap bencana alam dan tambahkan marker ke peta
        disasters.forEach(disaster => {
            const { lat, lng, type, location } = disaster;
            const iconUrl = getIconUrlByType(type); // fungsi untuk mendapatkan URL ikon berdasarkan jenis bencana
            const icon = L.icon({
                iconUrl,
                iconSize: [32, 32],
                iconAnchor: [16, 32],
            });
            const marker = L.marker([lat, lng], { icon }).addTo(map);

            // Tambahkan pop-up dengan informasi yang sudah diubah
            marker.bindPopup(`<b>Daerah :</b> ${location}<br><b>Jenis Bencana:</b> ${type}`);

            // Tambahkan event listener untuk menampilkan informasi saat klik
            marker.on('click', function (e) {
                this.openPopup();
            });
        });


        // Fungsi untuk mendapatkan URL ikon berdasarkan jenis bencana
        function getIconUrlByType(type) {
            // Tentukan URL ikon berdasarkan jenis bencana
            switch (type) {
                case 'Gempa Bumi':
                    return '/assets/Earthquake.png';
                case 'Banjir':
                    return '/assets/Flood.png';
                // tambahkan kasus lain jika diperlukan
                default:
                    return '/assets/default.png';
            }
        }
    </script>

</body>
</html>
