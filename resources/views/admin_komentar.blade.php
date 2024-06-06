<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="/assets/logo-01.png" type="image/x-icon">
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
                    <a href="/admin/pengaduan">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Pengaduan</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/komentar">
                        <span class="icon">
                            <ion-icon name="chatbubbles"></ion-icon>
                        </span>
                        <span class="title">Komentar</span>
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
            <h1>Daftar Komentar</h1>
            @foreach($comments as $comment)
            <div class="comment-card">
                <div class="username">{{ $comment->username }}</div>
                <div class="email">{{ $comment->email }}</div>
                <div class="content">{{ $comment->komentar }}</div>
            </div>
            @endforeach

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Pengaduan Masyarakat</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Komentar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->username }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->komentar }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
