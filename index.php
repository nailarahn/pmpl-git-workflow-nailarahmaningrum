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

    <p>Halaman ini digunakan untuk mensimulasikan penggunaan Git dan GitHub dalam pengembangan perangkat lunak secara kolaboratif.</p>

    <p>Tanggal hari ini: <?php echo date("l, d F Y"); ?></p>

    <p>Jumlah klik: <span id="counter">0</span></p>
    <button onclick="showMessage()">Klik Saya</button>

    <button onclick="toggleMode()">Dark / Light Mode</button>

    <script src="script.js"></script>
</body>
</html>