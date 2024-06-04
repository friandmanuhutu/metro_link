<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/css/dashAdmin.css">
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
                    <a href="">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Agenda Kota</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/pengaduan">
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

            {{-- <div class="details">
                <div class="recentOrders">

                    <div class="cardHeader">
                        <h2>Menunggu Persetujuan</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Nama Penyelenggara</th>
                                <th>Nama Event</th>
                                <th>Kategori</th>
                                <th>Deskripsi Event</th>
                                <th>Tanggal Pelaksanaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($AccagendaKotas as $AccagendaKota)
                            <tr>
                                <td>{{ $agendaKota->id }}</td>
                                <td>{{ $agendaKota->username }}</td>
                                <td>{{ $agendaKota->Nama_Penyelenggara }}</td>
                                <td>{{ $agendaKota->Nama_Event }}</td>
                                <td>{{ $agendaKota->kategori }}</td> <!-- Menampilkan kategori -->
                                <td>{{ $agendaKota->Deskripsi_Event }}</td>
                                <td>{{ $agendaKota->Tanggal_Pelaksanaan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}

    </div>

    <!-- =========== Scripts =========  -->
    <script src="/js/admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
