<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
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
        .school-image {
            display: block;
            margin: 0 auto;
            width: 80%;
            height: auto;
        }
        .extracurriculars {
            margin-top: 20px;
        }
        .extracurriculars ul {
            list-style-type: none;
            padding: 0;
        }
        .extracurriculars li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="welcome.php">Pendaftaran</a>
        <a href="dataSiswa.php">Data Siswa</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1>Selamat Datang di Sekolah XYZ</h1>
        <img src="path_to_your_school_image.jpg" alt="Sekolah XYZ" class="school-image">
        
        <h2>Tentang Sekolah</h2>
        <p>Sekolah XYZ adalah lembaga pendidikan yang berkomitmen untuk memberikan pendidikan berkualitas kepada siswa. Dengan fasilitas modern dan tenaga pengajar yang berpengalaman, kami berusaha menciptakan lingkungan belajar yang kondusif dan menyenangkan.</p>
        
        <h2>Kegiatan Ekstrakurikuler</h2>
        <div class="extracurriculars">
            <ul>
                <li>Basket</li>
                <li>Sepak Bola</li>
                <li>Pramuka</li>
                <li>Paduan Suara</li>
                <li>Teater</li>
                <li>Robotika</li>
            </ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
