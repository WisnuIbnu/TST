<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir TST</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 15px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .container {
            flex: 1;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="home.php">Dashboard</a>
        <a href="welcome.php">Pendaftaran</a>
        <a href="dataSiswa.php">Data Siswa</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1>DATA PENDAFTARAN SISWA BARU</h1>
        <form id="dataForm" onsubmit="return confirm('Apakah anda yakin ingin mendaftar ?')" class="d-inline">
            
        </form>

        <div id="dataContainer">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Asal Sekolah</th>
                        <th>No HP</th>
                    </tr>
                </thead>
                <tbody id="dataList"></tbody>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>