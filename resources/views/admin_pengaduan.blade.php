<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/css/dashAdmin.css">
    <link rel="stylesheet" href="/css/animations.css"> <!-- Add this line -->
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">{{ Auth::user()->username }}</span>
                    </a>
                </li>
                <li>
                    <a href="/admin">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/agenda_kota">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Agenda Kota</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Pengaduan</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/akun_admin">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Akun</span>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Pengaduan Masyarakat</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengadu</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Judul Pengaduan</th>
                                <th>Deskripsi Pengaduan</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduanData as $pengaduan)
                            <tr>
                                <td>{{ $pengaduan->id }}</td>
                                <td>{{ $pengaduan->username }}</td>
                                <td>{{ $pengaduan->email }}</td>
                                <td>{{ $pengaduan->telepon }}</td>
                                <td>{{ $pengaduan->judul_pengaduan }}</td>
                                <td>{{ $pengaduan->deskripsi_pengaduan }}</td>
                                <td>{{ $pengaduan->alamat }}</td>
                                <td><a href="{{ route('pengaduan.show', $pengaduan->id) }}" class="view-link">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/js/admin.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.view-link');

        links.forEach(link => {
            link.addEventListener('mouseover', function () {
                this.style.color = 'darkblue';
            });

            link.addEventListener('mouseout', function () {
                this.style.color = 'blue';
            });
        });
    });
    </script> <!-- Add this line -->
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
