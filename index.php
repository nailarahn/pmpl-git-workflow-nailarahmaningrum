<?php
// Git Workflow Simulation
// File ini digunakan untuk simulasi perubahan dalam praktikum Git.

$title = "Git Workflow Simulation";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1><?php echo $title; ?></h1>

    <p>Selamat datang di praktikum Git Workflow.</p>

<<<<<<< HEAD
    <p>Halaman ini digunakan untuk mensimulasikan penggunaan Git dan GitHub dalam pengembangan perangkat lunak secara kolaboratif.</p>

    <p>Tanggal hari ini: <?php echo date("l, d F Y"); ?></p>

    <p>Jumlah klik: <span id="counter">0</span></p>
    <button onclick="showMessage()">Klik Saya</button>

    <button onclick="toggleMode()">Dark / Light Mode</button>

    <p class="time">
        Halaman ini diakses pada: <?php echo date("d M Y - H:i:s"); ?>
    </p>

    <button onclick="showMessage()">Klik Saya</button>

    <Footer>
        <p> 2026 Praktikum Git Workflow</p>
    </Footer>

    <script src="script.js"></script>
</body>
</html>